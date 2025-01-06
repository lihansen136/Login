<?php /*a:5:{s:67:"/www/wwwroot/cs.dkewl.cn/application/index/view/index/currency.html";i:1633603258;s:59:"/www/wwwroot/cs.dkewl.cn/application/index/view/header.html";i:1678348269;s:56:"/www/wwwroot/cs.dkewl.cn/application/index/view/nav.html";i:1668951541;s:57:"/www/wwwroot/cs.dkewl.cn/application/index/view/link.html";i:1678347100;s:59:"/www/wwwroot/cs.dkewl.cn/application/index/view/footer.html";i:1678347145;}*/ ?>
<!DOCTYPE html><html lang="zh-CN"><head><meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /><title><?php echo htmlentities(app('config')->get('web.currency.title')); ?></title><meta name="applicable-device" content="pc,mobile" /><meta http-equiv="Cache-Control" content="no-transform" /><meta http-equiv="Cache-Control" content="no-siteapp" /><meta name="keywords" content="<?php echo htmlentities(app('config')->get('web.currency.keywords')); ?>" /><meta name="description" content="<?php echo htmlentities(app('config')->get('web.currency.description')); ?>" /><meta name="renderer" content="webkit" /><meta name="apple-mobile-web-app-capable" content="yes" /><link rel="icon" href="/favicon.ico" mce_href="/favicon.ico" type="image/x-icon" /><link href="/static/style/bootstrap.min.css" rel="stylesheet" type="text/css" /><link href="/static/style/tool.css" rel="stylesheet" type="text/css" /><!--[if lt IE 9]><script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script><script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]--><?php echo app('config')->get('web.header'); ?></head><body><div class="navbar navbar-default navbar-static-top navbar-fixed-top">
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
<div class="container"><div class="row"><div class="col-md-12"><div class="accordion" id="accordion2"><div class="accordion-group"><!-- <div><a href="https://www.aliyun.com/minisite/goods?userCode=eaborev5" target="_blank" rel="nofollow"><img src="http://zxgj.16400.cn/static/images/ali.jpg"></a></div> -->
<ul class="nav nav-tabs hbflag"><li role="presentation"><a href="/tuya/">在线涂鸦画板</a></li><li role="presentation"><a href="/shizhong/">在线时钟</a></li><li role="presentation"><a href="/worldtime/">世界各地时间</a></li><li role="presentation"><a href="/capital/">世界各国首都查询</a></li><li role="presentation" class="active"><a href="/currency/">世界各地货币查询</a></li><li role="presentation"><a href="/areacode/">世界各国区号时差查询</a></li><li role="presentation"><a href="/jieri/">世界节日查询</a></li><li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;" role="button" aria-haspopup="true" aria-expanded="false">更多工具<span class="caret"> </span></a><ul class="dropdown-menu"><li role="presentation"><a href="/shaoshuminzu/">全国少数民族分布查询</a></li><li role="presentation"><a href="/chaodai/">中国历史朝代时间查询表</a></li><li role="presentation"><a href="/tesufuhao/">特殊符号大全</a></li></ul></li></ul><div class="panel"><form id="form1" class="form-horizontal" onsubmit="Public.TableSearch($('#table_huobi'), $('#keyword').val());return false;"> <div class="form-group"> <label class="col-sm-2 control-label">关键词：</label> <div class="col-sm-10"> <input class="form-control" type="text" id="keyword" name="keyword" placeholder="输入关键词"> </div> </div>
 	<div class="form-group">
		<div class="col-sm-12 text-center"><button type="button" class="btn btn-success" id="goSearch" onclick="Public.TableSearch($('#table_huobi'), $('#keyword').val())">查询货币</button> <input type="button" onclick="$('#keyword').val('');" value="清空" class="btn btn-default"></div>
	</div>	
