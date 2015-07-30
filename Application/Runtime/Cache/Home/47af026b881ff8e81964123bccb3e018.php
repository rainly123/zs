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
	
    <link href="/Public/Home/css/normal.css" rel="stylesheet" type="text/css">
    <script src="/Public/Home/js/normal.js"></script>
    <script type="text/javascript">
        $(function () {
           $("a[name='notice']").click(function () {
               var val=$(this).attr('data');
               var html='';
               $.ajax({
                   type:'post',
                   url:"<?php echo U('Normal/getNoticeAjax');?>",
                   data:{'val':val},
                   dataType:'json',
                   success: function (data) {
                       if(data==null)
                       {

                       }
                       else
                       {
                           html=data.sc_content
                       }

//                       alert()
                       $(".fenlei_top").empty();
                       $(".fenlei_top").append(html)
//                         alert(data.sc_content);
                   }
               })
               return false;
           })

        })
        var myMenu;
        window.onload = function() {
            myMenu = new SDMenu("my_menu");
            myMenu.init();
        };
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
        
        
    <div class="main_content">
        <div class="xu_zhi">
            <h2>
                <span>入住须知</span>
                <a href="#floor2" class="gray_link">店铺类型介绍</a>
                <a href="#floor3" class="gray_link">入驻所需材料</a>
            </h2>
            <div class="xuzhi_cont">
                <?php echo ($nomal_notice["notice_content"]); ?>
                <!--<ol class="xuzhi_List hang_gao">-->
                <!--<li>第e商城暂未授权任何机构进行代理招商服务，入驻申请流程及相关的收费说明均以官方招商页面为准。</li>-->
                <!--<li>第e商城有权根据包括但不仅限于品牌需求、公司经营状况、服务水平等其他因素退回客户申请；同时第e商城有权在申请入驻及后续经营阶段要求客户提供其他资质；第e商城将结合各行业发展动态、国家相关规定及消费者购买需求，不定期更新招商标准。</li>-->
                <!--<li>请务必确保您申请入驻及后续经营阶段提供的相关资质的真实性（若您提供的相关资质为第三方提供，如商标注册证、授权书等，请务必先行核实文件的真实有效性），一旦发现虚假资质，您的公司将被列入非诚信客户名单，第e商城将不再与您进行合作。</li>-->
                <!--<li>第e商城暂不接受个体工商户的入驻申请，也不接受非中国大陆企业的入驻申请。</li>-->
                <!--<li>第e商城暂不接受未取得国家商标总局颁发的商标注册证或商标受理通知书的品牌开店申请（部分类目的进口商品除外），也不接受纯图形类商标的入驻申请。</li>-->
                <!--</ol>-->
            </div>
        </div>
        <div class="shop_production">
            <a name="floor2"></a>
            <h2>
                <span>店铺类型介绍</span>
            </h2>
            <div class="shop_type">
                <div class="type_first" style="border-left:none;">
                    <h3 class="shoptype_hd qj">旗舰店</h3>
                    <?php echo ($BrandQJ["notice_content"]); ?>
                </div>
                <div class="type_first">
                    <h3 class="shoptype_hd zm">专卖店</h3>
                    <?php echo ($BrandZM["notice_content"]); ?>

                </div>
                <div class="type_first">
                    <h3 class="shoptype_hd zy">专营店</h3>
                    <?php echo ($BrandZY["notice_content"]); ?>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="cai_liao">
            <a name="floor3"></a>
            <h2>
                <i>入驻所需材料</i>
            </h2>
            <div class="cailiao_cont">
                <div class="dian_pu">
                    <div id="my_menu" class="sdmenu">
                        <?php if(is_array($science)): $i = 0; $__LIST__ = $science;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$science_list): $mod = ($i % 2 );++$i; if(is_array($science_list)): $i = 0; $__LIST__ = $science_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div>
                                    <?php if($vo["attr_pid"] == 0): ?><span><?php echo ($vo["attr_name"]); ?></span>
                                        <?php else: ?>
                                        <a name="notice" href="#" data="<?php echo ($vo["attr_value"]); ?>"><?php echo ($vo["attr_name"]); ?></a>
                                        <!--<a href="#">专营店</a>--><?php endif; ?>
                                </div><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>

                    </div>
                </div>
                <div class="dianpu_catant">
                    <div class="fenlei_top">
                        <?php echo ($charge_notice["sc_content"]); ?>
                        <!--<h3>旗舰店店铺资质</h3>-->
                        <!--<ol class="shop_fenlei">-->
                            <!--<li>企业营业执照副本复印件（根据2014年10月1日生效的《企业经营异常名录管理暂行办法》，需确保未在企业经营异常名录中且所售商品属于经营范围内）</li>-->
                            <!--<li>企业税务登记证复印件（国税、地税均可）</li>-->
                            <!--<li>组织机构代码证复印件</li>-->
                            <!--<li>银行开户许可证复印件</li>-->
                            <!--<li>法定代表人身份证正反面复印件</li>-->
                            <!--<li>店铺负责人身份证正反面复印件</li>-->
                            <!--<li>由国家商标总局颁发的商标注册证或商标注册申请受理通知书复印件（若办理过变更、转让、续展，请一并提供商标总局颁发的变更、转让、续展证明或受理通知书）</li>-->
                            <!--<li>商家向支付宝公司出具的授权书</li>-->
                        <!--</ol>-->
                        <!--<ul style="padding-bottom:10px;">-->
                            <!--<li>* 若由权利人授权开设旗舰店，需提供独占授权书（如果商标权人为自然人，则需同时提供其亲笔签名的身份证复印件）。</li>-->
                            <!--<li>若商标权人为境内企业或个人，请下载中文版独占授权书。若商标权人为境外企业或个人，可选择下载中文版或英文版独占授权书。（如果商标权人为境内自然人，则需同时提供其亲笔签名的身份证复印件。如果商标权人为境外自然人，则需同时提供其亲笔签名的护照复印件）。</li>-->
                            <!--<li>* 若经营出售多个自有品牌的旗舰店，需提供品牌属于同一实际控制人的证明材料，此类店铺主动招商。</li>-->
                            <!--<li>* 若申请卖场型旗舰店，需提供服务类商标注册证或商标注册申请受理通知书，此类店铺主动招商。</li>-->
                        <!--</ul>-->
                        <!--<p><b>行业资质要求：请根据您经营的商品查看下方左侧对应类目下所需的行业资质要求</b></p>-->
                    </div>
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