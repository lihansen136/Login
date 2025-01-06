<?php /*a:4:{s:69:"/www/wwwroot/cs.dkewl.cn/application/index/view/index/subnetmask.html";i:1633843828;s:59:"/www/wwwroot/cs.dkewl.cn/application/index/view/header.html";i:1678348269;s:56:"/www/wwwroot/cs.dkewl.cn/application/index/view/nav.html";i:1668951541;s:59:"/www/wwwroot/cs.dkewl.cn/application/index/view/footer.html";i:1678347145;}*/ ?>
<!DOCTYPE html><html lang="zh-CN"><head><meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /><title><?php echo htmlentities(app('config')->get('web.subnetmask.title')); ?></title><meta name="applicable-device" content="pc,mobile" /><meta http-equiv="Cache-Control" content="no-transform" /><meta http-equiv="Cache-Control" content="no-siteapp" /><meta name="keywords" content="<?php echo htmlentities(app('config')->get('web.subnetmask.keywords')); ?>" /><meta name="description" content="<?php echo htmlentities(app('config')->get('web.subnetmask.description')); ?>" /><meta name="renderer" content="webkit" /><meta name="apple-mobile-web-app-capable" content="yes" /><link rel="icon" href="/favicon.ico" mce_href="/favicon.ico" type="image/x-icon" /><link href="/static/style/bootstrap.min.css" rel="stylesheet" type="text/css" /><link href="/static/style/tool.css" rel="stylesheet" type="text/css" /><link href="/static/style/subnetmask.css" rel="stylesheet" /><!--[if lt IE 9]><script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script><script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]--><?php echo app('config')->get('web.header'); ?></head><body><div class="navbar navbar-default navbar-static-top navbar-fixed-top">
    <div class="jz container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar"><span class="sr-only">刀客源码网站长工具网</span> <span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            <a class="navbar-brand" href="/" title="刀客源码网在线工具网"><em class="logo_ico glyphicon glyphicon-wrench"></em>刀客源码网站长工具网</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse" role="navigation">
            <ul class="nav navbar-nav" id="top_menu">
                <li class="dropdown"><a href="/" class="dropdown-toggle" data-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false">JSON工具<span
                        class="caret"></span></a>
                    <ul class="dropdown-menu ul-list">
                        <li><a href="/json/">Json格式化</a></li>
                        <li><a href="/jsonudview/"> Json格式化(上下)</a></li>
                        <li><a href="/jsonlrview/">Json格式化(左右)</a></li>
                        <li><a href="/jsonzip/">Json在线压缩转义</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="/json2cs/">Json生成C#实体类</a></li>
                        <li><a href="/json2java/"> Json生成Java实体类</a></li>
                        <li><a href="/json2go/">Json生成Go结构体</a></li>
                        <li><a href="/sql2java/">SQL转Java实体类</a></li>
                        <li><a href="/json2xml/">XML和Json在线互转</a></li>
                        <li><a href="/excel2json/">Excel/CSV转Json格式</a></li>
                        <li><a href="/json2excel/">Json转Excel/CSV格式</a></li>
                        <li><a href="/json2get/">JSON和GET参数互转</a></li>
                        <li><a href="/json2yaml/">JSON转YAML</a></li>
                    </ul>
                <li class="dropdown">
                <li class="dropdown"><a href="/" class="dropdown-toggle" data-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false">格式化转换<span
                        class="caret"></span></a>
                    <ul class="dropdown-menu ul-list">
                        <li><a href="/formathtml/">HTML格式化/压缩</a></li>
                        <li><a href="/formatcss/" style="color:#f30"> CSS格式化/压缩</a></li>
                        <li><a href="/formatjs/">JS格式化/压缩</a></li>
                        <li><a href="/endecodejs/">JS加密/解密</a></li>
                        <li><a href="/confundirjs/"> JS代码混合加密</a></li>
                        <li><a href="/formatsql/">SQL压缩/格式化</a></li>
                        <li><a href="/formatphp/">PHP代码格式化工具</a></li>
                        <li><a href="/formatxml/">XML压缩/格式化 </a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="/htmloutjs/" style="color:#f30">Html/JS互转</a></li>
                        <li><a href="/htmlescape/"> Html转义工具</a></li>
                        <li><a href="/html2cj/"> Html转C#/JSP</a></li>
                        <li><a href="/html2php/">Html转PHP代码</a></li>
                        <li><a href="/html2all/">Html转ASP/Perl</a></li>
                        <li><a href="/htmlfromcsv/">Excel转HTML表格</a></li>
                        <li><a href="/htmltable/">Html表格生成器</a></li>
                        <li><a href="/htmlmarkdown/">HTML/MarkDown互转</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="/regex/" style="color:green">正则表达式测试工具</a></li>
                        <li><a href="/regexcode/">正则生成代码</a></li>
                        <li><a href="/formatfilter/">Html过滤工具</a></li>
                        <li><a href="/runjs/">运行Js/html/css</a></li>
                        <li><a href="/xpath/">Xpath工具</a></li>
                    </ul>
                <li class="dropdown">
                <li class="dropdown"><a href="/" class="dropdown-toggle" data-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false">加解密编码<span
                        class="caret"></span></a>
                    <ul class="dropdown-menu ul-list">
                        <li><a href="/md5/">MD5加密工具</a></li>
                        <li><a href="/urlcode/">URL网址16进制加密</a></li>
                        <li><a href="/urlthunder/">迅雷旋风URL加解密</a></li>
                        <li><a href="/base64/"> Base64加密/解密</a></li>
                        <li><a href="/escape/">Escape加密/解密</a></li>
                        <li><a href="/deencrypt/">对称加密/解密</a></li>
                        <li><a href="/shaencrypt/">SHA/SHA256加密</a></li>
                        <li><a href="/allencrypt/">散列/哈希加密大全</a></li>
                        <li><a href="/morse/">摩尔斯电码加解密</a></li>
                        <li><a href="/password/">密码生成器</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="/uuid/">UUID在线生成</a></li>
                        <li><a href="/guid/">GUID在线生成</a></li>
                        <li><a href="/barcode/">条形码生成器</a></li>
                        <li><a href="/ip2long/">IP/数字地址转换</a></li>
                        <li><a href="/img2base64/" style="color:#f00"> 图片转Base64</a></li>
                        <li><a href="/utf8/">UTF-8转GBK</a></li>
                        <li><a href="/unicode/">Unicode/ASCII转换</a></li>
                        <li><a href="/ascii/">ASCII编码/解码</a></li>
                        <li><a href="/urlencode/">URL编码/解码</a></li>
                        <li><a href="/keyboardcode/">KeyCode键盘按键码</a></li>
                        <li><a href="/androidkeycode/">Android按键码</a></li>
                        <li><a href="/keyboardtest/">键盘测试工具</a></li>
                    </ul>
                <li class="dropdown">
                <li class="dropdown"><a href="/" class="dropdown-toggle" data-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false">文本数字<span
                        class="caret"></span></a>
                    <ul class="dropdown-menu ul-list">
                        <li><a href="/editor/">Html在线编辑器</a></li>
                        <li><a href="/autoformat/" style="color:#f30"> 文章自动排版</a></li>
                        <li><a href="/caiji/" style="color:green"> 文章内容采集</a></li>
                        <li><a href="/jianfan/">简繁字体转换</a></li>
                        <li><a href="/pinyin/">汉字转为拼音</a></li>
                        <li><a href="/huoxingwen/">火星文转换器</a></li>
                        <li><a href="/txtreplace/">文本内容替换</a></li>
                        <li><a href="/textdiff/"> 文本内容对比</a></li>
                        <li><a href="/txtcount/">在线统计字数工具</a></li>
                        <li><a href="/quchong/">内容去重工具</a></li>
                        <li><a href="/wenzitexiao/">文字特效工具</a></li>
                        <li><a href="/zipstringtext/">字符串文本压缩工具</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="/camelcase/" style="color:blue">驼峰与下划线互转</a></li>
                        <li><a href="/quanbaojiao/">全角半角转换</a></li>
                        <li><a href="/enlower/">英文字母大小写转换</a></li>
                        <li><a href="/rmbdaxie/">人民币大写转换工具</a></li>
                        <li><a href="/random/">随机数生成器</a></li>
                        <li><a href="/unixtime/"> Unix时间戳在线转换</a></li>
                        <li><a href="/hexconvert/">常用进制转换工具</a></li>
                        <li><a href="/hexrgb/"> RGB颜色在线转换</a></li>
                    </ul>
                <li class="dropdown">
                <li class="dropdown"><a href="/" class="dropdown-toggle" data-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false">网络<span
                        class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/ip/">IP地址归属地查询</a></li>
                        <li><a href="/websocket/">Websocket测试</a></li>
                        <li><a href="/browserinfo/">获取浏览器信息</a></li>
                        <li><a href="/dns/">公共DNS</a></li>
                        <li><a href="/alldns/">各地区公共DNS</a></li>
                    </ul>
                <li class="dropdown">
                <li class="dropdown"><a href="/" class="dropdown-toggle" data-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false">站长<span
                        class="caret"></span></a>
                    <ul class="dropdown-menu ul-list">
                        <li><a href="/checkweixin/" style="color:red">微信域名检测工具</a></li>
                        <li><a href="/htaccess2nginx/" style="color:green">htaccess转nginx</a></li>
                        <li><a href="/shortcut/">生成桌面快捷方式</a></li>
                        <li><a href="/px2rem/">rem与px转换工具</a></li>
                        <li><a href="/favicon/">在线制作ico图标</a></li>
                        <li><a href="/createmeta/">生成网页Meta标签</a></li>
                        <li><a href="/refresh/">在线定时刷新网址</a></li>
                        <li><a href="/tiaoseban/">在线调色板</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="/gzip/">网站Gzip压缩检测</a></li>
                        <li><a href="/checkurl/">网站死链检测</a></li>
                        <li><a href="/whois/"> Whois查询工具</a></li>
                        <li><a href="/chaicp/">ICP网站备案查询</a></li>
                        <li><a href="/chameta/">Meta标签优化分析</a></li>
                        <li><a href="/checkkeyword/">网页关键词密度检测</a></li>
                        <li><a href="/webstatus/">HTTP状态码查询</a></li>
                    </ul>
                <li class="dropdown">
                <li class="dropdown"><a href="/" class="dropdown-toggle" data-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false">计算<span
                        class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/nianlvli/">利率计算器在线</a></li>
                        <li><a href="/subnetmask/">子网掩码计算器</a></li>
                        <li><a href="/calculator/">在线科学计算器</a></li>
                    </ul>
                <li class="dropdown">
                <li class="dropdown"><a href="/" class="dropdown-toggle" data-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false">其他<span
                        class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/tuya/">在线涂鸦画板</a></li>
                        <li><a href="/shizhong/">在线时钟</a></li>
                        <li><a href="/worldtime/">世界各地时间</a></li>
                        <li><a href="/capital/">世界各国首都查询</a></li>
                        <li><a href="/currency/">世界各地货币查询</a></li>
                        <li><a href="/areacode/">世界各国区号时差查询</a></li>
                        <li><a href="/jieri/">世界节日查询</a></li>
                        <li><a href="/shaoshuminzu/">全国少数民族分布查询</a></li>
                        <li><a href="/chaodai/">中国历史朝代时间查询表</a></li>
                        <li><a href="/tesufuhao/">特殊符号大全</a></li>
                        <li><a href="/lishishangdejintian/">历史上的今天</a></li>
                    </ul>
                <li class="dropdown">
                <li class="dropdown"><a href="/" class="dropdown-toggle" data-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false">对照列表<span
                        class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/useragent/">常用User-Agent</a></li>
                        <li><a href="/contenttype/">Content-Type对照表</a></li>
                        <li><a href="/requestmethod/">Request请求大全</a></li>
                        <li><a href="/httpheader/">HTTP请求头大全</a></li>
                        <li><a href="/pagecode/"> HTTP状态码</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="/asciicode/">ASCII对照表</a></li>
                        <li><a href="/htmlescapechar/">HTML特殊字符转义</a></li>
                        <li><a href="/ports/">常见端口大全</a></li>
                        <li><a href="/bootstrapicon/">Bootstrap字体图标</a></li>
                        <li><a href="/androidmanifest/"> Android Manifest权限大全</a></li>
                        <li><a href="/linuxcmd/">Linux常用命令大全</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="container"><div class="row"><div class="col-md-12 col10main"><div class="accordion" id="accordion2"><div class="accordion-group">
