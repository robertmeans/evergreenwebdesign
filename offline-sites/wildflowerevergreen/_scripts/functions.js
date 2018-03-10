// remap jQuery to $
(function($){})(window.jQuery);
/* trigger when page is ready */
$(document).ready(function (){
	initialize();
});

// --------------------------------------------  stick mobile nav to btm across different devices
function initialize() {
	// Click on nav to load external content through AJAX
	// whichmobile();

	$(document).scroll(function() {
		scrollfix();
	});

}

function scrollfix() {
	ismobile=whichmobile();
	if ((ismobile=='ipad')||(ismobile=='iphone')||(ismobile=='android 2')) {
		$('nav.mobile_menu').css('top',(window.pageYOffset + window.innerHeight-$('nav.mobile_menu').height()) + 'px'); // scroll the navigation
	}
}

function whichmobile() {
	var useragentstring=navigator.userAgent.toLowerCase();
	var mobilelist=new Array("iphone os 5","ipad; cpu os 5","iphone","ipad","android 2","android","blackberry","palmos");
	for (var device in mobilelist) {	
		if (useragentstring.indexOf(mobilelist[device])>=0) {
			return mobilelist[device];
			break;
		}
	}	
}

// --------------------------------------------  menu expand/collapse
$(document).ready(function(){
$("div[id^=item]").click(function(){
   var reference2open = $(this).attr("id");
   //get the data-rel attribute associated
   $("div[data-rel='"+reference2open+"']").slideToggle();
   $("span",this).toggleClass('minus');
});

$(".all").click(function(){
    if($(this).hasClass('close')){
       $("div[data-rel^=item]").slideUp();
       $("div[id^=item] span").removeClass('minus');
       $(".all").removeClass('close');
        $(".all").html('<i class="fa fa-folder-open-o"></i><br>OPEN menu');
    }else{
    //open and close them all by clicking
    $("div[data-rel^=item]").each(function(){
        if($(this).is(':hidden')){
            $(this).slideDown();
            $("div[id^=item] span").addClass('minus');
            $(".all").html('<i class="fa fa-folder-o"></i><br>CLOSE menu');
        }
    });
    //change the button to close
    $(".all").addClass('close');
    }
    //$("div[id^=item] span").toggleClass('minus');
});

$('.close').click(function(){

    });
});