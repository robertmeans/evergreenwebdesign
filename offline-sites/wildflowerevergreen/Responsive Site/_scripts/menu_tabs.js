
$(window).load(function(){
$("div[id^=item]").click(function(){
   var reference2open = $(this).attr("id");
   //get the data-rel attribute associated
   $("div[data-rel='"+reference2open+"']").slideToggle();
   $("span",this).toggleClass('minus');
});

$("#all").click(function(){
    if($(this).hasClass('close')){
       $("div[data-rel^=item]").slideUp();
       $("div[id^=item] span").removeClass('minus');
       $("#all").removeClass('close');
        $("#all").html('toggle all menu items');
    }else{
    //open and close them all by clicking
    $("div[data-rel^=item]").each(function(){
        if($(this).is(':hidden')){
            $(this).slideDown();
            $("div[id^=item] span").addClass('minus');
            $("#all").html('toggle all menu items');
        }
    });
    //change the button to close
    $("#all").addClass('close');
    }
    //$("div[id^=item] span").toggleClass('minus');
});

$('.close').click(function(){

    });
});

