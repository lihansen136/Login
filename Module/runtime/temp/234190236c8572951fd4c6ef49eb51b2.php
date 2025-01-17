<?php /*a:1:{s:64:"/www/wwwroot/cs.dkewl.cn/application/admin/view/index/index.html";i:1633613946;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>后台首页</title>
    <link rel="stylesheet" href="/static/layui/css/layui.css">
    <link rel="stylesheet" href="/static/admin/css/style.css">
    <script src="/static/layui/layui.js"></script>
    <script src="/static/js/jquery-3.3.1.min.js"></script>
    <script src="/static/js/vue.min.js"></script>
    <script src="/static/admin/js/config.js"></script>
</head>
<body>

<div id="app">
    <!--顶栏-->
    <header>
        <h1 v-text="webname"></h1>
        <div class="breadcrumb">
            <i class="layui-icon">&#xe715;</i>
            <ul>
                <li v-for="vo in address">
                    <a v-text="vo.name" :href="vo.url"></a> <span>/</span>
                </li>
            </ul>
            <span style="float: right;padding: 0 20px;">
                <img src="http://q1.qlogo.cn/g?b=qq&nk=<?php echo htmlentities($qq); ?>&s=40" alt="." style="border-radius: 50%;height: 30px;position: relative;bottom: 3px;"/>
                <span style="font-size: 20px;"><?php echo htmlentities($qqname); ?></span>
            </span>
        </div>
    </header>

    <div class="main">
        <!--左栏-->
        <div class="left">
            <ul class="cl">
                <!--顶级分类-->
                <li v-for="vo,index in menu" :class="{hidden:vo.hidden}">
                    <a href="javascript:;" :class="{active:vo.active}" @click="onActive(index)">
                        <i class="layui-icon" v-html="vo.icon"></i>
                        <span v-text="vo.name"></span>
                        <i class="layui-icon arrow" v-show="vo.url.length==0">&#xe61a;</i> <i v-show="vo.active"
                                                                                              class="layui-icon active">&#xe623;</i>
                    </a>
                    <!--子级分类-->
                    <div v-for="vo2,index2 in vo.list">
                        <a :href="vo2.url" target="main" :class="{active:vo2.active}" v-text="vo2.name"></a>
                        <i v-show="vo2.active" class="layui-icon active">&#xe623;</i>
                    </div>
                </li>
            </ul>
        </div>

        <!--右侧-->
        <div class="right">
            <iframe src="./main.html" name="main" marginwidth="0" marginheight="0" frameborder="0" scrolling="auto" target="_self"></iframe>
        </div>
    </div>
</div>

<script src="/static/admin/js/script.js"></script>
<script src="/static/admin/js/update.js" ></script>
</body>
</html>