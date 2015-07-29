<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	
<meta charset="UTF-8">
<link href="/Public/Home/css/master.css" rel="stylesheet" type="text/css">
<script src="/Public/Home/js/jquery-1.10.2.min.js"></script>
<script src="/Public/Home/js/superslide.2.1.js"></script>
<script src="/Public/Home/js/index.js"></script>



<!--<title><?php echo C('WEB_SITE_TITLE');?></title>-->
<!--<link href="/Public/static/bootstrap/css/bootstrap.css" rel="stylesheet">-->
<!--<link href="/Public/static/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">-->
<!--<link href="/Public/static/bootstrap/css/docs.css" rel="stylesheet">-->
<!--<link href="/Public/static/bootstrap/css/onethink.css" rel="stylesheet">-->

<!--&lt;!&ndash; Le HTML5 shim, for IE6-8 support of HTML5 elements &ndash;&gt;-->
<!--&lt;!&ndash;[if lt IE 9]>-->
<!--<script src="/Public/static/bootstrap/js/html5shiv.js"></script>-->
<!--<![endif]&ndash;&gt;-->
<!---->
<!--&lt;!&ndash;[if lt IE 9]>-->
<!--<script type="text/javascript" src="/Public/static/jquery-1.10.2.min.js"></script>-->
<!--<![endif]&ndash;&gt;-->
<!--&lt;!&ndash;[if gte IE 9]>&lt;!&ndash;>-->
<!--<script type="text/javascript" src="/Public/static/jquery-2.0.3.min.js"></script>-->
<!--<script type="text/javascript" src="/Public/static/bootstrap/js/bootstrap.min.js"></script>-->
<!--&lt;!&ndash;<![endif]&ndash;&gt;-->
<!--&lt;!&ndash; 页面header钩子，一般用于加载插件CSS文件和代码 &ndash;&gt;-->
<!--<?php echo hook('pageHeader');?>-->

</head>
<body>
	<!-- 头部 -->
	<!-- 导航条
================================================== -->
<div id="top">
    <div class="top">
        <div class="top_container">
            <p class="top_home">
                <a href="#">第e商城首页</a>
            </p>
            <p class="top_login">
                <em>欢迎来第e商城</em>
                <a href="#" class="e_login">请登录</a>
                <a href="#" class="e_login">免费注册</a>
            </p>
            <ul class="merchant">
                <li class="center">
                    <a href="#">商家中心</a>
                </li>
                <li class="center">
                    <a href="#">商家地图</a>
                </li>
                <li>
                    <a href="#">手机版</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="logo">
    <div id="header">
        <div class="logo">
       <span class="e_logo">
        <a href="#">
            <img src="/Public/Home/images/logo_03.png">
        </a>
       </span>
       <span class="s_logo">
        <a href="#">招商</a>
       </span>
        </div>
    </div>
</div>
<div id="nav">
    <div class="nav">
        <ul class="nav_ul">
            <li>
                <a href="index.html">招商首页</a>
            </li>
            <li>
                <a href="brand.html">招商品牌</a>
            </li>
            <li>
                <a href="normal.html">招商标准</a>
            </li>
            <li>
                <a href="charges.html">资费标准</a>
            </li>
            <li>
                <a href="feature.html">特色服务</a>
            </li>
            <li>
                <a href="know.html">了解第e商城</a>
            </li>
        </ul>
    </div>
</div>
	<!-- /头部 -->
	
	<!-- 主体 -->
	