</form> </div> <div class="accordion-group"> <div class="row"> <div class="col-sm-12">   
 <table id="table_huobi" class="table table-bordered table-striped table-hover"> <tbody> <tr> <th> 国家/地区 </th> <th> 中文名称 </th> <th> 英文名称 </th> <th> 原有旧符号 </th> <th> 标准符号 </th> <th> 辅币进位制 </th> <th> 所属地区（洲） </th> </tr> <tr> <td> 中国香港 </td> <td> 港元 </td> <td> HongKong Dollars </td> <td> HK＄ </td> <td> HKD </td> <td> 1HKD=100cents（分) </td> <td> 亚洲 </td> </tr> <tr> <td> 中国澳门 </td> <td> 澳门元 </td> <td> Macao Pataca </td> <td> PAT.;P. </td> <td> MOP </td> <td> 1MOP=100avos（分） </td> <td> 亚洲 </td> </tr> <tr> <td> 中国 </td> <td> 人民币元 </td> <td> Renminbi Yuan </td> <td> RMB￥ </td> <td> CNY </td> <td> 1CNY=10 jao（角）<br> 1 jao=10 fen（分） </td> <td> 亚洲 </td> </tr> <tr> <td> 朝鲜 </td> <td> 圆 </td> <td> Korean Won </td> <td> </td> <td> KPW </td> <td> 1KPW=100分 </td> <td> 亚洲 </td> </tr> <tr> <td> 越南 </td> <td> 越南盾 </td> <td> Vietnamese Dong </td> <td> D. </td> <td> VND </td> <td> 1VND=10角=100分 </td> <td> 亚洲 </td> </tr> <tr> <td> 日本 </td> <td> 日圆 </td> <td> Japanese Yen </td> <td> ￥;J.￥ </td> <td> JPY </td> <td> 1JPY=100 sen（钱） </td> <td> 亚洲 </td> </tr> <tr> <td> 老挝 </td> <td> 基普 </td> <td> Laotian Kip </td> <td> K. </td> <td> LAK </td> <td> 1LAK 1LAK=100 ats（阿特) </td> <td> 亚洲 </td> </tr> <tr> <td> 柬埔寨 </td> <td> 瑞尔 </td> <td> Camboddian Riel </td> <td> CR.;J Ri. </td> <td> KHR </td> <td> 1KHR=100 sen（仙） </td> <td> 亚洲 </td> </tr> <tr> <td> 菲律宾 </td> <td> 菲律宾比索 </td> <td> Philippine Peso </td> <td> Ph.Pes.; Phil.P. </td> <td> PHP </td> <td> 1PHP=100 centavos（分） </td> <td> 亚洲 </td> </tr> <tr> <td> 马来西亚 </td> <td> 马元 </td> <td> Malaysian Dollar </td> <td> M.＄;Mal.＄ </td> <td> MYR </td> <td> 1MYR=100 cents（分） </td> <td> 亚洲 </td> </tr> <tr> <td> 新加坡 </td> <td> 新加坡元 </td> <td> Ssingapore Dollar </td> <td> S.＄ </td> <td> SGD </td> <td> 1SGD=100 cents（分） </td> <td> 亚洲 </td> </tr> <tr> <td> 泰国 </td> <td> 泰铢 </td> <td> Thai Baht (Thai Tical) </td> <td> BT.;Tc. </td> <td> THP </td> <td> 1THP=100 satang（萨当） </td> <td> 亚洲 </td> </tr> <tr> <td> 缅甸 </td> <td> 缅元 </td> <td> Burmese Kyat </td> <td> K. </td> <td> BUK </td> <td> 1BUK=100 pyas（分） </td> <td> 亚洲 </td> </tr> <tr> <td> 斯里兰卡 </td> <td> 斯里兰卡卢比 </td> <td> Sri Lanka Rupee </td> <td> S.Re. 复数:S.Rs. </td> <td> LKR </td> <td> 1LKR=100 cents（分） </td> <td> 亚洲 </td> </tr> <tr> <td> 马尔代夫 </td> <td> 马尔代夫卢比 </td> <td> Maldives Rupee </td> <td> M.R.R; MAL.Rs. </td> <td> MVR </td> <td> 1MVR=100 larees（拉雷） </td> <td> 亚洲 </td> </tr> <tr> <td> 印度尼西亚 </td> <td> 盾 </td> <td> Indonesian Rupiah </td> <td> Rps. </td> <td> IDR </td> <td> 1IDR=100 cents（分） </td> <td> 亚洲 </td> </tr> <tr> <td> 巴基斯坦 </td> <td> 巴基斯坦卢比 </td> <td> Pakistan Pupee </td> <td> Pak.Re.;P.Re. 复数:P.Rs. </td> <td> PRK </td> <td> 1PRK=100 paisa（派萨） </td> <td> 亚洲 </td> </tr> <tr> <td> 印度 </td> <td> 卢比 </td> <td> Indian Rupee </td> <td> Re.复数:Rs. </td> <td> INR </td> <td> 1INR=100paise（派士）（单数:paisa） </td> <td> 亚洲 </td> </tr> <tr> <td> 尼泊尔 </td> <td> 尼泊尔卢比 </td> <td> Nepalese Rupee </td> <td> N.Re.复数:N.Rs. </td> <td> NPR </td> <td> 1NPR=100 paise（派司） </td> <td> 亚洲 </td> </tr> <tr> <td> 阿富汗 </td> <td> 阿富汗尼 </td> <td> Afghani </td> <td> Af. </td> <td> AFA </td> <td> 1AFA=100 puls（普尔） </td> <td> 亚洲 </td> </tr> <tr> <td> 伊朗 </td> <td> 伊朗里亚尔 </td> <td> Iranian Rial </td> <td> RI. </td> <td> IRR </td> <td> 1Irr=100 dinars（第纳尔） </td> <td> 亚洲 </td> </tr> <tr> <td> 伊拉克 </td> <td> 伊拉克第纳尔 </td> <td> Iraqi Dinar </td> <td> ID </td> <td> IQD </td> <td> 1IQD=1000 fils（费尔） </td> <td> 亚洲 </td> </tr> <tr> <td> 叙利亚 </td> <td> 叙利亚镑 </td> <td> Syrian Pound </td> <td> ￡.Syr.; ￡.S. </td> <td> SYP </td> <td> 1SYP=100 piastres（皮阿斯特） </td> <td> 亚洲 </td> </tr> <tr> <td> 黎巴嫩 </td> <td> 黎巴嫩镑 </td> <td> Lebanese Pound </td> <td> ￡L. </td> <td> LBP </td> <td> 1LBP=100 piastres（皮阿斯特） </td> <td> 亚洲 </td> </tr> <tr> <td> 约旦 </td> <td> 约旦第纳尔 </td> <td> Jordanian Dinar </td> <td> J.D.; J.Dr. </td> <td> JOD </td> <td> 1JOD=1,000 fils（费尔） </td> <td> 亚洲 </td> </tr> <tr> <td> 沙特阿拉伯 </td> <td> 亚尔 </td> <td> Saudi Arabian Riyal </td> <td> S.A.Rls.; S.R. </td> <td> SAR </td> <td> 1SAR=100qurush（库尔什）1qurush=5 halals（哈拉）沙特里 </td> <td> 亚洲 </td> </tr> <tr> <td> 科威特 </td> <td> 科威特第纳尔 </td> <td> Kuwaiti Dinar </td> <td> K.D. </td> <td> KWD </td> <td> 1KWD=1,000 fils（费尔） </td> <td> 亚洲 </td> </tr> <tr> <td> 巴林 </td> <td> 巴林第纳尔 </td> <td> Bahrain Dinar </td> <td> BD. </td> <td> BHD </td> <td> 1BHD=1,000 fils（费尔） </td> <td> 亚洲 </td> </tr> <tr> <td> 卡塔尔 </td> <td> 卡塔尔里亚尔 </td> <td> Qatar Riyal </td> <td> QR. </td> <td> QAR </td> <td> 1QAR=100 dirhams（迪拉姆） </td> <td> 亚洲 </td> </tr> <tr> <td> 阿曼 </td> <td> 阿曼里亚尔 </td> <td> Oman Riyal </td> <td> RO. </td> <td> OMR </td> <td> 1OMR=1,000 baiza（派沙） </td> <td> 亚洲 </td> </tr> <tr> <td> 阿拉伯也门 </td> <td> 也门里亚尔 </td> <td> Yemeni Riyal </td> <td> YRL. </td> <td> YER </td> <td> 1YER=100 fils（费尔） </td> <td> 亚洲 </td> </tr> <tr> <td> 民主也门 </td> <td> 也门第纳尔 </td> <td> Yemeni Dinar </td> <td> YD. </td> <td> YDD </td> <td> 1YDD=1,000 fils（费尔） </td> <td> 亚洲 </td> </tr> <tr> <td> 土耳其 </td> <td> 土耳其镑 </td> <td> Turkish Pound (Turkish Lira) </td> <td> ￡T. (TL.) </td> <td> TRL </td> <td> 1TRL=100 kurus（库鲁） </td> <td> 亚洲 </td> </tr> <tr> <td> 塞浦路斯 </td> <td> 塞浦路斯镑 </td> <td> Cyprus Pound </td> <td> ￡C. </td> <td> CYP </td> <td> 1CYP=1,000 mils（米尔） </td> <td> 亚洲 </td> </tr> <tr> <td> 欧洲货币联盟 </td> <td> 欧元 </td> <td> Euro </td> <td> EUR </td> <td> EUR </td> <td> 1EUR=100 euro cents（生丁） </td> <td> 欧洲 </td> </tr> <tr> <td> 冰岛 </td> <td> 冰岛克朗 </td> <td> Icelandic Krona（复数：Kronur） </td> <td> I.Kr. </td> <td> ISK </td> <td> 1ISK=100 aurar（奥拉） </td> <td> 欧洲 </td> </tr> <tr> <td> 丹麦 </td> <td> 丹麦克朗 </td> <td> Danish Krona（复数：Kronur） </td> <td> D.Kr. </td> <td> DKK </td> <td> 1DKK=100 ore（欧尔） </td> <td> 欧洲 </td> </tr> <tr> <td> 挪威 </td> <td> 挪威克朗 </td> <td> Norwegian Krone（复数：Kronur） </td> <td> N.Kr. </td> <td> NOK </td> <td> 1NOK=100 ore（欧尔） </td> <td> 欧洲 </td> </tr> <tr> <td> 瑞典 </td> <td> 瑞典克朗 </td> <td> Swedish Krona（复数：Kronor） </td> <td> S.Kr. </td> <td> SEK </td> <td> 1SEK=100 ore（欧尔） </td> <td> 欧洲 </td> </tr> <tr> <td> 芬兰 </td> <td> 芬兰马克 </td> <td> Finnish Markka (or Mark) </td> <td> MK.;FM.; FK.;FMK. </td> <td> FIM </td> <td> 1FIM=100 penni（盆尼） </td> <td> 欧洲 </td> </tr> <tr> <td> 俄罗斯 </td> <td> 卢布 </td> <td> Russian Ruble (or Rouble) </td> <td> Rbs. Rbl. </td> <td> SUR </td> <td> 1SUR=100 kopee（戈比） </td> <td> 欧洲 </td> </tr> <tr> <td> 波兰 </td> <td> 兹罗提 </td> <td> Polish Zloty </td> <td> ZL. </td> <td> PLZ </td> <td> 1PLZ=100 groszy（格罗希） </td> <td> 欧洲 </td> </tr> <tr> <td> 捷克和斯洛伐克 </td> <td> 捷克克朗 </td> <td> Czechish Koruna </td> <td> Kcs.; Cz.Kr. </td> <td> CSK </td> <td> 100 Hellers=（赫勒） </td> <td> 欧洲 </td> </tr> <tr> <td> 匈牙利 </td> <td> 福林 </td> <td> Hungarian Forint </td> <td> FT. </td> <td> HUF </td> <td> 1HUF=100 filler（菲勒） </td> <td> 欧洲 </td> </tr> <tr> <td> 德国 </td> <td> 马克 </td> <td> Deutsche Mark </td> <td> DM. </td> <td> DEM </td> <td> 1DEM=100 pfennig（芬尼） </td> <td> 欧洲 </td> </tr> <tr> <td> 奥地利 </td> <td> 奥地利先令 </td> <td> Austrian Schilling </td> <td> Sch. </td> <td> ATS </td> <td> 1ATS=100 Groschen（格罗申） </td> <td> 欧洲 </td> </tr> <tr> <td> 瑞士 </td> <td> 瑞士法郎 </td> <td> Swiss Franc </td> <td> SF.;SFR. </td> <td> CHF </td> <td> 1CHF=100 centimes（分） </td> <td> 欧洲 </td> </tr> <tr> <td> 荷兰 </td> <td> 荷兰盾 </td> <td> Dutch Guilder(or Florin) </td> <td> Gs.;Fl.;Dfl.; Hfl.;fl. </td> <td> NLG </td> <td> 1NLG=100 cents（分） </td> <td> 欧洲 </td> </tr> <tr> <td> 比利时 </td> <td> 比利时法郎 </td> <td> Belgian Franc </td> <td> Bi.;B.Fr.; B.Fc. </td> <td> BEF </td> <td> 1BEF=100 centimes（分）* </td> <td> 欧洲 </td> </tr> <tr> <td> 卢森堡 </td> <td> 卢森堡法郎 </td> <td> Luxembourg Franc </td> <td> Lux.F. </td> <td> LUF </td> <td> 1LUF=100 centimes（分） </td> <td> 欧洲 </td> </tr> <tr> <td> 英国 </td> <td> 英镑 </td> <td> Pound, Sterling </td> <td> ￡;￡ Stg. </td> <td> GBP </td> <td> 1GBP=100 new pence（新便士） </td> <td> 欧洲 </td> </tr> <tr> <td> 爱尔兰 </td> <td> 爱尔兰镑 </td> <td> Irish pound </td> <td> ￡.Ir. </td> <td> IEP </td> <td> 1IEP=100 new pence（新便士） </td> <td> 欧洲 </td> </tr> <tr> <td> 法国 </td> <td> 法郎 </td> <td> French Franc </td> <td> F.F.;Fr.Fc.; F.FR. </td> <td> FRF </td> <td> 1FRF=100 centimes（分） </td> <td> 欧洲 </td> </tr> <tr> <td> 西班牙 </td> <td> 比塞塔 </td> <td> Spanish Peseta </td> <td> Pts.;Pes. </td> <td> ESP </td> <td> 1ESP=100 centimos（分） </td> <td> 欧洲 </td> </tr> <tr> <td> 葡萄牙 </td> <td> 埃斯库多 </td> <td> Portuguese Escudo </td> <td> ESC. </td> <td> PTE** </td> <td> 1PTE=100 centavos（分） </td> <td> 欧洲 </td> </tr> <tr> <td> 意大利 </td> <td> 里拉 </td> <td> Italian Lira </td> <td> Lit. </td> <td> ITL </td> <td> 1ITL=100 centesimi（分）*** </td> <td> 欧洲 </td> </tr> <tr> <td> 马耳他 </td> <td> 马耳他镑 </td> <td> Maltess Pound </td> <td> ￡.M. </td> <td> MTP </td> <td> 1MTP=100 cents（分）1Cent=10 mils（米尔） </td> <td> 欧洲 </td> </tr> <tr> <td> 南斯拉夫 </td> <td> 南斯拉夫新第纳尔 </td> <td> Yugoslav Dinar </td> <td> Din.Dr. </td> <td> YUD </td> <td> 1YUD=100 paras（帕拉） </td> <td> 欧洲 </td> </tr> <tr> <td> 罗马尼亚 </td> <td> 列伊 </td> <td> Rumanian Leu（复数：Leva） </td> <td> L. </td> <td> ROL </td> <td> 1ROL=100 bani（巴尼） </td> <td> 欧洲 </td> </tr> <tr> <td> 保加利亚 </td> <td> 列弗 </td> <td> Bulgarian Lev（复数：Lei） </td> <td> Lev. </td> <td> BGL </td> <td> 1BGL=100 stotinki（斯托丁基） </td> <td> 欧洲 </td> </tr> <tr> <td> 阿尔巴尼亚 </td> <td> 列克 </td> <td> Albanian Lek </td> <td> Af. </td> <td> ALL </td> <td> 1All=100 quintars（昆塔） </td> <td> 欧洲 </td> </tr> <tr> <td> 希腊 </td> <td> 德拉马克 </td> <td> Greek Drachma </td> <td> Dr. </td> <td> GRD </td> <td> 1GRD=100 lepton（雷普顿）or lepta（雷普塔） </td> <td> 欧洲 </td> </tr> <tr> <td> 加拿大 </td> <td> 加元 </td> <td> Canadian Dollar </td> <td> Can.＄ </td> <td> CAD </td> <td> 1CAD=100 cents（分） </td> <td> 美洲 </td> </tr> <tr> <td> 美国 </td> <td> 美元 </td> <td> U.S.Dollar </td> <td> U.S.＄ </td> <td> USD </td> <td> 1USD=100 cent（分） </td> <td> 美洲 </td> </tr> <tr> <td> 墨西哥 </td> <td> 墨西哥比索 </td> <td> Mexican Peso </td> <td> Mex.＄ </td> <td> MXP </td> <td> 1MXP=100 centavos（分） </td> <td> 美洲 </td> </tr> <tr> <td> 危地马拉 </td> <td> 格查尔 </td> <td> Quatemalan Quetzal </td> <td> Q </td> <td> GTQ </td> <td> 1GTQ=100 centavos（分） </td> <td> 美洲 </td> </tr> <tr> <td> 萨尔瓦多 </td> <td> 萨尔瓦多科朗 </td> <td> Salvadoran Colon </td> <td> ￠ </td> <td> SVC </td> <td> 1SVC=100 centavos（分） </td> <td> 美洲 </td> </tr> <tr> <td> 洪都拉斯 </td> <td> 伦皮拉 </td> <td> Honduran Lempira </td> <td> L. </td> <td> HNL </td> <td> 1HNL=100 centavos（分） </td> <td> 美洲 </td> </tr> <tr> <td> 尼加拉瓜 </td> <td> 科多巴 </td> <td> Nicaraguan Cordoba </td> <td> CS </td> <td> NIC </td> <td> 1NIC=100 centavos（分） </td> <td> 美洲 </td> </tr> <tr> <td> 哥斯达黎加 </td> <td> 哥斯达黎加科朗 </td> <td> Costa Rican Colon </td> <td> ￠ </td> <td> CRC </td> <td> 1CRC=100 centavos（分） </td> <td> 美洲 </td> </tr> <tr> <td> 巴拿马 </td> <td> 巴拿马巴波亚 </td> <td> Panamanian Balboa </td> <td> B. </td> <td> PAB </td> <td> 1PAB=100 centesimos（分） </td> <td> 美洲 </td> </tr> <tr> <td> 古巴 </td> <td> 古巴比索 </td> <td> Cuban Peso </td> <td> Cu.Pes. </td> <td> CUP </td> <td> 1CUP=100 centavos（分） </td> <td> 美洲 </td> </tr> <tr> <td> 巴哈马联邦 </td> <td> 巴哈马元 </td> <td> Bahaman Dollar </td> <td> B.＄ </td> <td> BSD </td> <td> 1BSD=100 cents（分） </td> <td> 美洲 </td> </tr> <tr> <td> 牙买加 </td> <td> 牙买加元 </td> <td> Jamaican Dollars </td> <td> ＄.J. </td> <td> JMD </td> <td> 1JMD=100 cents（分） </td> <td> 美洲 </td> </tr> <tr> <td> 海地 </td> <td> 古德 </td> <td> Haitian Gourde </td> <td> G.;Gds. </td> <td> HTG </td> <td> 1HTG=100 centimes（分） </td> <td> 美洲 </td> </tr> <tr> <td> 多米尼加 </td> <td> 多米尼加比索 </td> <td> Dominican Peso </td> <td> R.D.＄ </td> <td> DOP </td> <td> 1DOP=100 centavos（分） </td> <td> 美洲 </td> </tr> <tr> <td> 特立尼达和多巴哥 </td> <td> 特立尼达多巴哥元 </td> <td> Trinidad and Tobago Dollar </td> <td> T.T.＄ </td> <td> TTD </td> <td> 1TTD=100 cents（分) </td> <td> 美洲 </td> </tr> <tr> <td> 巴巴多斯 </td> <td> 巴巴多斯元 </td> <td> Barbados Dollar </td> <td> BDS.＄ </td> <td> BBD </td> <td> 1BBD=100 cents（分） </td> <td> 美洲 </td> </tr> <tr> <td> 哥伦比亚 </td> <td> 哥伦比亚比索 </td> <td> Colombian Peso </td> <td> Col＄ </td> <td> COP </td> <td> 1COP=100 centavos（分） </td> <td> 美洲 </td> </tr> <tr> <td> 委内瑞拉 </td> <td> 博利瓦 </td> <td> Venezuelan Bolivar </td> <td> B </td> <td> VEB </td> <td> 1VEB=100 centimos（分） </td> <td> 美洲 </td> </tr> <tr> <td> 圭亚那 </td> <td> 圭亚那元 </td> <td> Guyanan Dollar </td> <td> G.＄ </td> <td> GYD </td> <td> 1GYD=100 cents（分） </td> <td> 美洲 </td> </tr> <tr> <td> 苏里南 </td> <td> 苏里南盾 </td> <td> Surinam Florin </td> <td> S.Fl. </td> <td> SRG </td> <td> 苏1SRG=100分 </td> <td> 美洲 </td> </tr> <tr> <td> 秘鲁 </td> <td> 新索尔 </td> <td> Peruvian Sol </td> <td> S/. </td> <td> PES </td> <td> 1PES=100 centavos（分） </td> <td> 美洲 </td> </tr> <tr> <td> 厄瓜多尔 </td> <td> 苏克雷 </td> <td> Ecuadoran Sucre </td> <td> S/. </td> <td> ECS </td> <td> 1ECS=100 centavos（分） </td> <td> 美洲 </td> </tr> <tr> <td> 巴西 </td> <td> 新克鲁赛罗 </td> <td> Brazilian New Cruzeiro G </td> <td> Gr.＄ </td> <td> BRC </td> <td> 1BRC=100 centavos（分） </td> <td> 美洲 </td> </tr> <tr> <td> 玻利维亚 </td> <td> 玻利维亚比索 </td> <td> Bolivian Peso </td> <td> Bol.P. </td> <td> BOP </td> <td> 1BOP=100 centavos（分） </td> <td> 美洲 </td> </tr> <tr> <td> 智利 </td> <td> 智利比索 </td> <td> Chilean Peso </td> <td> P. </td> <td> CLP </td> <td> 1CLP=100 centesimos（分） </td> <td> 美洲 </td> </tr> <tr> <td> 阿根廷 </td> <td> 阿根廷比索 </td> <td> Argentine Peso </td> <td> Arg.P. </td> <td> ARP </td> <td> 1ARP=100 centavos（分） </td> <td> 美洲 </td> </tr> <tr> <td> 巴拉圭 </td> <td> 巴拉圭瓜拉尼 </td> <td> Paraguayan Guarani </td> <td> Guars. </td> <td> PYG </td> <td> 1PYG=100 centimes（分） </td> <td> 美洲 </td> </tr> <tr> <td> 乌拉圭 </td> <td> 乌拉圭新比索 </td> <td> New Uruguayan Peso </td> <td> N.＄ </td> <td> UYP </td> <td> 1UYP=100 centesimos（分） </td> <td> 美洲 </td> </tr> <tr> <td> 埃及 </td> <td> 埃及镑 </td> <td> Egyptian Pound </td> <td> ￡E.;LF. </td> <td> EGP </td> <td> 1EGP=100 piastres（皮阿斯特）<br> =1,000 milliemes（米利姆） </td> <td> 非洲 </td> </tr> <tr> <td> 利比亚 </td> <td> 利比亚第纳尔 </td> <td> Libyan Dinar </td> <td> LD. </td> <td> LYD </td> <td> 1LYD=100 piastres（皮阿斯特）<br> =1,000 milliemes（米利姆） </td> <td> 非洲 </td> </tr> <tr> <td> 苏丹 </td> <td> 苏丹镑 </td> <td> Sudanese Pound </td> <td> ￡S. </td> <td> SDP </td> <td> 1SDP=100 piastres（皮阿斯特）<br> =1,000 milliemes（米利姆） </td> <td> 非洲 </td> </tr> <tr> <td> 突尼斯 </td> <td> 突尼斯第纳尔 </td> <td> Tunisian Dinar </td> <td> TD. </td> <td> TND </td> <td> 1TND=1,000 milliemes（米利姆） </td> <td> 非洲 </td> </tr> <tr> <td> 阿尔及利亚 </td> <td> 阿尔及利亚第纳尔 </td> <td> Algerian Dinar </td> <td> AD. </td> <td> DZD </td> <td> 1DZ=100 centimes（分） </td> <td> 非洲 </td> </tr> <tr> <td> 摩洛哥 </td> <td> 摩洛哥迪拉姆 </td> <td> Moroccan Dirham </td> <td> DH. </td> <td> MAD </td> <td> 1MAD=100 centimes（分） </td> <td> 非洲 </td> </tr> <tr> <td> 毛里塔尼亚 </td> <td> 乌吉亚 </td> <td> Mauritania Ouguiya </td> <td> UM </td> <td> MRO </td> <td> 1MRO=5 khoums（库姆斯） </td> <td> 非洲 </td> </tr> <tr> <td> 塞内加尔 </td> <td> 非共体法郎 </td> <td> African Financial Community Franc </td> <td> C.F.A.F. </td> <td> XOF </td> <td> 1XOF=100 centimes（分） </td> <td> 非洲 </td> </tr> <tr> <td> 上沃尔特 </td> <td> 非共体法郎 </td> <td> African Financial Community Franc </td> <td> C.F.A.F. </td> <td> XOF </td> <td> 1XOF=100 centimes（分） </td> <td> 非洲 </td> </tr> <tr> <td> 科特迪瓦 </td> <td> 非共体法郎 </td> <td> African Financial Community Franc </td> <td> C.F.A.F. </td> <td> XOF </td> <td> 1XOF=100 centimes（分） </td> <td> 非洲 </td> </tr> <tr> <td> 多哥 </td> <td> 非共体法郎 </td> <td> African Financial Community Franc </td> <td> C.F.A.F. </td> <td> XOF </td> <td> 1XOF=100 centimes（分） </td> <td> 非洲 </td> </tr> <tr> <td> 贝宁 </td> <td> 非共体法郎 </td> <td> African Financial Community Franc </td> <td> C.F.A.F. </td> <td> XOF </td> <td> 1XOF=100 centimes（分） </td> <td> 非洲 </td> </tr> <tr> <td> 尼泊尔 </td> <td> 非共体法郎 </td> <td> African Financial Community Franc </td> <td> C.F.A.F. </td> <td> XOF </td> <td> 1XOF=100 centimes（分） </td> <td> 非洲 </td> </tr> <tr> <td> 冈比亚 </td> <td> 法拉西 </td> <td> Gambian Dalasi </td> <td> D.G. </td> <td> GMD </td> <td> 1GMD=100 bututses（分） </td> <td> 非洲 </td> </tr> <tr> <td> 几内亚比绍 </td> <td> 几内亚比索 </td> <td> Guine- Bissau peso </td> <td> PG. </td> <td> GWP </td> <td> 1GWP=100 centavos（分） </td> <td> 非洲 </td> </tr> <tr> <td> 几内亚 </td> <td> 几内亚西里 </td> <td> Guinean Syli </td> <td> GS. </td> <td> GNS </td> <td> 辅币为科里cauri,但50科里以下<br> 舍掉不表示；50科里以上进为一西里。 </td> <td> 非洲 </td> </tr> <tr> <td> 塞拉里昂 </td> <td> 利昂 </td> <td> Sierra Leone Leone </td> <td> Le. </td> <td> SLL </td> <td> 1SLL=100 cents（分） </td> <td> 非洲 </td> </tr> <tr> <td> 利比里亚 </td> <td> 利比里亚元 </td> <td> Liberian Dollar </td> <td> L.＄￡;Lib.＄ </td> <td> LRD </td> <td> 1LRD=100 cents（分） </td> <td> 非洲 </td> </tr> <tr> <td> 加纳 </td> <td> 塞地 </td> <td> Ghanaian Cedi </td> <td> ￠ </td> <td> GHC </td> <td> 1GHC=100 pesewas（比塞瓦） </td> <td> 非洲 </td> </tr> <tr> <td> 尼日利亚 </td> <td> 奈拉 </td> <td> Nigerian Naira </td> <td> N </td> <td> NGN </td> <td> 1NGN=100 kobo（考包） </td> <td> 非洲 </td> </tr> <tr> <td> 喀麦隆 </td> <td> 中非金融合作法郎 </td> <td> Central African Finan-Coop Franc </td> <td> CFAF </td> <td> XAF </td> <td> 1XAF=100 centimes（分） </td> <td> 非洲 </td> </tr> <tr> <td> 乍得 </td> <td> 中非金融合作法郎 </td> <td> Central African Finan-Coop Franc </td> <td> CFAF </td> <td> XAF </td> <td> 1XAF=100 centimes（分） </td> <td> 非洲 </td> </tr> <tr> <td> 刚果 </td> <td> 中非金融合作法郎 </td> <td> Central African Finan-Coop Franc </td> <td> CFAF </td> <td> XAF </td> <td> 1XAF=100 centimes（分） </td> <td> 非洲 </td> </tr> <tr> <td> 加蓬 </td> <td> 中非金融合作法郎 </td> <td> Central African Finan-Coop Franc </td> <td> CFAF </td> <td> XAF </td> <td> 1XAF=100 centimes（分） </td> <td> 非洲 </td> </tr> <tr> <td> 中非 </td> <td> 中非金融合作法郎 </td> <td> Central African Finan-Coop Franc </td> <td> CFAF </td> <td> XAF </td> <td> 1XAF=100 centimes（分） </td> <td> 非洲 </td> </tr> <tr> <td> 赤道几内亚 </td> <td> 赤道几内亚埃奎勒 </td> <td> Equatorial Guinea Ekuele </td> <td> EK. </td> <td> GQE </td> <td> 1GQE=100 centimes（分） </td> <td> 非洲 </td> </tr> <tr> <td> 南非 </td> <td> 兰特 </td> <td> South African Rand </td> <td> R. </td> <td> ZAR </td> <td> 1ZAR=100 cents（分） </td> <td> 非洲 </td> </tr> <tr> <td> 吉布提 </td> <td> 吉布提法郎 </td> <td> Djibouti Franc </td> <td> DJ.FS;DF </td> <td> DJF </td> <td> 1DJF=100 centimes（分） </td> <td> 非洲 </td> </tr> <tr> <td> 索马里 </td> <td> 索马里先令 </td> <td> Somali Shilling </td> <td> Sh.So. </td> <td> SOS </td> <td> 1SOS=100 cents（分） </td> <td> 非洲 </td> </tr> <tr> <td> 肯尼亚 </td> <td> 肯尼亚先令 </td> <td> Kenya Shilling </td> <td> K.Sh </td> <td> KES </td> <td> 1KES=100 cents（分） </td> <td> 非洲 </td> </tr> <tr> <td> 乌干达 </td> <td> 乌干达先令 </td> <td> Uganda Shilling </td> <td> U.Sh. </td> <td> UGS </td> <td> 1UGS=100 cents（分） </td> <td> 非洲 </td> </tr> <tr> <td> 坦桑尼亚 </td> <td> 坦桑尼亚先令 </td> <td> Tanzania Shilling </td> <td> T.Sh. </td> <td> TZS </td> <td> 1TZS=100 cents（分） </td> <td> 非洲 </td> </tr> <tr> <td> 卢旺达 </td> <td> 卢旺达法郎 </td> <td> Rwanda Franc </td> <td> RF. </td> <td> RWF </td> <td> 1RWF=100 cents（分） </td> <td> 非洲 </td> </tr> <tr> <td> 布隆迪 </td> <td> 布隆迪法郎 </td> <td> Burnudi Franc </td> <td> F.Bu </td> <td> BIF </td> <td> 1BIF=100 cents（分） </td> <td> 非洲 </td> </tr> <tr> <td> 扎伊尔 </td> <td> 扎伊尔 </td> <td> Zaire Rp Zaire </td> <td> Z. </td> <td> ZRZ </td> <td> 1ZRZ=100 makuta（马库塔） </td> <td> 非洲 </td> </tr> <tr> <td> 赞比亚 </td> <td> 赞比亚克瓦查 </td> <td> Zambian Kwacha </td> <td> KW.;K. </td> <td> ZMK </td> <td> 1ZMK=100 nywee（恩韦） </td> <td> 非洲 </td> </tr> <tr> <td> 马达加斯加 </td> <td> 马达加斯加法郎 </td> <td> Franc de Madagasca </td> <td> F.Mg. </td> <td> MCF </td> <td> 1MCF=100 cents（分） </td> <td> 非洲 </td> </tr> <tr> <td> 塞舌尔 </td> <td> 塞舌尔卢比 </td> <td> Seychelles Rupee </td> <td> S.RP(S) </td> <td> SCR </td> <td> 1SCR=100 cent（分） </td> <td> 非洲 </td> </tr> <tr> <td> 毛里求斯 </td> <td> 毛里求斯卢比 </td> <td> Mauritius Rupee </td> <td> Maur. Rp. </td> <td> MUR </td> <td> 1MUR=100 centimes（分） </td> <td> 非洲 </td> </tr> <tr> <td> 津巴布韦 </td> <td> 津巴布韦元 </td> <td> Zimbabwe Dollar </td> <td> ZIM.＄ </td> <td> ZWD </td> <td> 1ZWD=100 cents（分） </td> <td> 非洲 </td> </tr> <tr> <td> 科摩罗 </td> <td> 科摩罗法郎 </td> <td> Comoros Franc </td> <td> Com.F. </td> <td> KMF </td> <td> 1KMF=100 tambala（坦巴拉） </td> <td> 非洲 </td> </tr> <tr> <td> 澳大利亚 </td> <td> 澳大利亚元 </td> <td> Australian Dollar </td> <td> ＄A. </td> <td> AUD </td> <td> 1AUD=100 cents<br> （分） </td> <td> 大洋洲 </td> </tr> <tr> <td> 新西兰 </td> <td> 新西兰元 </td> <td> New Zealand Dollar </td> <td> ＄NZ. </td> <td> NZD </td> <td> 1NZD=100 cents<br> （分） </td> <td> 大洋洲 </td> </tr> <tr> <td> 斐济 </td> <td> 斐济元 </td> <td> Fiji Dollar </td> <td> F.＄ </td> <td> FJD </td> <td> 1FJD=100 cents<br> （分） </td> <td> 大洋洲 </td> </tr> <tr> <td> 所罗门群岛 </td> <td> 所罗门元 </td> <td> Solomon Dollar. </td> <td> SL. ＄ </td> <td> SBD </td> <td> 1SBD=100 cents<br> （分） </td> <td> 大洋洲 </td> </tr> </tbody> </table> 
 </div> </div> </div>
