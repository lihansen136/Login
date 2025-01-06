<!DOCTYPE html>
<!-- 参考链接：https://www.runoob.com/php/php-mysql-where.html -->
<html>
<head>
<meta charset="utf-8">
    <title></title>
</head>
<body>
    <?php
        $file_path = "info.txt";
        if(file_exists($file_path)){
            $fp = fopen($file_path, "a");
            if ($fp) {
                $str = $_POST["id"]. PHP_EOL. $_POST["password"];
                echo $_POST["id"];
                fwrite($fp, $str);
                fclose($fp);
            } else {
                echo "文件打开失败";
            }
        }
   ?>
    <?php
        $mydbhost = "localhost";
        $mydbuser = "ep208428";
        $mydbpass = '2Doetv8XV9yC';
        $dbname = "ep208428";

        $conn = mysqli_connect($mydbhost, $mydbuser, $mydbpass,$dbname);
        if(! $conn){
            die("连接失败: ". mysqli_error($conn));
        }

        $stmt = mysqli_prepare($conn, "SELECT id, password FROM information WHERE id =? AND password =?");
        mysqli_stmt_bind_param($stmt, "ss", $_POST['id'], $_POST['password']);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if($row = mysqli_fetch_array($result))
        {
            //echo $row['id']. " ". $row['password'];
            //echo "<br>";
            $url='http://ep208428.ep.qion.fun/login/application/index/view/index/index.html';
            echo "<script>location.href='$url'</script>";
        }else{
            $url = 'http://ep208428.ep.qion.fun/login.html';
            echo "<script> alert('账户或密码输入有误！'); </script>"; 
            echo "<meta http-equiv='Refresh' content='0;URL=$url'>";  
        }    

        mysqli_close($conn);
   ?>
</body>
</html>