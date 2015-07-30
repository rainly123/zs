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
	
    <link href="/Public/Home/css/know.css" rel="stylesheet" type="text/css">
    <script src="/Public/Home/js/know.js"></script>

<div id="main-container" class="container">
    <div class="row">
        
        <!-- 左侧 nav
        ================================================== -->
            <div class="span3 bs-docs-sidebar">
                
                <ul class="nav nav-list bs-docs-sidenav">
                    <?php echo W('Category/lists', array($category['id'], ACTION_NAME == 'index'));?>
                </ul>
            </div>
        
        
    <div class="content_box">
        <div class="box_title">
            <h3>了解第e商城</h3>
        </div>
        <div class="introduction">
            <div class="introduction_left">
                <img src="/Public/Home/images/know1.png" width="500" height="367">
            </div>
            <div class="introduction_right">
                <h4>第e商城简介</h4>
                <p>第e商城是一个垂直型的物流设备的在线商城，因此第e商城只支持物流设备的厂家、经销商等入驻成为第e商城的商家。华瀚（上海）科技股份有限公司成立于2014年12月，总部位于上海市虹口区汶水东路351号1876老站创意园，
                    是经上海市工商行政管理局批准注册的型的物流设备的在线商城。公司主要从事计算机软硬件技术开发 、技术转让和高新科技项目投资等。公司具有专业的技术开发团队和丰富经验的市场运行团队，是目前中国大
                    型互联网综合服务提供商之一，也是中国终端服务用户最具潜力的互联网企业之一，更是世界新一代电子商务倡导“同城交易”的领跑者。公司一直秉承一切以用户价值为依归的经营理念；以面向未来，坚持自主创新，
                    树立民族品牌为长远发展规划；以“团队协作、精简高效、求真务实、开拓创新” 为宗旨。</p>
                <p>第e商城是一个垂直型的物流设备的在线商城，因此第e商城只支持物流设备的厂家、经销商等入驻成为第e商城的商家。广西嘉程科技有限公司成立于2007年12月，总部位于绿城南宁高新技术开发区，
                    是经广西壮族自治区工商行政管理局批准注册的新兴大型互联网科技企业。公司主要从事计算机软硬件技术开发 、技术转让和高新科技项目投资等。公司具有专业的技术</p>
            </div>
        </div>
        <div class="team_work">
            <div class="team_work_left">
                <h4>合作伙伴</h4>
                <p>第e商城是一个垂直型的物流设备的在线商城，因此第e商城只支持物流设备的厂家、经销商等入驻成为第e商城的商家。华瀚（上海）科技股份有限公司成立于2014年12月，总部位于上海市虹口区汶水东路351号1876老站创意园，
                    是经上海市工商行政管理局批准注册的型的物流设备的在线商城。公司主要从事计算机软硬件技术开发 、技术转让和高新科技项目投资等。公司具有专业的技术开发团队和丰富经验的市场运行团队，是目前中国大
                    型互联网综合服务提供商之一，也是中国终端服务用户最具潜力的互联网企业之一，更是世界新一代电子商务倡导“同城交易”的领跑者。公司一直秉承一切以用户价值为依归的经营理念；以面向未来，坚持自主创新，
                    树立民族品牌为长远发展规划；以“团队协作、精简高效、求真务实、开拓创新” 为宗旨。</p>
                <p>第e商城是一个垂直型的物流设备的在线商城，因此第e商城只支持物流设备的厂家、经销商等入驻成为第e商城的商家。广西嘉程科技有限公司成立于2007年12月，总部位于绿城南宁高新技术开发区，
                    是经广西壮族自治区工商行政管理局批准注册的新兴大型互联网科技企业。公司主要从事计算机软硬件技术开发 、技术转让和高新科技项目投资等。公司具有专业的技术</p>
            </div>
            <div class="team_work_right">
                <img src="/Public/Home/images/know.png" width="500" height="367">
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