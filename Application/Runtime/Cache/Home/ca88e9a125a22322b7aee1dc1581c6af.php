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
	
    <link href="/Public/Home/css/charges.css" rel="stylesheet" type="text/css">
    <script src="/Public/Home/js/charges.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".shop_info:eq(1)").css('display','block');
        })
    </script>

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
        <div class="guarantee_gold">
            <div class="gold_title">保证金与资费组成：</div>
            <div class="gold_cont">
                <ul class="pay_List zhao_server">
                    <li>
                        <h4>保证金</h4>
                        <?php echo ($NoticeBZJ["notice_discript"]); ?>
                        <!--第e商城经营必须交纳保证金，保证金主要用于保证商家按照第e商城的规范进行经营，并且在商家有违规行为时根据《第e商城服务协议》及相关规则规定用于向第e商城及消费者支付违约金。-->
                        <!--保证金根据店铺性质及商标状态不同，金额分为5万、10万、15万3档。-->
                    </li>
                    <li>
                        <h4>技术服务费年费</h4>
                        <?php echo ($NoticeJSFWF["notice_discript"]); ?>
                        <!--商家在第e商城经营必须交纳年费。年费金额以一级类目为参照，分为3万元或6万元两档，各一级类目对应的年费标准详见《第e商城2014年度各类目技术服务费年费一览表》。-->
                    </li>
                    <li>
                        <h4>实时划扣技术服务费</h4>
                        商家在第e商城经营需要按照其销售额（不包含运费）的一定百分比(简称“费率”)交纳技术服务费。第e商城各类目技术服务费费率标准详见《第e商城2014年度各类目技术服务费年费一览表》。
                    </li>
                </ul>
            </div>
        </div>
        <div class="gold_middle long_title">
            <h2>
                <span>保障金</span>
            </h2>
            <div class="zhuan_mai">
                <?php echo ($NoticeBZJ["notice_content"]); ?>
                <!--<ol class="bao_zheng">-->
                <!--<li>品牌旗舰店、专卖店：带有TM商标的10万元，全部为R商标的5万元；</li>-->
                <!--<li>专营店：带有TM商标的15万元，全部为R商标的10万元；</li>-->
                <!--<li>-->
                <!--特殊类目说明：-->
                <!--<p class="baozheng_Point">卖场型旗舰店，保证金为15万元；</p>-->
                <!--<p class="baozheng_Point">经营未在中国大陆申请注册商标的特殊商品（如水果、进口商品等）的专营店，保证金为15万元；</p>-->
                <!--<p class="baozheng_Point">第e商城经营大类“服务大类”及“电子票务凭证”，保证金1万元；</p>-->
                <!--<p class="baozheng_Point">第e商城经营大类“汽车及配件”下的一级类目“新车/二手车”，保证金10万元。</p>-->
                <!--</li>-->
                <!--<li>保证金不足额时，商家需要在15日内补足余额，逾期未补足的第e商城将对商家店铺进行监管，直至补足。</li>-->
                <!--</ol>-->
            </div>
        </div>
        <div class="technical_service long_middle">
            <h2>
                <span>技术服务费年费</span>
            </h2>
            <div class="nian_fei">
                <?php echo ($NoticeJSFWF["notice_content"]); ?>
                <!--<p>商家在第e商城经营必须交纳年费。年费金额以一级类目为参照，分为3万元或6万元两档，各一级类目对应的年费标准详见《第e商城2015年度各类目技术服务费年费一览表》。-->
                <!--续签商家2015年度年费须在2014年12月26日前一次性缴纳；新签商家在申请入驻获得批准时一次性缴纳2015年度的年费。</p>-->
                <!--<ol class="fan_huan nainfei_list">-->
                <!--<li>-->
                <!--年费返还：-->
                <!--<p class="fan_huan">为鼓励商家提高服务质量和壮大经营规模，第e商城将对技术服务费年费有条件地向商家返还。返还方式上参照店铺评分（“DSR”）和年销售额（不包含运费）两项指标，-->
                <!--返还的比例为50%和100%两档。具体标准为协议期间（包括期间内到期终止和未到期终止，实际经营期间未满一年的，以实际经营期间为准 ）内DSR平均不低于4.6分；且满足《第e商城2015年度-->
                <!--各类目技术服务费年费一览表》 中技术服务费年费金额及各档返还比例对应的年销售额(协议有效期跨自然年的，则非2015年的销售额不包含在年销售额内)。年费返还按照2015年内实际经营期间进行计算。-->
                <!--<br>年销售额是指：在协议有效期内，商家所有交易状态为“交易成功”的订单金额总和。该金额中不含运费，亦不包含因维权、售后等原因导致的失败交易金额。</p>-->
                <!--</li>-->
                <!--<li>-->
                <!--年费结算：-->
                <!--<p class="baozheng_Point">-->
                <!--因违规行为或资质造假被清退的不返还年费；-->
                <!--</p>-->
                <!--<p class="baozheng_Point">-->
                <!--根据协议通知对方终止协议、试运营期间被清退的，将全年年费返还均摊至自然月，按照实际经营期间来计算具体应当返还的年费；-->
                <!--</p>-->
                <!--<p class="baozheng_Point">-->
                <!--如商家与第e商城的协议有效期起始时间均在2015年内的，则入驻第一个月免当月年费，计算返年费的年销售额则从商家开店第一天开始累计；如商家与第e商城的协议有效期跨自然年的，则非2015年的销售额不包含在年销售额内；-->
                <!--<br>非2015年的销售额是：“交易成功”状态的时间点不在2015自然年度内的订单金额。</p>-->
                <!--<p class="baozheng_Point">-->
                <!--年费的返还结算在协议终止后进行。-->
                <!--</p>-->
                <!--<p class="baozheng_Point">-->
                <!--“新车/卡车”类目，技术服务年费按照商户签署的《第e商城服务协议》执行。-->
                <!--</p>-->
                <!--</li>-->
                <!--<li>跨类目入驻，就高原则，年费按最高金额的类目缴纳；但实际结算按入驻到结算日期，成交额占比最大类目对应的标准返还。</li>-->
                <!--</ol>-->
            </div>
        </div>
        <div class="service_footer fuwu_fei">
            <h2>
                <span>实时划扣技术服务费</span>
            </h2>
            <div class="fen_lei">
                <div class="fenlei_nav">
                    <h3>商品分类</h3>
                    <div class="shop_class">
                        <ul>
                            <?php if(is_array($charge_standard)): $i = 0; $__LIST__ = $charge_standard;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="" target="_self"><?php echo ($vo["notice_type_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                            <!--<li><a href="" target="_self">轮胎系列</a></li>-->
                            <!--<li><a href="" target="_self">卡车类列</a></li>-->
                            <!--<li><a href="" target="_self">润滑油</a></li>-->
                            <!--<li><a href="" target="_self">货架系列</a></li>-->
                            <!--<li><a href="" target="_self">货柜系列</a></li>-->
                            <!--<li><a href="" target="_self">升降设备</a></li>-->
                            <!--<li><a href="" target="_self">集装箱系列</a></li>-->
                            <!--<li><a href="" target="_self">其它系列</a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="fenlei_cotant">
                    <?php if(is_array($charge_standard)): $i = 0; $__LIST__ = $charge_standard;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><div class="shop_info" style="display: none">
                            <?php echo ($list["notice_content"]); ?>
                            <!--<h3>汽车及其配件类商品实时划扣技术服务费</h3>-->
                            <!--<table class="cost_table table">-->
                            <!--<tbody>-->
                            <!--<tr class="tr">-->
                            <!--<th class="left_td">一级类目</th>-->
                            <!--<th>技术服务费<br>费率</th>-->
                            <!--<th class="left_td">二级类目</th>-->
                            <!--<th>技术服务费<br>费率</th>-->
                            <!--<th class="left_td">三级类目</th>-->
                            <!--<th>技术服务费<br>费率</th>-->
                            <!--<th>技术服务费<br>费率</th>-->
                            <!--<th>年费50%<br>返还销售额标准</th>-->
                            <!--<th>年费50%<br>返还销售额标准</th>-->
                            <!--</tr>-->
                            <!--<tr>-->
                            <!--<td class="left_td">汽车及其配件/飞轮/压盘/离合器片</td>-->
                            <!--<td>5%</td>-->
                            <!--<td class="left_td" rowspan="">&nbsp;</td>-->
                            <!--<td rowspan="">&nbsp;</td>-->
                            <!--<td class="left_td">&nbsp;</td>-->
                            <!--<td>&nbsp;</td>-->
                            <!--<td>30,000</td>-->
                            <!--<td>180,000</td>-->
                            <!--<td>600,000</td>-->
                            <!--</tr>-->
                            <!--<tr class="even_tr">-->
                            <!--<td class="left_td">轮胎系列/规格/尺寸/大小</td>-->
                            <!--<td>5%</td>-->
                            <!--<td class="left_td" rowspan="">&nbsp;</td>-->
                            <!--<td rowspan="">&nbsp;</td>-->
                            <!--<td class="left_td">&nbsp;</td>-->
                            <!--<td>&nbsp;</td>-->
                            <!--<td>60,000</td>-->
                            <!--<td>360,000</td>-->
                            <!--<td>12,00,000</td>-->
                            <!--</tr>-->
                            <!--<tr>-->
                            <!--<td class="left_td">汽车及其配件/飞轮/压盘/离合器片/变速器</td>-->
                            <!--<td>5%</td>-->
                            <!--<td class="left_td" rowspan="">&nbsp;</td>-->
                            <!--<td rowspan="">&nbsp;</td>-->
                            <!--<td class="left_td">&nbsp;</td>-->
                            <!--<td>&nbsp;</td>-->
                            <!--<td>60,000</td>-->
                            <!--<td>360,000</td>-->
                            <!--<td>12,00,000</td>-->
                            <!--</tr>-->
                            <!--<tr class="even_tr">-->
                            <!--<td class="left_td">汽车及其配件/飞轮/压盘/离合器片/变速器</td>-->
                            <!--<td>5%</td>-->
                            <!--<td class="left_td" rowspan="">&nbsp;</td>-->
                            <!--<td rowspan="">&nbsp;</td>-->
                            <!--<td class="left_td">&nbsp;</td>-->
                            <!--<td>&nbsp;</td>-->
                            <!--<td>30,000</td>-->
                            <!--<td>180,000</td>-->
                            <!--<td>600,000</td>-->
                            <!--</tr>-->
                            <!--</tbody>-->
                            <!--</table>-->
                            <!--<div class="explain">-->
                            <!--<h4>说明：</h4>-->
                            <!--<ul class="explain_list">-->
                            <!--<li>涉及跨类目问题费用缴纳及返还，全部参照相对高的类目的标准。</li>-->
                            <!--<li>由于类目划分较细，二级类目仅列出与一级类目扣点或固定年费不同的类目，各一级类目下完整的二级类目列表以商品发布页面为准。</li>-->
                            <!--</ul>-->
                            <!--</div>-->
                        </div><?php endforeach; endif; else: echo "" ;endif; ?>
                    <!--<div class="shop_info" style="display:none;">-->
                    <!--<h3>汽车及其配件类商品实时划扣技术服务费</h3>-->
                    <!--<table class="cost_table table">-->
                    <!--<tbody>-->
                    <!--<tr>-->
                    <!--<th class="left_td">一级类目</th>-->
                    <!--<th>技术服务费<br>费率</th>-->
                    <!--<th class="left_td">二级类目</th>-->
                    <!--<th>技术服务费<br>费率</th>-->
                    <!--<th class="left_td">三级类目</th>-->
                    <!--<th>技术服务费<br>费率</th>-->
                    <!--<th>技术服务费<br>费率</th>-->
                    <!--<th>年费50%<br>返还销售额标准</th>-->
                    <!--<th>年费50%<br>返还销售额标准</th>-->
                    <!--</tr>-->
                    <!--<tr>-->
                    <!--<td class="left_td">轮胎系列</td>-->
                    <!--<td>5%</td>-->
                    <!--<td class="left_td" rowspan="">&nbsp;</td>-->
                    <!--<td rowspan="">&nbsp;</td>-->
                    <!--<td class="left_td">&nbsp;</td>-->
                    <!--<td>&nbsp;</td>-->
                    <!--<td>30,000</td>-->
                    <!--<td>180,000</td>-->
                    <!--<td>600,000</td>-->
                    <!--</tr>-->
                    <!--<tr class="even_tr">-->
                    <!--<td class="left_td">轮胎系列</td>-->
                    <!--<td>5%</td>-->
                    <!--<td class="left_td" rowspan="">&nbsp;</td>-->
                    <!--<td rowspan="">&nbsp;</td>-->
                    <!--<td class="left_td">&nbsp;</td>-->
                    <!--<td>&nbsp;</td>-->
                    <!--<td>60,000</td>-->
                    <!--<td>360,000</td>-->
                    <!--<td>12,00,000</td>-->
                    <!--</tr>-->
                    <!--<tr>-->
                    <!--<td class="left_td">轮胎系列</td>-->
                    <!--<td>5%</td>-->
                    <!--<td class="left_td" rowspan="">&nbsp;</td>-->
                    <!--<td rowspan="">&nbsp;</td>-->
                    <!--<td class="left_td">&nbsp;</td>-->
                    <!--<td>&nbsp;</td>-->
                    <!--<td>60,000</td>-->
                    <!--<td>360,000</td>-->
                    <!--<td>12,00,000</td>-->
                    <!--</tr>-->
                    <!--<tr class="even_tr">-->
                    <!--<td class="left_td">轮胎系列</td>-->
                    <!--<td>5%</td>-->
                    <!--<td class="left_td" rowspan="">&nbsp;</td>-->
                    <!--<td rowspan="">&nbsp;</td>-->
                    <!--<td class="left_td">&nbsp;</td>-->
                    <!--<td>&nbsp;</td>-->
                    <!--<td>30,000</td>-->
                    <!--<td>180,000</td>-->
                    <!--<td>600,000</td>-->
                    <!--</tr>-->
                    <!--</tbody>-->
                    <!--</table>-->
                    <!--<div class="explain">-->
                    <!--<h4>说明：</h4>-->
                    <!--<ul class="explain_list">-->
                    <!--<li>涉及跨类目问题费用缴纳及返还，全部参照相对高的类目的标准。</li>-->
                    <!--<li>由于类目划分较细，二级类目仅列出与一级类目扣点或固定年费不同的类目，各一级类目下完整的二级类目列表以商品发布页面为准。</li>-->
                    <!--</ul>-->
                    <!--</div>-->
                    <!--</div>-->
                    <!--<div class="shop_info" style="display:none;">-->
                    <!--<h3>汽车及其配件类商品实时划扣技术服务费</h3>-->
                    <!--<table class="cost_table table">-->
                    <!--<tbody>-->
                    <!--<tr>-->
                    <!--<th class="left_td">一级类目</th>-->
                    <!--<th>技术服务费<br>费率</th>-->
                    <!--<th class="left_td">二级类目</th>-->
                    <!--<th>技术服务费<br>费率</th>-->
                    <!--<th class="left_td">三级类目</th>-->
                    <!--<th>技术服务费<br>费率</th>-->
                    <!--<th>技术服务费<br>费率</th>-->
                    <!--<th>年费50%<br>返还销售额标准</th>-->
                    <!--<th>年费50%<br>返还销售额标准</th>-->
                    <!--</tr>-->
                    <!--<tr>-->
                    <!--<td class="left_td">卡车类列</td>-->
                    <!--<td>5%</td>-->
                    <!--<td class="left_td" rowspan="">&nbsp;</td>-->
                    <!--<td rowspan="">&nbsp;</td>-->
                    <!--<td class="left_td">&nbsp;</td>-->
                    <!--<td>&nbsp;</td>-->
                    <!--<td>30,000</td>-->
                    <!--<td>180,000</td>-->
                    <!--<td>600,000</td>-->
                    <!--</tr>-->
                    <!--<tr class="even_tr">-->
                    <!--<td class="left_td">卡车类列</td>-->
                    <!--<td>5%</td>-->
                    <!--<td class="left_td" rowspan="">&nbsp;</td>-->
                    <!--<td rowspan="">&nbsp;</td>-->
                    <!--<td class="left_td">&nbsp;</td>-->
                    <!--<td>&nbsp;</td>-->
                    <!--<td>60,000</td>-->
                    <!--<td>360,000</td>-->
                    <!--<td>12,00,000</td>-->
                    <!--</tr>-->
                    <!--<tr>-->
                    <!--<td class="left_td">卡车类列</td>-->
                    <!--<td>5%</td>-->
                    <!--<td class="left_td" rowspan="">&nbsp;</td>-->
                    <!--<td rowspan="">&nbsp;</td>-->
                    <!--<td class="left_td">&nbsp;</td>-->
                    <!--<td>&nbsp;</td>-->
                    <!--<td>60,000</td>-->
                    <!--<td>360,000</td>-->
                    <!--<td>12,00,000</td>-->
                    <!--</tr>-->
                    <!--<tr class="even_tr">-->
                    <!--<td class="left_td">卡车类列</td>-->
                    <!--<td>5%</td>-->
                    <!--<td class="left_td" rowspan="">&nbsp;</td>-->
                    <!--<td rowspan="">&nbsp;</td>-->
                    <!--<td class="left_td">&nbsp;</td>-->
                    <!--<td>&nbsp;</td>-->
                    <!--<td>30,000</td>-->
                    <!--<td>180,000</td>-->
                    <!--<td>600,000</td>-->
                    <!--</tr>-->
                    <!--</tbody>-->
                    <!--</table>-->
                    <!--<div class="explain">-->
                    <!--<h4>说明：</h4>-->
                    <!--<ul class="explain_list">-->
                    <!--<li>涉及跨类目问题费用缴纳及返还，全部参照相对高的类目的标准。</li>-->
                    <!--<li>由于类目划分较细，二级类目仅列出与一级类目扣点或固定年费不同的类目，各一级类目下完整的二级类目列表以商品发布页面为准。</li>-->
                    <!--</ul>-->
                    <!--</div>-->
                    <!--</div>-->
                    <!--<div class="shop_info" style="display:none;">-->
                    <!--<h3>汽车及其配件类商品实时划扣技术服务费</h3>-->
                    <!--<table class="cost_table table">-->
                    <!--<tbody>-->
                    <!--<tr>-->
                    <!--<th class="left_td">一级类目</th>-->
                    <!--<th>技术服务费<br>费率</th>-->
                    <!--<th class="left_td">二级类目</th>-->
                    <!--<th>技术服务费<br>费率</th>-->
                    <!--<th class="left_td">三级类目</th>-->
                    <!--<th>技术服务费<br>费率</th>-->
                    <!--<th>技术服务费<br>费率</th>-->
                    <!--<th>年费50%<br>返还销售额标准</th>-->
                    <!--<th>年费50%<br>返还销售额标准</th>-->
                    <!--</tr>-->
                    <!--<tr>-->
                    <!--<td class="left_td">润滑油</td>-->
                    <!--<td>5%</td>-->
                    <!--<td class="left_td" rowspan="">&nbsp;</td>-->
                    <!--<td rowspan="">&nbsp;</td>-->
                    <!--<td class="left_td">&nbsp;</td>-->
                    <!--<td>&nbsp;</td>-->
                    <!--<td>30,000</td>-->
                    <!--<td>180,000</td>-->
                    <!--<td>600,000</td>-->
                    <!--</tr>-->
                    <!--<tr class="even_tr">-->
                    <!--<td class="left_td">润滑油</td>-->
                    <!--<td>5%</td>-->
                    <!--<td class="left_td" rowspan="">&nbsp;</td>-->
                    <!--<td rowspan="">&nbsp;</td>-->
                    <!--<td class="left_td">&nbsp;</td>-->
                    <!--<td>&nbsp;</td>-->
                    <!--<td>60,000</td>-->
                    <!--<td>360,000</td>-->
                    <!--<td>12,00,000</td>-->
                    <!--</tr>-->
                    <!--<tr>-->
                    <!--<td class="left_td">润滑油</td>-->
                    <!--<td>5%</td>-->
                    <!--<td class="left_td" rowspan="">&nbsp;</td>-->
                    <!--<td rowspan="">&nbsp;</td>-->
                    <!--<td class="left_td">&nbsp;</td>-->
                    <!--<td>&nbsp;</td>-->
                    <!--<td>60,000</td>-->
                    <!--<td>360,000</td>-->
                    <!--<td>12,00,000</td>-->
                    <!--</tr>-->
                    <!--<tr class="even_tr">-->
                    <!--<td class="left_td">润滑油</td>-->
                    <!--<td>5%</td>-->
                    <!--<td class="left_td" rowspan="">&nbsp;</td>-->
                    <!--<td rowspan="">&nbsp;</td>-->
                    <!--<td class="left_td">&nbsp;</td>-->
                    <!--<td>&nbsp;</td>-->
                    <!--<td>30,000</td>-->
                    <!--<td>180,000</td>-->
                    <!--<td>600,000</td>-->
                    <!--</tr>-->
                    <!--</tbody>-->
                    <!--</table>-->
                    <!--<div class="explain">-->
                    <!--<h4>说明：</h4>-->
                    <!--<ul class="explain_list">-->
                    <!--<li>涉及跨类目问题费用缴纳及返还，全部参照相对高的类目的标准。</li>-->
                    <!--<li>由于类目划分较细，二级类目仅列出与一级类目扣点或固定年费不同的类目，各一级类目下完整的二级类目列表以商品发布页面为准。</li>-->
                    <!--</ul>-->
                    <!--</div>-->
                    <!--</div>-->
                    <!--<div class="shop_info" style="display:none;">-->
                    <!--<h3>汽车及其配件类商品实时划扣技术服务费</h3>-->
                    <!--<table class="cost_table table">-->
                    <!--<tbody>-->
                    <!--<tr>-->
                    <!--<th class="left_td">一级类目</th>-->
                    <!--<th>技术服务费<br>费率</th>-->
                    <!--<th class="left_td">二级类目</th>-->
                    <!--<th>技术服务费<br>费率</th>-->
                    <!--<th class="left_td">三级类目</th>-->
                    <!--<th>技术服务费<br>费率</th>-->
                    <!--<th>技术服务费<br>费率</th>-->
                    <!--<th>年费50%<br>返还销售额标准</th>-->
                    <!--<th>年费50%<br>返还销售额标准</th>-->
                    <!--</tr>-->
                    <!--<tr>-->
                    <!--<td class="left_td">货架系列</td>-->
                    <!--<td>5%</td>-->
                    <!--<td class="left_td" rowspan="">&nbsp;</td>-->
                    <!--<td rowspan="">&nbsp;</td>-->
                    <!--<td class="left_td">&nbsp;</td>-->
                    <!--<td>&nbsp;</td>-->
                    <!--<td>30,000</td>-->
                    <!--<td>180,000</td>-->
                    <!--<td>600,000</td>-->
                    <!--</tr>-->
                    <!--<tr class="even_tr">-->
                    <!--<td class="left_td">货架系列</td>-->
                    <!--<td>5%</td>-->
                    <!--<td class="left_td" rowspan="">&nbsp;</td>-->
                    <!--<td rowspan="">&nbsp;</td>-->
                    <!--<td class="left_td">&nbsp;</td>-->
                    <!--<td>&nbsp;</td>-->
                    <!--<td>60,000</td>-->
                    <!--<td>360,000</td>-->
                    <!--<td>12,00,000</td>-->
                    <!--</tr>-->
                    <!--<tr>-->
                    <!--<td class="left_td">货架系列</td>-->
                    <!--<td>5%</td>-->
                    <!--<td class="left_td" rowspan="">&nbsp;</td>-->
                    <!--<td rowspan="">&nbsp;</td>-->
                    <!--<td class="left_td">&nbsp;</td>-->
                    <!--<td>&nbsp;</td>-->
                    <!--<td>60,000</td>-->
                    <!--<td>360,000</td>-->
                    <!--<td>12,00,000</td>-->
                    <!--</tr>-->
                    <!--<tr class="even_tr">-->
                    <!--<td class="left_td">货架系列</td>-->
                    <!--<td>5%</td>-->
                    <!--<td class="left_td" rowspan="">&nbsp;</td>-->
                    <!--<td rowspan="">&nbsp;</td>-->
                    <!--<td class="left_td">&nbsp;</td>-->
                    <!--<td>&nbsp;</td>-->
                    <!--<td>30,000</td>-->
                    <!--<td>180,000</td>-->
                    <!--<td>600,000</td>-->
                    <!--</tr>-->
                    <!--</tbody>-->
                    <!--</table>-->
                    <!--<div class="explain">-->
                    <!--<h4>说明：</h4>-->
                    <!--<ul class="explain_list">-->
                    <!--<li>涉及跨类目问题费用缴纳及返还，全部参照相对高的类目的标准。</li>-->
                    <!--<li>由于类目划分较细，二级类目仅列出与一级类目扣点或固定年费不同的类目，各一级类目下完整的二级类目列表以商品发布页面为准。</li>-->
                    <!--</ul>-->
                    <!--</div>-->
                    <!--</div>-->
                    <!--<div class="shop_info" style="display:none;">-->
                    <!--<h3>汽车及其配件类商品实时划扣技术服务费</h3>-->
                    <!--<table class="cost_table table">-->
                    <!--<tbody>-->
                    <!--<tr>-->
                    <!--<th class="left_td">一级类目</th>-->
                    <!--<th>技术服务费<br>费率</th>-->
                    <!--<th class="left_td">二级类目</th>-->
                    <!--<th>技术服务费<br>费率</th>-->
                    <!--<th class="left_td">三级类目</th>-->
                    <!--<th>技术服务费<br>费率</th>-->
                    <!--<th>技术服务费<br>费率</th>-->
                    <!--<th>年费50%<br>返还销售额标准</th>-->
                    <!--<th>年费50%<br>返还销售额标准</th>-->
                    <!--</tr>-->
                    <!--<tr>-->
                    <!--<td class="left_td">货柜系列</td>-->
                    <!--<td>5%</td>-->
                    <!--<td class="left_td" rowspan="">&nbsp;</td>-->
                    <!--<td rowspan="">&nbsp;</td>-->
                    <!--<td class="left_td">&nbsp;</td>-->
                    <!--<td>&nbsp;</td>-->
                    <!--<td>30,000</td>-->
                    <!--<td>180,000</td>-->
                    <!--<td>600,000</td>-->
                    <!--</tr>-->
                    <!--<tr class="even_tr">-->
                    <!--<td class="left_td">货柜系列</td>-->
                    <!--<td>5%</td>-->
                    <!--<td class="left_td" rowspan="">&nbsp;</td>-->
                    <!--<td rowspan="">&nbsp;</td>-->
                    <!--<td class="left_td">&nbsp;</td>-->
                    <!--<td>&nbsp;</td>-->
                    <!--<td>60,000</td>-->
                    <!--<td>360,000</td>-->
                    <!--<td>12,00,000</td>-->
                    <!--</tr>-->
                    <!--<tr>-->
                    <!--<td class="left_td">货柜系列</td>-->
                    <!--<td>5%</td>-->
                    <!--<td class="left_td" rowspan="">&nbsp;</td>-->
                    <!--<td rowspan="">&nbsp;</td>-->
                    <!--<td class="left_td">&nbsp;</td>-->
                    <!--<td>&nbsp;</td>-->
                    <!--<td>60,000</td>-->
                    <!--<td>360,000</td>-->
                    <!--<td>12,00,000</td>-->
                    <!--</tr>-->
                    <!--<tr class="even_tr">-->
                    <!--<td class="left_td">货柜系列</td>-->
                    <!--<td>5%</td>-->
                    <!--<td class="left_td" rowspan="">&nbsp;</td>-->
                    <!--<td rowspan="">&nbsp;</td>-->
                    <!--<td class="left_td">&nbsp;</td>-->
                    <!--<td>&nbsp;</td>-->
                    <!--<td>30,000</td>-->
                    <!--<td>180,000</td>-->
                    <!--<td>600,000</td>-->
                    <!--</tr>-->
                    <!--</tbody>-->
                    <!--</table>-->
                    <!--<div class="explain">-->
                    <!--<h4>说明：</h4>-->
                    <!--<ul class="explain_list">-->
                    <!--<li>涉及跨类目问题费用缴纳及返还，全部参照相对高的类目的标准。</li>-->
                    <!--<li>由于类目划分较细，二级类目仅列出与一级类目扣点或固定年费不同的类目，各一级类目下完整的二级类目列表以商品发布页面为准。</li>-->
                    <!--</ul>-->
                    <!--</div>-->
                    <!--</div>-->
                    <!--<div class="shop_info" style="display:none;">-->
                    <!--<h3>汽车及其配件类商品实时划扣技术服务费</h3>-->
                    <!--<table class="cost_table table">-->
                    <!--<tbody>-->
                    <!--<tr>-->
                    <!--<th class="left_td">一级类目</th>-->
                    <!--<th>技术服务费<br>费率</th>-->
                    <!--<th class="left_td">二级类目</th>-->
                    <!--<th>技术服务费<br>费率</th>-->
                    <!--<th class="left_td">三级类目</th>-->
                    <!--<th>技术服务费<br>费率</th>-->
                    <!--<th>技术服务费<br>费率</th>-->
                    <!--<th>年费50%<br>返还销售额标准</th>-->
                    <!--<th>年费50%<br>返还销售额标准</th>-->
                    <!--</tr>-->
                    <!--<tr>-->
                    <!--<td class="left_td">升降设备</td>-->
                    <!--<td>5%</td>-->
                    <!--<td class="left_td" rowspan="">&nbsp;</td>-->
                    <!--<td rowspan="">&nbsp;</td>-->
                    <!--<td class="left_td">&nbsp;</td>-->
                    <!--<td>&nbsp;</td>-->
                    <!--<td>30,000</td>-->
                    <!--<td>180,000</td>-->
                    <!--<td>600,000</td>-->
                    <!--</tr>-->
                    <!--<tr class="even_tr">-->
                    <!--<td class="left_td">升降设备</td>-->
                    <!--<td>5%</td>-->
                    <!--<td class="left_td" rowspan="">&nbsp;</td>-->
                    <!--<td rowspan="">&nbsp;</td>-->
                    <!--<td class="left_td">&nbsp;</td>-->
                    <!--<td>&nbsp;</td>-->
                    <!--<td>60,000</td>-->
                    <!--<td>360,000</td>-->
                    <!--<td>12,00,000</td>-->
                    <!--</tr>-->
                    <!--<tr>-->
                    <!--<td class="left_td">升降设备</td>-->
                    <!--<td>5%</td>-->
                    <!--<td class="left_td" rowspan="">&nbsp;</td>-->
                    <!--<td rowspan="">&nbsp;</td>-->
                    <!--<td class="left_td">&nbsp;</td>-->
                    <!--<td>&nbsp;</td>-->
                    <!--<td>60,000</td>-->
                    <!--<td>360,000</td>-->
                    <!--<td>12,00,000</td>-->
                    <!--</tr>-->
                    <!--<tr class="even_tr">-->
                    <!--<td class="left_td">升降设备</td>-->
                    <!--<td>5%</td>-->
                    <!--<td class="left_td" rowspan="">&nbsp;</td>-->
                    <!--<td rowspan="">&nbsp;</td>-->
                    <!--<td class="left_td">&nbsp;</td>-->
                    <!--<td>&nbsp;</td>-->
                    <!--<td>30,000</td>-->
                    <!--<td>180,000</td>-->
                    <!--<td>600,000</td>-->
                    <!--</tr>-->
                    <!--</tbody>-->
                    <!--</table>-->
                    <!--<div class="explain">-->
                    <!--<h4>说明：</h4>-->
                    <!--<ul class="explain_list">-->
                    <!--<li>涉及跨类目问题费用缴纳及返还，全部参照相对高的类目的标准。</li>-->
                    <!--<li>由于类目划分较细，二级类目仅列出与一级类目扣点或固定年费不同的类目，各一级类目下完整的二级类目列表以商品发布页面为准。</li>-->
                    <!--</ul>-->
                    <!--</div>-->
                    <!--</div>-->
                    <!--<div class="shop_info" style="display:none;">-->
                    <!--<h3>汽车及其配件类商品实时划扣技术服务费</h3>-->
                    <!--<table class="cost_table table">-->
                    <!--<tbody>-->
                    <!--<tr>-->
                    <!--<th class="left_td">一级类目</th>-->
                    <!--<th>技术服务费<br>费率</th>-->
                    <!--<th class="left_td">二级类目</th>-->
                    <!--<th>技术服务费<br>费率</th>-->
                    <!--<th class="left_td">三级类目</th>-->
                    <!--<th>技术服务费<br>费率</th>-->
                    <!--<th>技术服务费<br>费率</th>-->
                    <!--<th>年费50%<br>返还销售额标准</th>-->
                    <!--<th>年费50%<br>返还销售额标准</th>-->
                    <!--</tr>-->
                    <!--<tr>-->
                    <!--<td class="left_td">集装箱系列</td>-->
                    <!--<td>5%</td>-->
                    <!--<td class="left_td" rowspan="">&nbsp;</td>-->
                    <!--<td rowspan="">&nbsp;</td>-->
                    <!--<td class="left_td">&nbsp;</td>-->
                    <!--<td>&nbsp;</td>-->
                    <!--<td>30,000</td>-->
                    <!--<td>180,000</td>-->
                    <!--<td>600,000</td>-->
                    <!--</tr>-->
                    <!--<tr class="even_tr">-->
                    <!--<td class="left_td">集装箱系列</td>-->
                    <!--<td>5%</td>-->
                    <!--<td class="left_td" rowspan="">&nbsp;</td>-->
                    <!--<td rowspan="">&nbsp;</td>-->
                    <!--<td class="left_td">&nbsp;</td>-->
                    <!--<td>&nbsp;</td>-->
                    <!--<td>60,000</td>-->
                    <!--<td>360,000</td>-->
                    <!--<td>12,00,000</td>-->
                    <!--</tr>-->
                    <!--<tr>-->
                    <!--<td class="left_td">集装箱系列</td>-->
                    <!--<td>5%</td>-->
                    <!--<td class="left_td" rowspan="">&nbsp;</td>-->
                    <!--<td rowspan="">&nbsp;</td>-->
                    <!--<td class="left_td">&nbsp;</td>-->
                    <!--<td>&nbsp;</td>-->
                    <!--<td>60,000</td>-->
                    <!--<td>360,000</td>-->
                    <!--<td>12,00,000</td>-->
                    <!--</tr>-->
                    <!--<tr class="even_tr">-->
                    <!--<td class="left_td">集装箱系列</td>-->
                    <!--<td>5%</td>-->
                    <!--<td class="left_td" rowspan="">&nbsp;</td>-->
                    <!--<td rowspan="">&nbsp;</td>-->
                    <!--<td class="left_td">&nbsp;</td>-->
                    <!--<td>&nbsp;</td>-->
                    <!--<td>30,000</td>-->
                    <!--<td>180,000</td>-->
                    <!--<td>600,000</td>-->
                    <!--</tr>-->
                    <!--</tbody>-->
                    <!--</table>-->
                    <!--<div class="explain">-->
                    <!--<h4>说明：</h4>-->
                    <!--<ul class="explain_list">-->
                    <!--<li>涉及跨类目问题费用缴纳及返还，全部参照相对高的类目的标准。</li>-->
                    <!--<li>由于类目划分较细，二级类目仅列出与一级类目扣点或固定年费不同的类目，各一级类目下完整的二级类目列表以商品发布页面为准。</li>-->
                    <!--</ul>-->
                    <!--</div>-->
                    <!--</div>-->
                    <!--<div class="shop_info" style="display:none;">-->
                    <!--<h3>汽车及其配件类商品实时划扣技术服务费</h3>-->
                    <!--<table class="cost_table table">-->
                    <!--<tbody>-->
                    <!--<tr>-->
                    <!--<th class="left_td">一级类目</th>-->
                    <!--<th>技术服务费<br>费率</th>-->
                    <!--<th class="left_td">二级类目</th>-->
                    <!--<th>技术服务费<br>费率</th>-->
                    <!--<th class="left_td">三级类目</th>-->
                    <!--<th>技术服务费<br>费率</th>-->
                    <!--<th>技术服务费<br>费率</th>-->
                    <!--<th>年费50%<br>返还销售额标准</th>-->
                    <!--<th>年费50%<br>返还销售额标准</th>-->
                    <!--</tr>-->
                    <!--<tr>-->
                    <!--<td class="left_td">其它系列</td>-->
                    <!--<td>5%</td>-->
                    <!--<td class="left_td" rowspan="">&nbsp;</td>-->
                    <!--<td rowspan="">&nbsp;</td>-->
                    <!--<td class="left_td">&nbsp;</td>-->
                    <!--<td>&nbsp;</td>-->
                    <!--<td>30,000</td>-->
                    <!--<td>180,000</td>-->
                    <!--<td>600,000</td>-->
                    <!--</tr>-->
                    <!--<tr class="even_tr">-->
                    <!--<td class="left_td">其它系列</td>-->
                    <!--<td>5%</td>-->
                    <!--<td class="left_td" rowspan="">&nbsp;</td>-->
                    <!--<td rowspan="">&nbsp;</td>-->
                    <!--<td class="left_td">&nbsp;</td>-->
                    <!--<td>&nbsp;</td>-->
                    <!--<td>60,000</td>-->
                    <!--<td>360,000</td>-->
                    <!--<td>12,00,000</td>-->
                    <!--</tr>-->
                    <!--<tr>-->
                    <!--<td class="left_td">其它系列</td>-->
                    <!--<td>5%</td>-->
                    <!--<td class="left_td" rowspan="">&nbsp;</td>-->
                    <!--<td rowspan="">&nbsp;</td>-->
                    <!--<td class="left_td">&nbsp;</td>-->
                    <!--<td>&nbsp;</td>-->
                    <!--<td>60,000</td>-->
                    <!--<td>360,000</td>-->
                    <!--<td>12,00,000</td>-->
                    <!--</tr>-->
                    <!--<tr class="even_tr">-->
                    <!--<td class="left_td">其它系列</td>-->
                    <!--<td>5%</td>-->
                    <!--<td class="left_td" rowspan="">&nbsp;</td>-->
                    <!--<td rowspan="">&nbsp;</td>-->
                    <!--<td class="left_td">&nbsp;</td>-->
                    <!--<td>&nbsp;</td>-->
                    <!--<td>30,000</td>-->
                    <!--<td>180,000</td>-->
                    <!--<td>600,000</td>-->
                    <!--</tr>-->
                    <!--</tbody>-->
                    <!--</table>-->
                    <!--<div class="explain">-->
                    <!--<h4>说明：</h4>-->
                    <!--<ul class="explain_list">-->
                    <!--<li>涉及跨类目问题费用缴纳及返还，全部参照相对高的类目的标准。</li>-->
                    <!--<li>由于类目划分较细，二级类目仅列出与一级类目扣点或固定年费不同的类目，各一级类目下完整的二级类目列表以商品发布页面为准。</li>-->
                    <!--</ul>-->
                    <!--</div>-->
                    <!--</div>-->
                </div>
                <div class="clearfix"></div>
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