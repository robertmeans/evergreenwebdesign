$(document).ready(function(){$(document).on("click",".myBtnEWD",function(){$("#myModal").css("display","flex"),$("#modheader").html('<h2>Evergreen Web Design | <a href="tel:(303)%20932-7483">(303) 932-7483</a></h2><span class="close">&times;</span>'),$("#contact-title").html("Evergreen Web Design"),$("#contact-email").html('<a class="hci" href="mailto:info@evergreenwebdesign.com"><i class="far fa-envelope fa-fw"></i> info@evergreenwebdesign.com</a>')}),$(document).on("click",".myBtnRobert",function(){$("#myModal").css("display","flex"),$("#modheader").html('<h2>Robert Means | <a href="tel:(303)%20932-7483">(303) 932-7483</a></h2><span class="close">&times;</span>'),$("#contact-title").html("Robert Means"),$("#contact-email").html('<a class="hci" href="mailto:robert@evergreenwebdesign.com"><i class="far fa-envelope fa-fw"></i> robert@evergreenwebdesign.com</a>')}),$(document).on("click",".myBtnBobby",function(){$("#myModal").css("display","flex"),$("#modheader").html('<h2>Bobby Means | <a href="tel:(303)%20932-7483">(303) 932-7483</a></h2><span class="close">&times;</span>'),$("#contact-title").html("Bobby Means"),$("#contact-email").html('<a class="hci" href="mailto:bobby@evergreenwebdesign.com"><i class="far fa-envelope fa-fw"></i> bobby@evergreenwebdesign.com</a>')}),$(document).on("click",".myBtnBob",function(){$("#myModal").css("display","flex"),$("#modheader").html('<h2>Bob Means | <a href="tel:(303)%20932-7483">(303) 932-7483</a></h2><span class="close">&times;</span>'),$("#contact-title").html("Bob Means"),$("#contact-email").html('<a class="hci" href="mailto:bob@evergreenwebdesign.com"><i class="far fa-envelope fa-fw"></i> bob@evergreenwebdesign.com</a>')}),$(document).on("click",".myBtnRob",function(){$("#myModal").css("display","flex"),$("#modheader").html('<h2>Rob Means | <a href="tel:(303)%20932-7483">(303) 932-7483</a></h2><span class="close">&times;</span>'),$("#contact-title").html("Rob Means"),$("#contact-email").html('<a class="hci" href="mailto:rob@evergreenwebdesign.com"><i class="far fa-envelope fa-fw"></i> rob@evergreenwebdesign.com</a>')}),$(document).on("click",".close",function(){$("#myModal").css("display","none")}),$(document).on("click",".cloze",function(){$("#myModal").css("display","none")}),$(document).on("click",".sendaroo",function(){event.preventDefault(),$.ajax({dataType:"JSON",url:"contact-process.php",type:"POST",data:$("#contactz").serialize(),beforeSend:function(e){$("#msg").removeClass("alert-warning"),$("#msg").html(""),$("#send-success").html('<div class="sending-holup"><div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div></div>')},success:function(e){e&&(console.log(e),"ok"==e.signal?$("#contactz").html("<span>Your message was sent successfully.</span>"):(e.ww.includes("name")&&$("#name").addClass("fixdis"),e.ww.includes("name")||$("#name").removeClass("fixdis"),e.ww.includes("email")&&$("#email").addClass("fixdis"),e.ww.includes("email")||$("#email").removeClass("fixdis"),e.ww.includes("message")&&$("#message").addClass("fixdis"),e.ww.includes("message")||$("#message").removeClass("fixdis"),$("#msg").addClass("alert-warning"),$("#msg").html('<ul id="msgul">'+e.li+"</ul>"),$("#send-success").html('<div id="cloze" class="cloze">Close</div><div class="send sendaroo">Send</div>')))},error:function(){$("#msg").html('<div class="alert alert-warning">There was an error between your IP and the server. Please try again later.</div>')},complete:function(){}})})});var modal=document.getElementById("myModal");window.onmousedown=function(e){e.target==modal&&(modal.style.display="none")};const images=["_images/sandbox-images/cars.jpg"],randomImage=images[Math.floor(Math.random()*images.length)],stickySections=(document.getElementById("randoimg").src=randomImage,[...document.querySelectorAll(".sticky")]);function transform(e){var s=e.parentElement.offsetTop,e=e.querySelector(".scroll-section"),s=(window.scrollY-s)/window.innerHeight*100;e.style.transform=`translate3d(${-(s<0?0:200<s?200:s)}vw, 0, 0)`}window.addEventListener("scroll",e=>{for(let e=0;e<stickySections.length;e++)transform(stickySections[e])});