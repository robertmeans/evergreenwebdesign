$(document).ready(function() { /* opening 1st doc ready */

  $(document).on('click','.myBtnEWD',function() {
    $('#myModal').css('display', 'flex');
    $('#modheader').html('<h2>Evergreen Web Design | <a href="tel:(303)%20932-7483">(303) 932-7483</a></h2><span class="close">&times;</span>');
    $('#contact-title').html('Evergreen Web Design');
    $('#contact-email').html('<a class="hci" href="mailto:info@evergreenwebdesign.com"><i class="far fa-envelope fa-fw"></i> info@evergreenwebdesign.com</a>');
  });

  $(document).on('click','.myBtnRobert',function() {
    $('#myModal').css('display', 'flex');
    $('#modheader').html('<h2>Robert Means | <a href="tel:(303)%20932-7483">(303) 932-7483</a></h2><span class="close">&times;</span>');
    $('#contact-title').html('Robert Means');
    $('#contact-email').html('<a class="hci" href="mailto:robert@evergreenwebdesign.com"><i class="far fa-envelope fa-fw"></i> robert@evergreenwebdesign.com</a>');
  });

  $(document).on('click','.myBtnBobby',function() {
    $('#myModal').css('display', 'flex');
    $('#modheader').html('<h2>Bobby Means | <a href="tel:(303)%20932-7483">(303) 932-7483</a></h2><span class="close">&times;</span>');
    $('#contact-title').html('Bobby Means');
    $('#contact-email').html('<a class="hci" href="mailto:bobby@evergreenwebdesign.com"><i class="far fa-envelope fa-fw"></i> bobby@evergreenwebdesign.com</a>');
  });

  $(document).on('click','.myBtnBob',function() {
    $('#myModal').css('display', 'flex');
    $('#modheader').html('<h2>Bob Means | <a href="tel:(303)%20932-7483">(303) 932-7483</a></h2><span class="close">&times;</span>');
    $('#contact-title').html('Bob Means');
    $('#contact-email').html('<a class="hci" href="mailto:bob@evergreenwebdesign.com"><i class="far fa-envelope fa-fw"></i> bob@evergreenwebdesign.com</a>');
  });  

  $(document).on('click','.myBtnRob',function() {
    $('#myModal').css('display', 'flex');
    $('#modheader').html('<h2>Rob Means | <a href="tel:(303)%20932-7483">(303) 932-7483</a></h2><span class="close">&times;</span>');
    $('#contact-title').html('Rob Means');
    $('#contact-email').html('<a class="hci" href="mailto:rob@evergreenwebdesign.com"><i class="far fa-envelope fa-fw"></i> rob@evergreenwebdesign.com</a>');
  });

  $(document).on('click','.close',function() {
    $('#myModal').css('display', 'none');
  });
  $(document).on('click','.cloze',function() {
    $('#myModal').css('display', 'none');
  });



  $(document).on('click', '.sendaroo', function() {
    // alert('yo');
    event.preventDefault();
    $.ajax({
      dataType: "JSON",
      url: "contact-process.php",
      type: "POST",
      data: $('#contactz').serialize(),
      beforeSend: function(xhr) {
        $('#msg').removeClass('alert-warning');
        $('#msg').html('');
        $('#send-success').html('<div class="sending-holup"><div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div></div>');
      },
      success: function(response) {
        // console.log(response);
        if(response) {
          console.log(response);
          if(response['signal'] == 'ok') {
            $('#contactz').html('<span>Your message was sent successfully.</span>');

          } else {

            if (response['ww'].includes('name')) { $('#name').addClass('fixdis'); }
            if (!response['ww'].includes('name')) { $('#name').removeClass('fixdis'); }

            if (response['ww'].includes('email')) { $('#email').addClass('fixdis'); }
            if (!response['ww'].includes('email')) { $('#email').removeClass('fixdis'); }

            if (response['ww'].includes('message')) { $('#message').addClass('fixdis'); }
            if (!response['ww'].includes('message')) { $('#message').removeClass('fixdis'); }

            $('#msg').addClass('alert-warning');
            $('#msg').html('<ul id="msgul">' + response['li'] + '</ul>');
            $('#send-success').html('<div id="cloze" class="cloze">Close</div><div class="send sendaroo">Send</div>');
          }
        } 
      },
      error: function() {
        $('#msg').html('<div class="alert alert-warning">There was an error between your IP and the server. Please try again later.</div>');
      }, 
      complete: function() {

      }
    })
  });



}); /* close 1st doc ready */


var modal = document.getElementById("myModal");
window.onmousedown = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

/* sticky + horizontal scroll stuff begin */
const stickySections = [...document.querySelectorAll('.sticky')]
// console.log(stickySections);
// let images = [
//     '_images/can-delete/internet-vortex.jpeg',
//     '_images/can-delete/day-sky-01.jpeg',
//     '_images/can-delete/good-morning-late.jpeg',
//     '_images/can-delete/night-sky.jpg',
//     '_images/can-delete/universe-stars.jpg'
//   ]

// images.forEach(img => {
//   stickySections.forEach(section => {
//     let image = document.createElement('img');
//     image.src = img;
//     section.querySelector('.scroll-section').appendChild(image)
//   })
// })

window.addEventListener('scroll', (e) => {
  for (let i = 0; i < stickySections.length; i++) {
    transform(stickySections[i])
  }
})

function transform(section) {
  const offsetTop = section.parentElement.offsetTop;
  // console.log(offsetTop);
  const scrollSection = section.querySelector('.scroll-section');
  // console.log(scrollSection);
  let percentage = ((window.scrollY - offsetTop) / window.innerHeight) * 100;
  percentage = percentage < 0 ? 0 : percentage > 800 ? 800 : percentage;
  scrollSection.style.transform = `translate3d(${-(percentage)}vw, 0, 0)`;
}