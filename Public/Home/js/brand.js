// JavaScript Document
$(document).ready(function(){
	 $(".brand_list li:eq(0)").find('b').attr('class','icon11');
	 $(".brand_list li:eq(0)").addClass("brand_active")	
	 $(".nav_ul li:eq(1)").addClass("cur")
	 $(".box_cont ul:eq(0)").show();
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
					scrollTop: 0
				},
				1000);
				return false;
				});
					
	  $(".shop_wrap").hover(
			function(){
				 num=$(this).index();
					$(".shop_wrap").removeClass("rz_hover")
					$(this).addClass("rz_hover")
				},function(){
					$(".shop_wrap").removeClass("rz_hover")})	
	  $(".brand_list li").click(
			function(){
			var another=$(this).siblings();
			num=$(this).index();
		    another.each(function(){
				var thisindex=$(this).index()+1;
				$(this).find('b').attr('class','icon'+thisindex);
			})
			 $(this).find('b').attr('class','icon'+(num+1)+''+(num+1));
			 $(".box_cont ul").hide();
			 $(".box_cont ul:eq("+num+")").show();
			 $(".brand_list li").removeClass("brand_active")
			 $(this).addClass("brand_active"),function(){
				  $(this).removeClass("brand_active")}
				 })
			   
});
