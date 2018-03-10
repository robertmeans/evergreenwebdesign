
$(document).ready(function(){
$("div[id^=item]").click(function(){
   var reference2open = $(this).attr("id");
   //get the data-rel attribute associated
   $("div[data-rel='"+reference2open+"']").slideToggle();
   $("span",this).toggleClass('minus');
});

$("#all_mobile").click(function(){
    if($(this).hasClass('close')){
       $("div[data-rel^=item]").slideUp();
       $("div[id^=item] span").removeClass('minus');
       $("#all_mobile").removeClass('close');
        $("#all_mobile").html('OPEN all menu items');
    }else{
    //open and close them all by clicking
    $("div[data-rel^=item]").each(function(){
        if($(this).is(':hidden')){
            $(this).slideDown();
            $("div[id^=item] span").addClass('minus');
            $("#all_mobile").html('CLOSE all menu items');
        }
    });
    //change the button to close
    $("#all_mobile").addClass('close');
    }
    //$("div[id^=item] span").toggleClass('minus');
});

$('.close').click(function(){

    });
});