<div id="main-container" class="container">
    <div class="row">
        
        <!-- 左侧 nav
        ================================================== -->
            <div class="span3 bs-docs-sidebar">
                
                <ul class="nav nav-list bs-docs-sidenav">
                    <?php echo W('Category/lists', array($category['id'], ACTION_NAME == 'index'));?>
                </ul>
            </div>
        
        
    <div class="banner">
        <div class="bannercont">
            <ul>
                <li><img src="/Public/Home/images/a1.jpg"></li>
                <li><img src="/Public/Home/images/a2.jpg"></li>
                <li><img src="/Public/Home/images/a3.jpg"></li>
                <li><img src="/Public/Home/images/a4.jpg"></li>
            </ul>
        </div>
        <div class="hd">
            <ul>
            </ul>
        </div><!--圆点-->
        <div class="pnBtn prev">
            <a class="arrow" href="javascript:void(0)"></a>
        </div>
        <div class="pnBtn next">
            <a class="arrow" href="javascript:void(0)"></a>
        </div>
        <div id="onclick"><a class="banner_ruzhu info_larger info_primary info_btn">立即入驻</a></div>
    </div>
    <div class="info">
        <div class="wrap">
            <div class="brands">
                <div class="info_brand">
                    <div class="info_box">
                        <div class="info_title">
                            <h2>我的品牌能否入驻第e商城？</h2>
                            <div class="info_sub">查询您的品牌是否在第e商城核准开店标准内</div>
                        </div>
                        <a href="brand.html" class="info_larger info_primary info_btn">查询品牌</a>
                    </div>
                </div>
                <div class="info_brand">
                    <div class="info_box">
                        <div class="info_title">
                            <h2>入驻需要哪些材料?</h2>
                            <div class="info_sub">查询自身行业所需要提交的资质</div>
                        </div>
                        <a href="normal.html" class="info_larger info_primary info_btn">查询招商标准</a>
                    </div>
                </div>
                <div class="info_brand">
                    <div class="info_box">
                        <div class="info_title">
                            <h2>申请遇到疑问了吗？</h2>
                            <div class="info_sub">咨询电话(021) 65800910 工作日 09:00-18:00</div>
                        </div>
                        <a href="#" class="info_larger1 info_btn1">咨询在线客服</a>
                    </div>
                </div>
                <div class="info_brand">
                    <div class="info_box info_list">
                        <!--     <div class="sui-title">
                                 <h2>已入驻商家</h2>
                             </div>-->
                        <div class="notice_list">
                            <div class="ruzhu">
                                <img src="/Public/Home/images/ruzhu.png" width="52" height="51">
                            </div>
                            <div class="shop_right">
                                <p>入驻商家<br>360,0000</p>
                                <div class="clearfix"></div>
                            </div>
                            <!-- <ul>
                                 <li><a href="#" title="第e商城招商及续签考核标准调整公告">第e商城招商及续签考核标准调整公告</a></li>
                                 <li><a href="#" title="第e商城2016年度各类目续签考核标准一览表">第e商城2016年度各类目续签考核标准一览表</a></li>
                                 <li><a href="#" title="7月1日生效的《第e商城2015年度招商资质细则》">7月1日生效的《第e商城2015年度招商资质细则》</a></li>
                                 <li><a href="#" title="《互联网支付服务协议》、《支付服务协议》调整公告">《互联网支付服务协议》、《支付服务协议》调整公告</a></li>
                                 <li><a href="#" title="第e商城类目申请流程升级公告">第e商城类目申请流程升级公告</a></li>
                             </ul>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="process">
        <div class="wrapper">
            <div class="process_title">
                <div class="title_info">
                    <h2>入驻流程</h2>
                </div>
            </div>
            <ul class="process_icon">
                <li class="icon"><div class="process_icon_line"></div></li>
                <li class="icon01"><div class="process_icon_line"></div></li>
                <li class="icon02"><div class="process_icon_line"></div></li>
                <li class="icon03"><div class="process_icon_line"></div></li>
                <li class="icon04"><div class="process_icon_line"></div></li>
                <li class="icon05"></li>
            </ul>
            <div class="process_know">
                <div class="know_box number_num">
                    <div class="know_title">
                        <div class="know_title_info">
                            <h2>1.了解招商标准</h2>
                        </div>
                    </div>
                    <div class="know_list">
                        <ul>
                            <li>查询所经营类目招商的品牌</li>
                            <li>了解入驻所需材料</li>
                            <li>了解相关资费标准</li>
                        </ul>
                    </div>
                </div>
                <div class="know_box number_num">
                    <div class="know_title">
                        <div class="know_title_info">
                            <h2>2.注册和登陆</h2>
                        </div>
                    </div>
                    <div class="know_list">
                        <ul>
                            <li>注册企业版账号</li>
                            <li>登录进入企业招商界面</li>
                            <li>注册和登陆成功</li>
                        </ul>
                    </div>
                </div>
                <div class="know_box number_num">
                    <div class="know_title">
                        <div class="know_title_info">
                            <h2>3.填写/提交信息及资料</h2>
                        </div>
                    </div>
                    <div class="know_list">
                        <ul>
                            <li>填写申请信息，提交资质</li>
                        </ul>
                    </div>
                </div>
                <div class="know_box number_num">
                    <div class="know_title">
                        <div class="know_title_info">
                            <h2>4.设置店铺名称和域名</h2>
                        </div>
                    </div>
                    <div class="know_list">
                        <ul>
                            <li>选择店铺名称及域名</li>
                            <li>在线签署服务协议</li>
                        </ul>
                    </div>
                </div>
                <div class="know_box number_num">
                    <div class="know_title">
                        <div class="know_title_info">
                            <h2>5.等待第e商城审核</h2>
                        </div>
                    </div>
                    <div class="know_list">
                        <ul>
                            <li>第e商城7个工作日内给到审核结果</li>
                            <li>如提交资质未通过审核，请在15个工作日内完成修改并提交，逾期未提交，申请状态将失效</li>
                        </ul>
                    </div>
                </div>
                <div class="know_box number_num">
                    <div class="know_title">
                        <div class="know_title_info">
                            <h2>6.店铺上线，入驻成功</h2>
                        </div>
                    </div>
                    <div class="know_list">
                        <ul>
                            <li> 锁定保证金，缴纳技术服务年费</li>
                            <li>发布商品 ，店铺上线</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="dialog_box box_overlay" style="width:1190px; z-index:9999999; left:365px; top:240px; display:none" id="close">
        <a href="#" class="dialog_close">
            <span class="dialog_span"></span>
        </a>
        <div class="dialog_content">
            <div class="dialog_header">
                入驻申请
            </div>
            <div class="dialog_body">
                <div class="text_container">
                    <p>亲，根据2015第e商城整体服务升级计划，即日起正式执行新进驻商家招商标准。以下是各行业今年意愿招商的品牌方向，请务必仔细查阅您申请入驻的品牌是否在以下范围。</p>
                </div>
            </div>
            <iframe src="brand1.html" frameborder="no" border="0" marginwidth="0" marginheight="0" width="1190" height="500">
            </iframe>
            <div class="dialog_btn">
                <button class=" dialog_onlcik btn_bg btn_cont" style="border:none;">确定，继续入驻</button>
                <button class=" dialog_quxiao qu_xiao">取消</button>
            </div>
        </div>
    </div>

    </div>
</div>

<script type="text/javascript">
    $(function(){
        $(window).resize(function(){
            $("#main-container").css("min-height", $(window).height() - 343);
        }).resize();
    })
</script>
	<!-- /主体 -->

	<!-- 底部 -->
	<div id="footer">
    <div class="copyright">
        <p class="footer_otherlink">
            <a href="#" target="_blank">关于我们</a>
            <a href="#" target="_blank">联系我们</a>
            <a href="#" target="_blank">站点地图</a>
            <a href="#" target="_blank">隐私策略</a>
            <a href="#" target="_blank">用户协议</a>
            <a href="#" target="_blank">法律声明</a>
            <a href="#" target="_blank">友情链接</a>
            <a href="#" target="_blank">诚聘英才</a>
            <a href="#" target="_blank">意见投诉</a>
            <a href="#" target="_blank">加盟合作</a>
            <a href="#" target="_blank" id="return_top">返回顶部</a>
        </p>
        <div class="footer_copyright">
            <p>© 2015版权所有 华瀚（上海）数据科技股份有限公司 沪ICP备15008911号 沪 经营性-2015-0420 互联网信息服务资格证书</p>
        </div>
    </div>
</div>
	<!-- /底部 -->
</body>
</html>