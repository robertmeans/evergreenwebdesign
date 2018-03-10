/* JavaScript Document */

var windowSize = '';
var windowWidth = 0;
var actualSize = 0;

var isIE = false;

$(document).ready(function(){
	
	if (!$.support.leadingWhitespace) { isIE = true }
	
	//alert('this is working');
	checkBrowserSize();
	setInterval('checkBrowserSize()',100);
	loadHero();
	
	$('a.mobile_menu').on('click',function(){
		var navHeight = $('nav').height();
		var newNavHeight = $('nav div').height();
		
		if(navHeight == 0){
			$('nav').animate({'height':newNavHeight+'px'},500);
			$(this).addClass('selected');
		} else {
			$('nav').animate({'height':'0px'},500);
			$(this).removeClass('selected');
		}
	});
	
});

function checkBrowserSize(){
	
	if(isIE){
		windowWidth = $('body').width() + 33;
		} else {
			windowWidth = window.outerWidth;
			}
	
	var contentWidth = $('body').width();
	var sizeDiff = windowWidth - contentWidth;
	actualSize = windowWidth - sizeDiff;
	
	if(actualSize > 640){ newWindowSize = 'large'; }
	if(actualSize <= 640){ newWindowSize = 'small'; }
	
	//$('h1').html(windowWidth+' ('+contentWidth+'+'+sizeDiff+')'+' is '+newWindowSize);
	
	if(windowSize != newWindowSize){
		windowSize = newWindowSize;
		loadHero();
		} 
		
}

function loadHero(){
	
	if(windowSize == 'large') {
		$('nav').css('height','auto');
		$('#homepage').load('_content/homepage_large.htm');
		$('#menu').load('_content/menu_large.php');
		$('#sushi_menu').load('_content/sushi_menu_large.php');



	}
	if(windowSize == 'small') {
		if(actualSize <= 640){
			
			if(isIE){
				$('nav').css('height','auto');
				} else {
					$('nav').css('height','0px');
					}	
		}
		$('#homepage').load('_content/homepage_small.htm');
		$('#menu').load('_content/menu_mobile.php');
		$('#sushi_menu').load('_content/sushi_menu_mobile.php');




		//$('a.mobile_menu').removeClass('selected');
	}
		
}

