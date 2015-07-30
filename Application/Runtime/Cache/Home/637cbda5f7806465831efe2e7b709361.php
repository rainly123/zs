<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	
<meta charset="UTF-8">
<script src="/Public/Home/js/jquery-1.10.2.min.js"></script>
<title><?php echo ($title); ?></title>
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
                <a href="<?php echo U('Index/index');?>">招商首页</a>
            </li>
            <li>
                <a href="<?php echo U('Brand/index');?>">招商品牌</a>
            </li>
            <li>
                <a href="<?php echo U('Normal/index');?>">招商标准</a>
            </li>
            <li>
                <a href="<?php echo U('Charges/index');?>">资费标准</a>
            </li>
            <li>
                <a href="<?php echo U('Feature/index');?>">特色服务</a>
            </li>
            <li>
                <a href="<?php echo U('About/index');?>">了解第e商城</a>
            </li>
        </ul>
    </div>
</div>
	<!-- /头部 -->
	
	<!-- 主体 -->
	
    <link href="/Public/Home/css/feature.css" rel="stylesheet" type="text/css">
    <script src="/Public/Home/js/feature.js"></script>

<div id="main-container" class="container">
    <div class="row">
        
        <!-- 左侧 nav
        ================================================== -->
            <div class="span3 bs-docs-sidebar">
                
                <ul class="nav nav-list bs-docs-sidenav">
                    <?php echo W('Category/lists', array($category['id'], ACTION_NAME == 'index'));?>
                </ul>
            </div>
        
        
    <div class="wbox">
        <div class="jin_rong">
            <div class="finance">
                <h3>金融服务</h3>
                <span class="finance_text">为商户提供支付、贷款、保险等全方位的金融服务。</span>
            </div>
        </div>
    </div>
    <div class="wbox2">
        <div class="shu_ju">
            <div class="data">
                <h3>数据服务</h3>
                <span class="data_text">为第e商城的商户提供全方位、多角度、<br>深层次的大数据分析服务。</span>
            </div>
        </div>
    </div>
    <div class="wbox3">
        <div class="ad">
            <div class="advert">
                <h3>广告服务</h3>
                <span class="advert_text">为商户提供精准营销服务，<br>结合第e物流大数据系统，<br>让你的店铺流量飞起来。</span>
            </div>
        </div>
    </div>
    <div class="wbox4">
        <div class="pei_xun">
            <div class="cultivate">
                <h3>培训服务</h3>
                <span class="cultivate_text">为商户提供专业的电商知识培训，<br>让你深入触网，做好互联网营销。</span>
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