<ul class="nav nav-tabs hbflag"><li role="presentation"><a href="/nianlvli/">利率计算器在线</a></li><li role="presentation" class="active"><a href="/subnetmask/">子网掩码计算器</a></li><li role="presentation"><a href="/calculator/">在线科学计算器</a></li><li role="presentation"><a href="/calcarea/">面积换算器</a></li><li role="presentation"><a href="/calcheat/">热量换算器</a></li><li role="presentation"><a href="/calcvolume/">体积换算器</a></li><li role="presentation"><a href="/calcpressure/">压力换算器</a></li><li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;" role="button" aria-haspopup="true" aria-expanded="false">更多工具<span class="caret"> </span></a><ul class="dropdown-menu"><li role="presentation"><a href="/calcpower/">功率换算器</a></li><li role="presentation"><a href="/calclength/">长度换算器</a></li><li role="presentation"><a href="/calctemperature/">温度换算器</a></li><li role="presentation"><a href="/calctime/">时间换算器</a></li><li role="presentation"><a href="/calcspeed/">速度换算器</a></li><li role="presentation"><a href="/calcangle/">角度换算器</a></li><li role="presentation"><a href="/calcdata/">数据大小换算器</a></li><li role="presentation"><a href="/calcthickness/">密度换算器</a></li><li role="presentation"><a href="/calcforce/">力换算器</a></li></ul></li></ul><div class="panel"><div class="col-sm-12"> <div class="NetWorkWrap pb10 clearfix"><!--NetWork-right-begin--> <div class="NetWork-left fl"> <form> <div class="NetWork-main01 bor-a1s"> <h3 class="MainHead bb-blue">网络和IP地址计算器</h3> <div class="MainCent"> <div class="MCentlist clearfix ptb10 bb-blue bg-blue02 ipgroup"> <label class="w60 tr">输入IP</label> <input type="text" class="Intxt" size="3" maxlength="15" value="192" name="ip_1" n="ip1" /> <input type="text" class="Intxt" size="3" maxlength="15" value="168" name="ip_2" n="ip2"/> <input type="text" class="Intxt" size="3" maxlength="15" value="0" name="ip_3" n="ip3"/> <input type="text" class="Intxt" size="3" maxlength="15" value="1" name="ip_4" n="ip4"/> <label class="w50 tr">掩码位</label> <input type="text" class="Intxt" size="2" value="24" name="bits"/> <input type="button" class="Inbtn" value="计算" onclick="calNBFL(this.form)" /> <input type="button" class="Inbtn" value="清空" onclick="resetform4(this.form)" /> </div> <div class="MCentlist clearfix pt10"> <label class="w60 tr">可用IP</label> <input type="text" class="Intxt" readonly size="10" name="numofaddr" /> </div> <div class="MCentlist clearfix pt10"> <label class="w60 tr">掩码</label> <input type="text" class="Intxt" readonly maxlength="3" size="3" name="snm_1" /> <input type="text" class="Intxt" readonly maxlength="3" size="3" name="snm_2" /> <input type="text" class="Intxt" readonly maxlength="3" size="3" name="snm_3" /> <input type="text" class="Intxt" readonly maxlength="3" size="3" name="snm_4" /> </div> <div class="MCentlist clearfix pt10"> <label class="w60 tr">网络</label> <input type="text" class="Intxt" readonly maxlength="3" size="3" name="nwadr_1" /> <input type="text" class="Intxt" readonly maxlength="3" size="3" name="nwadr_2" /> <input type="text" class="Intxt" readonly maxlength="3" size="3" name="nwadr_3" /> <input type="text" class="Intxt" readonly maxlength="3" size="3" name="nwadr_4" /> </div> <div class="MCentlist clearfix pt10"> <label class="w60 tr">第一可用</label> <input type="text" class="Intxt" readonly maxlength="3" size="3" name="firstadr_1" /> <input type="text" class="Intxt" readonly maxlength="3" size="3" name="firstadr_2" /> <input type="text" class="Intxt" readonly maxlength="3" size="3" name="firstadr_3" /> <input type="text" class="Intxt" readonly maxlength="3" size="3" name="firstadr_4" /> </div> <div class="MCentlist clearfix pt10"> <label class="w60 tr">最后可用</label> <input type="text" class="Intxt" readonly maxlength="3" size="3" name="lastadr_1" /> <input type="text" class="Intxt" readonly maxlength="3" size="3" name="lastadr_2" /> <input type="text" class="Intxt" readonly maxlength="3" size="3" name="lastadr_3" /> <input type="text" class="Intxt" readonly maxlength="3" size="3" name="lastadr_4" /> </div> <div class="MCentlist clearfix pt10"> <label class="w60 tr">广播</label> <input type="text" class="Intxt" readonly maxlength="3" size="3" name="bcast_1" /> <input type="text" class="Intxt" readonly maxlength="3" size="3" name="bcast_2" /> <input type="text" class="Intxt" readonly maxlength="3" size="3" name="bcast_3" /> <input type="text" class="Intxt" readonly maxlength="3" size="3" name="bcast_4" /> </div> <div class="MCentlist ptb10 col-gray04 bor-t1s mt10"><p>显示网络，广播，第一次和最后一个给定的网络地址</p><p>在网络掩码“位格式”也被称为CIDR格式（CIDR=无类别域间路由选择）。</p></div> </div> </div> </form> <form> <div class="NetWork-main01 bor-a1s mt20"> <h3 class="MainHead bb-blue">子网掩码转换器（位点分十进制格式) </h3> <div class="MainCent"> <div class="MCentlist clearfix ptb10 bb-blue bg-blue02"> <label class="w82 tr">掩码</label> <input type="text" class="Intxt" size="4" value="24" name="bits" /> <input type="button" class="Inbtn" value="计算" onclick="calcNWmaskForm2(this.form)" /> <input type="button" class="Inbtn" value="清空" onclick="resetform2(this.form)" /> </div> <div class="MCentlist clearfix pt10"> <label class="w82 tr">Dec 十进制</label> <input type="text" class="Intxt" readonly size="3" name="snm_1" /> <input type="text" class="Intxt" readonly size="3" name="snm_2" /> <input type="text" class="Intxt" readonly size="3" name="snm_3" /> <input type="text" class="Intxt" readonly size="3" name="snm_4" /> </div> <div class="MCentlist clearfix ptb10"> <label class="w82 tr">Hex十六进制</label> <input type="text" class="Intxt" readonly size="2" name="hex_1" /> <input type="text" class="Intxt" readonly size="2" name="hex_2" /> <input type="text" class="Intxt" readonly size="2" name="hex_3" /> <input type="text" class="Intxt" readonly size="2" name="hex_4" /> </div> </div> </div> </form> <form> <div class="NetWork-main01 bor-a1s mt20"> <h3 class="MainHead bb-blue">网络/节点计算器</h3> <div class="MainCent"> <div class="MCentlist clearfix pt10 bg-blue02 ipgroup"> <label class="w60 tr">子网掩码</label> <input type="text" class="Intxt" name="snm1a" size="3" maxlength="15" value="255" n="ip1" /> <input type="text" class="Intxt" name="snm2a" size="3" maxlength="15" value="255" n="ip2" /> <input type="text" class="Intxt" name="snm3a" size="3" maxlength="15" value="255" n="ip3" /> <input type="text" class="Intxt" name="snm4a" size="3" maxlength="15" value="0" n="ip4" /> </div> <div class="MCentlist clearfix ptb10 bb-blue bg-blue02 ipgroup"> <label class="w60 tr">TCP/IP</label> <input type="text" class="Intxt" name="oct1a" size="3" maxlength="15" value="192" n="ip1" /> <input type="text" class="Intxt" name="oct2a" size="3" maxlength="15" value="168" n="ip2" /> <input type="text" class="Intxt" name="oct3a" size="3" maxlength="15" value="0" n="ip3" /> <input type="text" class="Intxt" name="oct4a" size="3" maxlength="15" value="1" n="ip4" /> <input type="button" class="Inbtn" value="计算" onclick="compute(this.form)" /> <input type="button" class="Inbtn" value="清空" onclick="nnclear(this.form)" /></div> <div class="MCentlist clearfix pt10"> <label class="w60 tr">网络</label> <input type="text" class="Intxt" readonly name="nw1a" size="3" maxlength="3" /> <input type="text" class="Intxt" readonly name="nw2a" size="3" maxlength="3" /> <input type="text" class="Intxt" readonly name="nw3a" size="3" maxlength="3" /> <input type="text" class="Intxt" readonly name="nw4a" size="3" maxlength="3" /> </div> <div class="MCentlist clearfix pt10"> <label class="w60 tr">节点/主机</label> <input type="text" class="Intxt" readonly name="node1a" size="3" maxlength="3" /> <input type="text" class="Intxt" readonly name="node2a" size="3" maxlength="3" /> <input type="text" class="Intxt" readonly name="node3a" size="3" maxlength="3" /> <input type="text" class="Intxt" readonly name="node4a" size="3" maxlength="3" /> </div> <div class="MCentlist clearfix ptb10"> <label class="w60 tr">广播地址</label> <input type="text" class="Intxt" readonly name="broad1a" size="3" maxlength="3" /> <input type="text" class="Intxt" readonly name="broad2a" size="3" maxlength="3" /> <input type="text" class="Intxt" readonly name="broad3a" size="3" maxlength="3" /> <input type="text" class="Intxt" readonly name="broad4a" size="3" maxlength="3" /> </div> </div> </div> </form> <form> <div class="NetWork-main01 bor-a1s mt20"> <h3 class="MainHead bb-blue">十进制子网掩码逆算器</h3> <div class="MainCent"> <div class="MCentlist clearfix pt10 ipgroup"> <label class="w70 tr">点格式掩码</label> <input type="text" class="Intxt" name="snm1d" size="3" maxlength="15" value="255" n="ip1" /> <input type="text" class="Intxt" name="snm2d" size="3" maxlength="15" value="255" n="ip2" /> <input type="text" class="Intxt" name="snm3d" size="3" maxlength="15" value="255" n="ip3" /> <input type="text" class="Intxt" name="snm4d" size="3" maxlength="15" value="0" n="ip4" /> <input type="button" class="Inbtn" value="计算" onclick="computeINV1(this.form);" /> <input type="button" class="Inbtn" value="清空" onclick="sjzclear(this.form);" /></div> <div class="MCentlist clearfix ptb10"> <label class="w70 tr">逆算掩码</label> <input type="text" class="Intxt" readonly name="snm1e" size="3" maxlength="3" /> <input type="text" class="Intxt" readonly name="snm2e" size="3" maxlength="3" /> <input type="text" class="Intxt" readonly name="snm3e" size="3" maxlength="3" /> <input type="text" class="Intxt" readonly name="snm4e" size="3" maxlength="3" /> </div> </div> </div> </form> <form> <div class="NetWork-main01 bor-a1s mt20"> <h3 class="MainHead bb-blue">十进制子网掩码换算器</h3> <div class="MainCent"> <div class="MCentlist clearfix pt10 ipgroup"> <label class="w70 tr">点格式掩码</label> <input type="text" class="Intxt" name="snm1c" size="3" maxlength="15" n="ip1" /> <input type="text" class="Intxt" name="snm2c" size="3" maxlength="15" n="ip2" /> <input type="text" class="Intxt" name="snm3c" size="3" maxlength="15" n="ip3" /> <input type="text" class="Intxt" name="snm4c" size="3" maxlength="15" n="ip4" /> <input type="button" class="Inbtn" value="计算" onclick="computeSNMA(this.form);" /> <input type="button" class="Inbtn" value="清空" onclick="dgsclear(this.form);" /> </div> <div class="MCentlist clearfix ptb10"> <label class="w70 tr">掩码位元数</label> <input type="text" class="Intxt" name="snmbitsc" size="2" maxlength="2" value="24" /> <input type="button" class="Inbtn" value="计算" onclick="computeSNMB(this.form);" /> <input type="button" class="Inbtn" value="清空" onclick="ymwclear(this.form);" /> </div> </div> </div> </form> <form> <div class="NetWork-main01 bor-a1s mt20"> <h3 class="MainHead bb-blue">计算位补一个IP地址（逆）</h3> <div class="MainCent"> <div class="MCentlist clearfix pt10 ipgroup"> <input type="text" class="Intxt" size="3" maxlength="15" value="255" name="ip_1" n="ip1" /> <input type="text" class="Intxt" size="3" maxlength="15" value="255" name="ip_2" n="ip2" /> <input type="text" class="Intxt" size="3" maxlength="15" value="255" name="ip_3" n="ip3" /> <input type="text" class="Intxt" size="3" maxlength="15" value="255" name="ip_4" n="ip4" /> <input type="button" class="Inbtn" value="计算" onclick="calcIpInvert(this.form)" /> <input type="button" class="Inbtn" value="清空" onclick="resetform8(this.form)" /> </div> <div class="MCentlist clearfix ptb10"> <input type="text" class="Intxt" readonly size="3" name="invert_1" /> <input type="text" class="Intxt" readonly size="3" name="invert_2" /> <input type="text" class="Intxt" readonly size="3" name="invert_3" /> <input type="text" class="Intxt" readonly size="3" name="invert_4" /> </div> </div> </div> </form> </div> <!--NetWork-right-end--> <!--NetWork-right-begin--> <div class="NetWork-right fr"> <form> <div class="NetWork-main01 bor-a1s"> <h3 class="MainHead bb-blue">网络和IP地址计算器</h3> <div class="MainCent pr"> <div class="MCentlist clearfix pt10 ipgroup"> <label class="w70 tr">输入IP/TCP</label> <input type="text" class="Intxt" name="oct1" size="3" maxlength="15" value="192" n="ip1" /> <input type="text" class="Intxt" name="oct2" size="3" maxlength="15" value="168" n="ip2" /> <input type="text" class="Intxt" name="oct3" size="3" maxlength="15" value="0" n="ip3" /> <input type="text" class="Intxt" name="oct4" size="3" maxlength="15" value="1" n="ip4" /> <label class="w60 tr pr5">网络类型</label> <div class="NetWork-choese ToolChoese mr15"> <div class="NetWorkW-choese pr w60"> <div id="nettype" class="NetWorkW-cont SearChoese w60">默认</div> <input name="cf" value="1" type="hidden" /> <span class="NWicon-drop-down SearChoese"></span> <ul class="NetWorkC-down SearChoese-show w60"> <li><a href="javascript:" val="1">默认</a></li> <li><a href="javascript:" val="2">A类网</a></li> <li><a href="javascript:" val="3">B类网</a></li> <li><a href="javascript:" val="4">C类网</a></li> </ul> </div> </div> <!-- <input type="text" class="Intxt" />--> </div> <div class="MCentlist clearfix pt10"> <label class="w70 tr">子网ip量</label> <div class="NetWork-choese ToolChoese"> <div class="NetWorkW-choese pr w70 ml10"> <div id="netnum" class="NetWorkW-cont SearChoese w70"></div> <input name="network" value="0" type="hidden" /> <span class="NWicon-drop-down SearChoese"></span> <ul class="NetWorkC-down SearChoese-show w70"> <li><a href="javascript:" val="0">&nbsp;</a></li> <li><a href="javascript:" val="1">1</a></li> <li><a href="javascript:" val="2">2</a></li> <li><a href="javascript:" val="4">4</a></li> <li><a href="javascript:" val="8">8</a></li> <li><a href="javascript:" val="16">16</a></li> <li><a href="javascript:" val="32">32</a></li> <li><a href="javascript:" val="64">64</a></li> <li><a href="javascript:" val="128">128</a></li> <li><a href="javascript:" val="256">256</a></li> <li><a href="javascript:" val="512">512</a></li> <li><a href="javascript:" val="1024">1024</a></li> <li><a href="javascript:" val="2048">2048</a></li> <li><a href="javascript:" val="4096">4096</a></li> <li><a href="javascript:" val="8192">8192</a></li> <li><a href="javascript:" val="16384">16384</a></li> <li><a href="javascript:" val="32768">32768</a></li> <li><a href="javascript:" val="65536">65536</a></li> <li><a href="javascript:" val="131072">131072</a></li> <li><a href="javascript:" val="262144">262144</a></li> <li><a href="javascript:" val="524288">524288</a></li> <li><a href="javascript:" val="1048576">1048576</a></li> <li><a href="javascript:" val="2097152">2097152</a></li> <li><a href="javascript:" val="4194304">4194304</a></li> <li><a href="javascript:" val="8388608">8388608</a></li> </ul> </div> </div> </div> <div class="MCentlist clearfix pt10"> <label class="w70 tr">节点/主机</label> <div class="NetWork-choese ToolChoese fl ml10"> <div class="NetWorkW-choese pr w100"> <div id="nodenum" class="NetWorkW-cont SearChoese w100"></div> <input name="node" value="0" type="hidden" /> <span class="NWicon-drop-down SearChoese"></span> <ul class="NetWorkC-down SearChoese-show w100"> <li><a href="javascript:" val="0">&nbsp;</a></li> <li><a href="javascript:" val="1">1</a></li> <li><a href="javascript:" val="2">2</a></li> <li><a href="javascript:" val="4">4</a></li> <li><a href="javascript:" val="8">8</a></li> <li><a href="javascript:" val="16">16</a></li> <li><a href="javascript:" val="32">32</a></li> <li><a href="javascript:" val="64">64</a></li> <li><a href="javascript:" val="128">128</a></li> <li><a href="javascript:" val="256">256</a></li> <li><a href="javascript:" val="512">512</a></li> <li><a href="javascript:" val="1024">1024</a></li> <li><a href="javascript:" val="2048">2048</a></li> <li><a href="javascript:" val="4096">4096</a></li> <li><a href="javascript:" val="8192">8192</a></li> <li><a href="javascript:" val="16384">16384</a></li> <li><a href="javascript:" val="32768">32768</a></li> <li><a href="javascript:" val="65536">65536</a></li> <li><a href="javascript:" val="131072">131072</a></li> <li><a href="javascript:" val="262144">262144</a></li> <li><a href="javascript:" val="524288">524288</a></li> <li><a href="javascript:" val="1048576">1048576</a></li> <li><a href="javascript:" val="2097152">2097152</a></li> <li><a href="javascript:" val="4194304">4194304</a></li> <li><a href="javascript:" val="8388608">8388608</a></li> <li><a href="javascript:" val="16777216">16777216</a></li> <li><a href="javascript:" val="33554432">33554432</a></li> <li><a href="javascript:" val="67108864">67108864</a></li> <li><a href="javascript:" val="134217728">134217728</a></li> <li><a href="javascript:" val="268435456">268435456</a></li> <li><a href="javascript:" val="536870912">536870912</a></li> <li><a href="javascript:" val="1073741824">1073741824</a></li> <li><a href="javascript:" val="2147483648">2147483648</a></li> </ul> </div> </div> <input type="button" class="Inbtn" value="计算" onclick="compute2(this.form);" /> <input type="button" class="Inbtn" value="清空" onclick="wlclear(this.form);" /> </div> <div class="MCentlist clearfix pt10"> <label class="w70 tr">网络类型</label> <input type="text" class="Intxt" name="nwclass" size="7" maxlength="7" /> <input type="text" class="Intxt" name="subsuper" size="14" maxlength="14" /> <input type="text" class="Intxt" name="nwclass1" size="7" maxlength="7" /> </div> <div class="MCentlist clearfix pt10"> <label class="w70 tr">子网掩码</label> <input type="text" class="Intxt" name="snm1" size="3" maxlength="3" /> <input type="text" class="Intxt" name="snm2" size="3" maxlength="3" /> <input type="text" class="Intxt" name="snm3" size="3" maxlength="3" /> <input type="text" class="Intxt" name="snm4" size="3" maxlength="3" /> <label class="w70 tr">或</label> <input type="text" class="Intxt" name="snmbits" size="3" maxlength="3" /> </div> <div class="MCentlist clearfix pt10"> <label class="w70 tr">子网</label> <input type="text" class="Intxt w100" name="nwquant" size="10" maxlength="8" /> <input type="button" value="获取网络列表" class="Inbtn w100 tc ObtLBtN" onclick="listsubnets(this.form);" /> </div> <div class="MCentlist clearfix ptb10"> <label class="w70 tr">节点/主机</label> <input type="text" class="Intxt w100" name="nodequant" size="10" maxlength="8" /> </div> <div class="ObtainList autohide" id="netlist"> <h4 class="lh30 col-blue02 pr">网络列表<span class="col-gray02 lh24 fwnone pl10">网络 0.0.0.0 ，掩码0.0.0.0"</span><a href="javascript:" class="ObtLClose">×</a></h4> <table width="100%" border="0" cellspacing="0" cellpadding="0"> <tbody> <tr> <th rowspan="2">网络</th> <th colspan="2">主机</th> <th rowspan="2">广播地址</th> </tr> <tr> <th>起始</th> <th>结束</th> </tr> <tr> <td>0.0.0.0</td> <td>0.0.0.0</td> <td>0.0.0.0</td> <td>0.0.0.0</td> </tr> <tr> <td>0.0.0.0</td> <td>0.0.0.0</td> <td>0.0.0.0</td> <td>0.0.0.0</td> </tr> <tr> <td>0.0.0.0</td> <td>0.0.0.0</td> <td>0.0.0.0</td> <td>0.0.0.0</td> </tr> <tr> <td>0.0.0.0</td> <td>0.0.0.0</td> <td>0.0.0.0</td> <td>0.0.0.0</td> </tr> </tbody> </table> </div> </div> </div> </form> <form> <div class="NetWork-main01 bor-a1s mt20"> <h3 class="MainHead bb-blue">通过主机数量计算掩码地址转换器</h3> <div class="MainCent"> <div class="MCentlist clearfix ptb10 bb-blue bg-blue02"> <label class="w60">需要数量</label> <input type="text" class="Intxt" size="4" value="5" name="numofaddr" /> <input type="button" class="Inbtn" value="计算" onclick="calcNeeded(this.form)" /> <input type="button" class="Inbtn" value="清空" onclick="resetform6(this.form)" /> </div> <div class="MCentlist clearfix pt10"> <label class="w50 pr10 tr">掩码</label> <input type="text" class="Intxt" readonly size="4" name="bits" /> <label class="w110 tr"> dotted dec. 掩码</label> <input type="text" class="Intxt" readonly size="3" name="snm_1" /> <input type="text" class="Intxt" readonly size="3" name="snm_2" /> <input type="text" class="Intxt" readonly size="3" name="snm_3" /> <input type="text" class="Intxt" readonly size="3" name="snm_4" /> </div> <div class="MCentlist clearfix ptb10"> <label class="w60">可用数量</label> <input type="text" class="Intxt w100" readonly size="10" name="maxaddr" /> </div> </div> </div> </form> <form> <div class="NetWork-main01 bor-a1s mt20"> <h3 class="MainHead bb-blue">TCP/IP 进制转换器</h3> <div class="MainCent"> <div class="MCentlist clearfix pt10 ipgroup"> <label class="w80 tr">点格式十进制</label> <input type="text" class="Intxt" name="oct1b" size="3" maxlength="15" value="192" n="ip1" /> <input type="text" class="Intxt" name="oct2b" size="3" maxlength="15" value="168" n="ip2" /> <input type="text" class="Intxt" name="oct3b" size="3" maxlength="15" value="0" n="ip3" /> <input type="text" class="Intxt" name="oct4b" size="3" maxlength="15" value="1" n="ip4" /> <input type="button" class="Inbtn" value="计算" onclick="compute3(this.form);" /> </div> <div class="MCentlist clearfix pt10"> <label class="w80 tr">或 二进制</label> <input type="text" class="Intxt w60" name="bin1b" size="8" maxlength="8" /> <input type="text" class="Intxt w60" name="bin2b" size="8" maxlength="8" /> <input type="text" class="Intxt w60" name="bin3b" size="8" maxlength="8" /> <input type="text" class="Intxt w60" name="bin4b" size="8" maxlength="8" /> <input type="button" class="Inbtn" value="计算" onclick="compute4(this.form);" /> </div> <div class="MCentlist clearfix pt10"> <label class="w80 tr">或 十六进制</label> <input type="text" class="Intxt" name="hex1b" size="2" maxlength="2" /> <input type="text" class="Intxt" name="hex2b" size="2" maxlength="2" /> <input type="text" class="Intxt" name="hex3b" size="2" maxlength="2" /> <input type="text" class="Intxt" name="hex4b" size="2" maxlength="2" /> <input type="button" class="Inbtn" value="计算" onclick="compute5(this.form);" /> </div> <div class="MCentlist clearfix ptb10"> <label class="w80 tr">或 十进制</label> <input type="text" class="Intxt w100" name="dec1b" size="10" maxlength="10" /> <input type="button" class="Inbtn" value="计算" onclick="compute6(this.form);" /> </div> </div> </div> </form> <form> <div class="NetWork-main01 bor-a1s mt20"> <h3 class="MainHead bb-blue">掩码转换到网络可用地址的数量</h3> <div class="MainCent"> <div class="MCentlist clearfix ptb10 bb-blue bg-blue02"> <label class="w70 tr">掩码</label> <input type="text" class="Intxt" size="2" value="27" name="bits" /> <input type="button" class="Inbtn" value="计算" onclick="calcAmount(this.form)" /> <input type="button" class="Inbtn" value="清空" onclick="resetform7(this.form)" /> </div> <div class="MCentlist clearfix pt10"> <label class="w70 tr">可用地址量</label> <input type="text" class="Intxt w100" readonly size="10" name="numofaddr" /> <label class="w70 tr">可用总量</label> <input type="text" class="Intxt w100" readonly size="10" name="maxaddr" /> </div> <div class="MCentlist clearfix pt10"> <label class="w70 tr">点分十进制</label> <input type="text" class="Intxt" readonly size="3" name="snm_1" /> <input type="text" class="Intxt" readonly size="3" name="snm_2" /> <input type="text" class="Intxt" readonly size="3" name="snm_3" /> <input type="text" class="Intxt" readonly size="3" name="snm_4" /> </div> <div class="MCentlist ptb10 col-gray04 bor-t1s mt10"> <p>IP组播地址范围</p> <p>所有的多播地址可以很容易被认出，因为同位模式“1110”开始。</p> <p>224.0.0.0 - 224.0.0.255知名多播地址，控制通道</p> <p>224.0.1.0 - 238.255.255.255全球范围的（互联网宽）组播地址</p> <p>239.0.0.0 - 239.255.255.255本地多播地址</p> </div> </div> </div> </form> </div> <!--NetWork-right-end--></div></div></div></div><div class="alert alert-success alert-dismissible"><h4>子网掩码计算器介绍</h4><p>局域网规划工具,子网计算划分,子网掩码各个进制表示换算,IP地址进制表示换算。。</p></div> <div class="accordion-group"> </div></div></div></div></div><script src="/static/script/jquery-1.11.3.min.js" type="text/javascript"></script><script src="/static/script/bootstrap.min.js" type="text/javascript"></script><script src="/static/script/tool.js" type="text/javascript"></script><script src="/static/script/pcjs/subnetmask.js" type="text/javascript"></script> <script>function nnclear(nform){nform.snm1a.value=255;nform.snm2a.value=255;nform.snm3a.value=255;nform.snm4a.value=0;nform.oct1a.value=192;nform.oct2a.value=168;nform.oct3a.value=0;nform.oct4a.value=1;nform.nw1a.value="";nform.nw2a.value="";nform.nw3a.value="";nform.nw4a.value="";nform.node1a.value="";nform.node2a.value="";nform.node3a.value="";nform.node4a.value="";nform.broad1a.value="";nform.broad2a.value="";nform.broad3a.value="";nform.broad4a.value=""}function sjzclear(sform){sform.snm1d.value=255;sform.snm2d.value=255;sform.snm3d.value=255;sform.snm4d.value=0;sform.snm1e.value="";sform.snm2e.value="";sform.snm3e.value="";sform.snm4e.value=""}function dgsclear(sform){sform.snm1c.value="";sform.snm2c.value="";sform.snm3c.value="";sform.snm4c.value=""}function ymwclear(sform){sform.snmbitsc.value=24}function wlclear(sform){sform.oct1.value=192;sform.oct2.value=168;sform.oct3.value=0;sform.oct4.value=1;jQuery("#nettype").text("默认");sform.cf.value=1;jQuery("#netnum").text("");sform.network.value=0;jQuery("#nodenum").text("");sform.node.value=0;sform.nwclass.value="";sform.subsuper.value="";sform.nwclass1.value="";sform.snm1.value="";sform.snm2.value="";sform.snm3.value="";sform.snm4.value="";sform.snmbits.value="";sform.nwquant.value="";sform.nodequant.value=""}		</script><div class="container" id="foot-history">
    <div class="row">
        <div class="col-md-12"><span>您的足迹：</span><span id="visit_history"></span></div>
        <div class="col-md-12" style="margin-top:10px"><!-- 广告区1 --></div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 footer-nav">
            <h2>一行在线工具网导航</h2>
            <ul class="list-inline list-inline-bg">
                <h3><span>JSON工具</span></h3>
                <li><span></span><a href="/json/">Json格式化</a></li>
                <li><span></span><a href="/jsonudview/"> Json格式化(上下)</a></li>
                <li><span></span><a href="/jsonlrview/">Json格式化(左右)</a></li>
                <li><span></span><a href="/jsonzip/">Json在线压缩转义</a></li>
                <li><span></span><a href="/json2cs/">Json生成C#实体类</a></li>
                <li><span></span><a href="/json2java/"> Json生成Java实体类</a></li>
                <li><span></span><a href="/json2go/">Json生成Go结构体</a></li>
                <li><span></span><a href="/sql2java/">SQL转Java实体类</a></li>
                <li><span></span><a href="/json2xml/">XML和Json在线互转</a></li>
                <li><span></span><a href="/excel2json/">Excel/CSV转Json格式</a></li>
                <li><span></span><a href="/json2excel/">Json转Excel/CSV格式</a></li>
                <li><span></span><a href="/json2get/">JSON和GET参数互转</a></li>
                <li><span></span><a href="/json2yaml/">JSON转YAML</a></li>
            </ul>
            <ul class="list-inline list-inline-bg">
                <h3><span>格式化转换</span></h3>
                <li><span></span><a href="/formathtml/">HTML格式化/压缩</a></li>
                <li><span></span><a href="/formatcss/" style="color:#f30"> CSS格式化/压缩</a></li>
                <li><span></span><a href="/formatjs/">JS格式化/压缩</a></li>
                <li><span></span><a href="/endecodejs/">JS加密/解密</a></li>
                <li><span></span><a href="/confundirjs/"> JS代码混合加密</a></li>
                <li><span></span><a href="/formatsql/">SQL压缩/格式化</a></li>
                <li><span></span><a href="/formatphp/">PHP代码格式化工具</a></li>
                <li><span></span><a href="/formatxml/">XML压缩/格式化 </a></li>
                <li><span></span><a href="/formatcs/">C#代码格式化工具</a></li>
                <li><span></span><a href="/formatjava/">JAVA代码格式化工具</a></li>
                <li><span></span><a href="/formatcsql/">SQL代码格式化工具</a></li>
                <li><span></span><a href="/formatpy/">Python代码格式化工具</a></li>
                <li><span></span><a href="/formatruby/">Ruby代码格式化工具</a></li>
                <li><span></span><a href="/formatc/">C语言代码格式化工具</a></li>
                <li><span></span><a href="/formatcpp/">C++代码格式化工具</a></li>
                <li><span></span><a href="/formatperl/">Perl代码格式化工具</a></li>
                <li><span></span><a href="/formatvbs/">VBScript格式化工具</a></li>
                <li><span></span><a href="/html2js/"> Html转JS</a></li>
                <li><span></span><a href="/htmloutjs/" style="color:#f30">Html/JS互转</a></li>
                <li><span></span><a href="/htmlescape/"> Html转义工具</a></li>
                <li><span></span><a href="/html2cj/"> Html转C#/JSP</a></li>
                <li><span></span><a href="/html2php/">Html转PHP代码</a></li>
                <li><span></span><a href="/html2all/">Html转ASP/Perl</a></li>
                <li><span></span><a href="/htmlfromcsv/">Excel转HTML表格</a></li>
                <li><span></span><a href="/htmltable/">Html表格生成器</a></li>
                <li><span></span><a href="/html2ubb/">HTML/UBB互转</a></li>
                <li><span></span><a href="/htmlmarkdown/">HTML/MarkDown互转</a></li>
                <li><span></span><a href="/regex/" style="color:green">正则表达式测试工具</a></li>
                <li><span></span><a href="/regexcode/">正则生成代码</a></li>
                <li><span></span><a href="/formatfilter/">Html过滤工具</a></li>
                <li><span></span><a href="/regexdso/">常用正则表达式</a></li>
                <li><span></span><a href="/regexsucha/">正则表达式语法速查</a></li>
                <li><span></span><a href="/runjs/">运行Js/html/css</a></li>
                <li><span></span><a href="/xpath/">Xpath工具</a></li>
            </ul>
            <ul class="list-inline list-inline-bg">
                <h3><span>加解密编码</span></h3>
                <li><span></span><a href="/md5/">MD5加密工具</a></li>
                <li><span></span><a href="/urlcode/">URL网址16进制加密</a></li>
                <li><span></span><a href="/urlthunder/">迅雷旋风URL加解密</a></li>
                <li><span></span><a href="/base64/"> Base64加密/解密</a></li>
                <li><span></span><a href="/escape/">Escape加密/解密</a></li>
                <li><span></span><a href="/deencrypt/">对称加密/解密</a></li>
                <li><span></span><a href="/aesencrypt/">AES加密/解密</a></li>
                <li><span></span><a href="/desencrypt/">DES加密/解密</a></li>
                <li><span></span><a href="/rc4encrypt/">RC4加密/解密</a></li>
                <li><span></span><a href="/rabbitencrypt/">Rabbit加密/解密</a></li>
                <li><span></span><a href="/tripledes/">TripleDES加密/解密</a></li>
                <li><span></span><a href="/shaencrypt/">SHA/SHA256加密</a></li>
                <li><span></span><a href="/allencrypt/">散列/哈希加密大全</a></li>
                <li><span></span><a href="/morse/">摩尔斯电码加解密</a></li>
                <li><span></span><a href="/password/">密码生成器</a></li>
                <li><span></span><a href="/uuid/">UUID在线生成</a></li>
                <li><span></span><a href="/guid/">GUID在线生成</a></li>
                <li><span></span><a href="/htpasswd/">htpasswd生成</a></li>
                <li><span></span><a href="/barcode/">条形码生成器</a></li>
                <li><span></span><a href="/ip2long/">IP/数字地址转换</a></li>
                <li><span></span><a href="/img2base64/" style="color:#f00"> 图片转Base64</a></li>
                <li><span></span><a href="/utf8/">UTF-8转GBK</a></li>
                <li><span></span><a href="/unicode/">Unicode/ASCII转换</a></li>
                <li><span></span><a href="/ascii/">ASCII编码/解码</a></li>
                <li><span></span><a href="/urlencode/">URL编码/解码</a></li>
                <li><span></span><a href="/navtiveunicode/">Native/Unicode编码转换</a></li>
                <li><span></span><a href="/keyboardcode/">KeyCode键盘按键码</a></li>
                <li><span></span><a href="/androidkeycode/">Android按键码</a></li>
                <li><span></span><a href="/keyboardtest/">键盘测试工具</a></li>
            </ul>
            <ul class="list-inline list-inline-bg">
                <h3><span>文本数字</span></h3>
                <li><span></span><a href="/editor/">Html在线编辑器</a></li>
                <li><span></span><a href="/autoformat/" style="color:#f30"> 文章自动排版</a></li>
                <li><span></span><a href="/caiji/" style="color:green"> 文章内容采集</a></li>
                <li><span></span><a href="/jianfan/">简繁字体转换</a></li>
                <li><span></span><a href="/pinyin/">汉字转为拼音</a></li>
                <li><span></span><a href="/huoxingwen/">火星文转换器</a></li>
                <li><span></span><a href="/txtreplace/">文本内容替换</a></li>
                <li><span></span><a href="/textdiff/"> 文本内容对比</a></li>
                <li><span></span><a href="/txtcount/">在线统计字数工具</a></li>
                <li><span></span><a href="/shupai/">文字竖排工具</a></li>
                <li><span></span><a href="/textflip/">文字翻转工具</a></li>
                <li><span></span><a href="/quchong/">内容去重工具</a></li>
                <li><span></span><a href="/wenzitexiao/">文字特效工具</a></li>
                <li><span></span><a href="/zipstringtext/">字符串文本压缩工具</a></li>
                <li><span></span><a href="/camelcase/" style="color:blue">驼峰与下划线互转</a></li>
                <li><span></span><a href="/quanbaojiao/">全角半角转换</a></li>
                <li><span></span><a href="/enlower/">英文字母大小写转换</a></li>
                <li><span></span><a href="/rmbdaxie/">人民币大写转换工具</a></li>
                <li><span></span><a href="/random/">随机数生成器</a></li>
                <li><span></span><a href="/unixtime/"> Unix时间戳在线转换</a></li>
                <li><span></span><a href="/hexconvert/">常用进制转换工具</a></li>
                <li><span></span><a href="/hexrgb/"> RGB颜色在线转换</a></li>
            </ul>
            <ul class="list-inline list-inline-bg">
                <h3><span>网络</span></h3>
                <li><span></span><a href="/ip/">IP地址归属地查询</a></li>
                <li><span></span><a href="/websocket/">Websocket测试</a></li>
                <li><span></span><a href="/browserinfo/">获取浏览器信息</a></li>
                <li><span></span><a href="/dns/">公共DNS</a></li>
                <li><span></span><a href="/alldns/">各地区公共DNS</a></li>
                <li><span></span><a href="/dnsdx/">各地电信DNS</a></li>
                <li><span></span><a href="/dnslt/">各地联通DNS</a></li>
                <li><span></span><a href="/dnsyd/">各地移动DNS</a></li>
                <li><span></span><a href="/dnstt/">各地铁通DNS</a></li>
                <li><span></span><a href="/dnsedu/">教育网DNS</a></li>
                <li><span></span><a href="/dnsusa/">美国DNS</a></li>
            </ul>
            <ul class="list-inline list-inline-bg">
                <h3><span>站长</span></h3>
                <li><span></span><a href="/checkweixin/" style="color:red">微信域名检测工具</a></li>
                <li><span></span><a href="/htaccess2nginx/" style="color:green">htaccess转nginx</a></li>
                <li><span></span><a href="/shortcut/">生成桌面快捷方式</a></li>
                <li><span></span><a href="/px2rem/">rem与px转换工具</a></li>
                <li><span></span><a href="/favicon/">在线制作ico图标</a></li>
                <li><span></span><a href="/createmeta/">生成网页Meta标签</a></li>
                <li><span></span><a href="/refresh/">在线定时刷新网址</a></li>
                <li><span></span><a href="/tiaoseban/">在线调色板</a></li>
                <li><span></span><a href="/gzip/">网站Gzip压缩检测</a></li>
                <li><span></span><a href="/checkurl/">网站死链检测</a></li>
                <li><span></span><a href="/whois/"> Whois查询工具</a></li>
                <li><span></span><a href="/chaicp/">ICP网站备案查询</a></li>
                <li><span></span><a href="/chameta/">Meta标签优化分析</a></li>
                <li><span></span><a href="/checkkeyword/">网页关键词密度检测</a></li>
                <li><span></span><a href="/webstatus/">HTTP状态码查询</a></li>
            </ul>
            <ul class="list-inline list-inline-bg">
                <h3><span>计算</span></h3>
                <li><span></span><a href="/nianlvli/">利率计算器在线</a></li>
                <li><span></span><a href="/subnetmask/">子网掩码计算器</a></li>
                <li><span></span><a href="/calculator/">在线科学计算器</a></li>
                <li><span></span><a href="/calcarea/">面积换算器</a></li>
                <li><span></span><a href="/calcheat/">热量换算器</a></li>
                <li><span></span><a href="/calcvolume/">体积换算器</a></li>
                <li><span></span><a href="/calcpressure/">压力换算器</a></li>
                <li><span></span><a href="/calcpower/">功率换算器</a></li>
                <li><span></span><a href="/calclength/">长度换算器</a></li>
                <li><span></span><a href="/calctemperature/">温度换算器</a></li>
                <li><span></span><a href="/calctime/">时间换算器</a></li>
                <li><span></span><a href="/calcspeed/">速度换算器</a></li>
                <li><span></span><a href="/calcangle/">角度换算器</a></li>
                <li><span></span><a href="/calcdata/">数据大小换算器</a></li>
                <li><span></span><a href="/calcthickness/">密度换算器</a></li>
                <li><span></span><a href="/calcforce/">力换算器</a></li>
            </ul>
            <ul class="list-inline list-inline-bg">
                <h3><span>其他</span></h3>
                <li><span></span><a href="/tuya/">在线涂鸦画板</a></li>
                <li><span></span><a href="/shizhong/">在线时钟</a></li>
                <li><span></span><a href="/worldtime/">世界各地时间</a></li>
                <li><span></span><a href="/capital/">世界各国首都查询</a></li>
                <li><span></span><a href="/currency/">世界各地货币查询</a></li>
                <li><span></span><a href="/areacode/">世界各国区号时差查询</a></li>
                <li><span></span><a href="/jieri/">世界节日查询</a></li>
                <li><span></span><a href="/shaoshuminzu/">全国少数民族分布查询</a></li>
                <li><span></span><a href="/chaodai/">中国历史朝代时间查询表</a></li>
                <li><span></span><a href="/tesufuhao/">特殊符号大全</a></li>
                <li><span></span><a href="/lishishangdejintian/">历史上的今天</a></li>
            </ul>
            <ul class="list-inline list-inline-bg">
                <h3><span>对照列表</span></h3>
                <li><span></span><a href="/useragent/">常用User-Agent</a></li>
                <li><span></span><a href="/contenttype/">Content-Type对照表</a></li>
                <li><span></span><a href="/requestmethod/">Request请求大全</a></li>
                <li><span></span><a href="/httpheader/">HTTP请求头大全</a></li>
                <li><span></span><a href="/pagecode/"> HTTP状态码</a></li>
                <li><span></span><a href="/asciicode/">ASCII对照表</a></li>
                <li><span></span><a href="/htmlescapechar/">HTML特殊字符转义</a></li>
                <li><span></span><a href="/ports/">常见端口大全</a></li>
                <li><span></span><a href="/bootstrapicon/">Bootstrap字体图标</a></li>
                <li><span></span><a href="/androidmanifest/"> Android Manifest权限大全</a></li>
                <li><span></span><a href="/linuxcmd/">Linux常用命令大全</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="copyright" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12"><span>Copyright ©2023 <a href="/">刀客源码网在线工具网</a></span> | <span><a
                    href="https://beian.miit.gov.cn/" target="_blank" rel="nofollow">皖ICP备20236666666号-2</a></span><a href="#" target="_blank">公网安备 8888888888888号 </a></div>
<script>
<!---统计代码-->
</script>
        </div>
    </div>
</div>
<a class="gotop" href="#top" title="返回顶部" style="display: none;"><span class="arrow"></span><span
        class="arrow lit"></span></a>
<script>tj();</script>
</body></html>