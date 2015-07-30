<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>无标题文档</title>
    <link href="/Public/Home/css/brand1.css" rel="stylesheet" type="text/css">
    <script src="/Public/Home/js/jquery-1.10.2.min.js"></script>
    <script src="/Public/Home/js/brand1.js"></script>
</head>
<body>
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
    </div>
</div>
</body>
</html>