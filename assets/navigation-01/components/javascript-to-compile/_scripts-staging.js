// start mobile navigation -----------------------------------------
/* Set the width of the side navigation to 300px */
function openNav() {
    // document.getElementById("mySidenav").style.width = "300px";
    var e = document.getElementById("mySidenav");
    if (e.style.width == '300px')
    {
        e.style.width = '0px';
    }
    else 
    {
        e.style.width = '300px';
    }
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

// watch for window resize and modify width accordingly
$(window).bind("resize", function () {
    console.log($(this).width())
    if ($(this).width() > 680) {
        document.getElementById("mySidenav").style.width = "100%";
    } else {
        document.getElementById("mySidenav").style.width = "0";
    }
}).trigger('resize');
// end mobile navigation ----------------------------------------------