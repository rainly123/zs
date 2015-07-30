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
	
    <link href="/Public/Home/css/brand.css" rel="stylesheet" type="text/css">
    <script src="/Public/Home/js/brand.js"></script>

<div id="main-container" class="container">
    <div class="row">
        
        <!-- 左侧 nav
        ================================================== -->
            <div class="span3 bs-docs-sidebar">
                
                <ul class="nav nav-list bs-docs-sidenav">
                    <?php echo W('Category/lists', array($category['id'], ACTION_NAME == 'index'));?>
                </ul>
            </div>
        
        
    <div class="main_Content">
        <div class="info">
            <?php echo ($banrd_notice["notice_content"]); ?>
        </div>
        <div class="main_brand">
            <ul class="brand_list">
                <li><a href="#"><b class="icon1" style="margin-top:5px;"></b>商用车</a></li>
                <li><a href="#"><b class="icon2"></b>轮胎</a></li>
                <li><a href="#"><b class="icon3"></b>油品</a></li>
                <li><a href="#"><b class="icon4"></b>零部件</a></li>
                <li><a href="#"><b class="icon5"></b>仓储设备</a></li>
            </ul>
        </div>
        <div class="shopping">
            <div class="shop_wrap">
                <dl>
                    <dt>
                    <h3>品牌拥有者</h3>
                    <a href="#"></a>
                    </dt>
                    <dd>
                        <div class="wrap">
                            <?php echo ($BrandQJ["notice_content"]); ?>
                        </div>
                    </dd>
                </dl>
            </div>
            <div class="shop_wrap">
                <dl>
                    <dt>
                    <h3>单品牌代理商</h3>
                    <a href="#" class="danpin"></a>
                    </dt>
                    <dd>
                        <div class="wrap">
                            <?php echo ($BrandZM["notice_content"]); ?>
                        </div>
                    </dd>
                </dl>
            </div>
            <div class="shop_wrap" style="margin-right:0;">
                <dl>
                    <dt>
                    <h3>多品牌代理商</h3>
                    <a href="#" class="duopin"></a>
                    </dt>
                    <dd>
                        <div class="wrap">
                            <?php echo ($BrandZY["notice_content"]); ?>
                        </div>
                    </dd>
                </dl>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="box_cont">
            <ul class="brandlunInfo">
                <li class="brandlun">
                    <p class="luntai">商用车（轮胎油品 / 零部件仓储设备</p>
                    <div class=" clearfix brand_box">
                        <?php if(is_array($BrandSYC)): $i = 0; $__LIST__ = $BrandSYC;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$syc): $mod = ($i % 2 );++$i;?><span><?php echo ($syc["br_name"]); ?></span><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </li>
            </ul>
            <ul class="brandlunInfo" style="display:none;">
                <li class="brandlun">
                    <p class="luntai">生活电器</p>
                    <div class=" clearfix brand_box">
                        <?php if(is_array($BrandLT)): $i = 0; $__LIST__ = $BrandLT;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lt): $mod = ($i % 2 );++$i;?><span><?php echo ($lt["br_name"]); ?></span><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </li>
            </ul>
            <ul class="brandlunInfo" style="display:none;">
                <li class="brandlun">
                    <p class="luntai">箱包皮具/热销女包/男包</p>
                    <div class=" clearfix brand_box">
                        <?php if(is_array($BrandYP)): $i = 0; $__LIST__ = $BrandYP;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$yp): $mod = ($i % 2 );++$i;?><span><?php echo ($yp["br_name"]); ?></span><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </li>
            </ul>
            <ul class="brandlunInfo" style="display:none;">
                <li class="brandlun">
                    <p class="luntai">保健食品/膳食营养补充食品</p>
                    <div class=" clearfix brand_box">
                        <?php if(is_array($BrandLBJ)): $i = 0; $__LIST__ = $BrandLBJ;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lbj): $mod = ($i % 2 );++$i;?><span><?php echo ($lbj["br_name"]); ?></span><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </li>
            </ul>
            <ul class="brandlunInfo" style="display:none;">
                <li class="brandlun">
                    <p class="luntai">玩具/模型/动漫/早教/益智</p>
                    <div class=" clearfix brand_box">
                        <?php if(is_array($BrandCCSB)): $i = 0; $__LIST__ = $BrandCCSB;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ccsb): $mod = ($i % 2 );++$i;?><span><?php echo ($ccsb["br_name"]); ?></span><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </li>
            </ul>
            <div class="join_in">
                <a href="#">立即入驻</a>
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