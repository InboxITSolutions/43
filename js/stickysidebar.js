 $(document).ready(function() {
	var navOffset = jQuery(".sidebar-nav").offset().top;
		jQuery(window).scroll(function(){
         var scrollPos= jQuery(window).scrollTop();
            /*alert(scrollPos);*/
		if(scrollPos>navOffset){
             jQuery(".sidebar-nav").addClass("fixed");
         }
         else{
             jQuery(".sidebar-nav").removeClass("fixed");
         }
     });
    });