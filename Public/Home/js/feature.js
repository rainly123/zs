// JavaScript Document
$(document).ready(function(){
	 $(".nav_ul li:eq(4)").addClass("cur")
	 $(".shop_class ul li:eq(0)").addClass("shop_active")
	/*这是导航nav*/
    $(".nav_ul li").click(
					function(){ 
				    num=$(this).index();
					$(".nav_ul li").removeClass("cur")
					$(this).addClass("cur")
					})
					
		/*以上是导航nav*/	
		/*下面是回顶部	*/	
	 $("#return_top").click(function(){
				$('body,html').animate({
					scrollTop:0
				},
				1000);
				return false;
				});

});