$(document).ready(function(){
   // $("#msg-one").hide();
}); /* document.ready end */



$(".close-pc").click(function(e) {
  $('#msg-one').fadeOut(500);
 }); 

// close contact when clicking anywhere on page
// $(document).click(function() {
//   $('#msg-one').fadeOut(500);
// });​

// prevent these links from closing contact
$("#toggle-contact").click(function(e) {
    e.stopPropagation();
});
$("#pc").click(function(e) {
    e.stopPropagation();
});