</div></div><div class="accordion-group"><div class="in collapse bs-docs-demoexample"><h4>世界各地货币单位查询</h4><p>世界各地货币单位查询为您提供在线世界各国地区货币查询表,提供世界各国或地区对应的货币名称,符号表示,进位制信息查询,港元美元人民欧元币世界货币查询等。</p><p>如：中华人民共和国的法定货币是人民币，中国人民银行是国家管理人民币的主管机关，负责人民币的设计、印制和发行。 
人民币的单位为元，人民币的辅币单位为角、分。1元等于10角，1角等于10分。人民币符号为元的拼音首字母大写Y加上两横即“¥”</p></div></div> <div class="accordion-group"> </div></div></div></div><script src="/static/script/jquery-1.11.3.min.js" type="text/javascript"></script><script src="/static/script/bootstrap.min.js" type="text/javascript"></script><script src="/static/script/tool.js" type="text/javascript"></script><script type="text/javascript">var Public={};Public.TableSearch=function(table,keyword){if(keyword){keyword=keyword.replace(/\s+/g,'')}if(!keyword){$('tr',table).each(function(){$(this).show()});return}var pattern=new RegExp(keyword),is_show=false,is_td=false,str='';$('tr',table).each(function(){is_show=false,is_td=false;$('td',this).each(function(){is_td=true;str=$(this).text().replace(/\s+/g,'');if(pattern.test(str)){is_show=true}});if(is_td){if(is_show){$(this).show()}else{$(this).hide()}}})}</script><div class="container" id="foot-history">
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
<div class="container" style="margin-top:20px">
    <div class="row">
        <div class="col-sm-12"><p>友情链接：
        	 <a href="https://www.dkewl.com" target="_blank">刀客源码网</a>
				<a href="https://www.dkewl.com" target="_blank">刀客源码</a>
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