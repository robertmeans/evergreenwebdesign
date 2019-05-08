<section id="div-two">
  <div class="tabs">
      <ul class="tab-links">
          <li class="active"><a href="#tab2" class="static"><i class="fas fa-desktop desktop-only"></i> <span class="mobile-gone">Websites</span></a></li>
          <li><a href="#tab1" class="static"><i class="far fa-eye"></i> <span class="mobile-gone">Overview</span></a></li>
          <li><a href="#tab3" class="static"><i class="far fa-lightbulb desktop-only"></i> <span class="mobile-gone">Options</span></a></li>
      </ul>

  <div class="tab-content">

      <div id="tab2" class="tab active cf"><!-- Websites tab -->
      <h2 class="mobile">Websites</h2>
        <p>A custom website can help rediscover your business image in the Internet marketplace.</p>
        <p>Mobile devices now account for <a class="txt-a" href="http://techcrunch.com/2014/08/21/majority-of-digital-media-consumption-now-takes-place-in-mobile-apps/" target="_blank">more Internet traffic</a> than desktop computers. You can't afford to have an online presence without a strong mobile interface. [Are you still reading this? Holy mackrel, this is boring. If you want to skip to the meat and potatoes please feel free to drop this reading business and call me - <a class="txt-a" href="tel:(303)%20932-7483">(303) WEBSITE</a>.] If your customers have to zoom, pinch and pan in order to navigate your website it quickly becomes an ineffective, cumbersome experience.</p>
        <p>Utilizing the latest specifications in HTML5, CSS3 and jQuery with a focus on viewport-independent, fluid design, you can rest assured your your site looks great and functions flawlessly no matter how your visitors get there. [yawn]</p>

    <ul class="list moresites cf">

      <li>
        <a href="http://www.evergreenbrewery.com" target="_blank"><img src="_images/evergreen-brewery-website.jpg" alt="Evergren Brewery"></a>
        <h3>Evergreen Brewery</h3>
        <p>Hand coded. Elegant. Packed with information and designed for mobile viewport as #1 priority.</p>
      </li>
      <li>
        <a href="http://www.seasonally-yours.com" target="_blank"><img src="_images/seasonally-yours-website.jpg" alt="Seasonally Yours"></a>
        <h3>Seasonally Yours</h3>
        <p>Squarespace ecommerce website. Focused on mobile delivery &amp; optimized for cell phone viewport.</p>
      </li>
      <li>
        <a href="http://www.best-nutrition.net" target="_blank"><img src="_images/best-nutrition-website.jpg" alt="Best Nutrition"></a>
        <h3>Best Nutrition</h3>
        <p>WordPress ecommerce (WooCommerce) site with product options and variations.</p>
      </li>
      <li>
        <a href="http://www.mainstrestaurant.com" target="_blank"><img src="_images/mainstrestaurant-website.jpg" alt="Main Street Restaurant"></a>
        <h3>Main Street Restaurant</h3>
        <p>Squarespace website with custom conditional logic that dynamically embeds content. Neat!</p>
      </li>
      <li>
        <a href="http://www.mountainliving.fun" target="_blank"><img src="_images/mountainliving-website.jpg" alt="Lisa Smith Realtor"></a>
        <h3>Real Estate Site</h3>
        <p>WordPress website for Realtor with IDX &amp; CRM integration to search MLS listings and manage visitor retention.</p>
      </li>
      <li>
        <a href="http://www.evergreensigns.com" target="_blank"><img src="_images/evergreen-signs-website.jpg" alt="Evergreen Signs Website"></a>
        <h3>Evergreen Signs</h3>
        <p>Hand coded. Oldie but goldie. Designed in 2014, highlights just how long fluid design has been a top priority.</p>
      </li>
      <li>
        <a href="http://www.cabinetsofdenver.com" target="_blank"><img src="_images/cabinetsofdenver-website.jpg" alt="Cabinets of Denver"></a>
        <h3>Cabinets of Denver</h3>
        <p>Squarespace website driven by imagery. Galleries and slideshows highlight the story.</p>
      </li>
      
      <li>
        <a href="http://www.ledererinc.com" target="_blank"><img src="_images/ledererinc-website.jpg" alt="Lederer, Inc."></a>
        <h3>Lederer, Inc</h3>
        <p>Hand coded. Great example of integrating complex functionality with creative freedom.</p>
      </li>
      <li>
        <a href="http://www.myscreenscene.com" target="_blank"><img src="_images/myscreenscene-website.jpg" alt="MyScreenScene.com"></a>
        <h3>MyScreenScene</h3>
        <p>Hand coded. An incredibly useful browser utility built in PHP &amp; MySQL.</p>
      </li>

    </ul><!-- .list .moresites .cf -->

    <button id="toggleMoreSites">Show more websites</button>
    </div><!-- .centerDisplay -->

    <div id="addSites01">

    <section id="contact">
      <script>
        function recaptchaCallback() {
            $('#confirm').addClass('display');
            $('#send').removeAttr('disabled');
            $('#send').removeClass('display');
        };
      </script>
      <div id="contact-form" class="cf">

        <div class="left-side">
          <h2>Are you seeing this?!</h2>
          <p>At this point I am just showing off. Have you noticed the profusion of custom features packed into this website? Everything you are seeing here is 100% hand coded from scratch.</p>
          <p>The point here is to showcase skills that demonstrate a comprehensive knowledge of Web Development. I'm not slapping together big pretty pictures and selling fool's gold. Evergreen Web Design is the Real McCoy!</p>
          <p>If there is anything specific I can show you please make a request. I am happy to explain why Evergreen Web Design is a cut above the rest.</p>
        </div>
        <div id="thank-you" class="right-side">
        
        <?php
            function post_captcha($user_response) {
            $fields_string = '';
            $fields = array(
                'secret' => '6LfN9SgUAAAAANt955AoO_nMkUsqyipvdt0__Q1G',
                'response' => $user_response
            );
            foreach($fields as $key=>$value)
            $fields_string .= $key . '=' . $value . '&';
            $fields_string = rtrim($fields_string, '&');
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
            curl_setopt($ch, CURLOPT_POST, count($fields));
            curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);
            $result = curl_exec($ch);
            curl_close($ch);
            return json_decode($result, true);
        }
        // Call the function post_captcha
        $res = post_captcha($_POST['g-recaptcha-response']);
        if (!$res['success']) {

            // What happens when the CAPTCHA wasn't checked - Fallback validation
            // echo '<p style="color: red; padding: 10px; border: 1px solid red; background-color: white; float: left;"><b>Submission Unsuccessful</b><br />Please refresh and make sure you check the security CAPTCHA box.</p><br>';
            // All error checking is handled on the front end. No need for this.
        } else {
            echo '<span class="success-msg">Your message was sent successfully!<br />I will see it soon and respond accordingly.</span>'; ?>
            </div><!-- #contact-form -->
            </section><!-- #contact -->


    </div><!-- #addSites01 -->
    </div><!-- #tab2 .tab .cf --><!-- Websites tab -->


    <div id="tab1" class="tab cf"><!-- Overview tab -->
        <h2 class="mobile">Overview</h2>
          <p></p>
          <p>Based in beautiful Evergreen, Colorado, Evergreen Web Design is a full-service Internet marketing firm offering custom solutions to virtually any Web related project. [This is no joke, we're hostage. Creative hostages and only your project might set us both free. <a class="txt-a" href="tel:(303)%20932-7483">Call</a>, let's fix this. - We now join our previous discussion already in progress -] ...to bring you the most competitive rates available from domain registration to hosting to website concept, design and development.</p>

          <p>Products &amp; services include:</p>
          <div class="project-col">
            <ul class="past-projects">
              <li>Website Development</li>
              <li>Social Media Campaigns</li>
              <li>WordPress Recovery &amp; Migration</li>
              <li>Custom Solutions</li>
            </ul>
            </div>

            <div class="project-col">
            <ul class="past-projects second-column">
              <li>Domain Registration<span class="reseller">*</span></li>
              <li>Hosting<span class="reseller">*</span></li>
              <li>SSL Certificates<span class="reseller">*</span></li>
              <li>24/7/365 Support<span class="reseller">*</span></li>
            </ul>
            </div>

            <p>Visit our <a class="storefront-link" href="http://store.evergreenwebdesign.com">Storefront</a> for a complete selection of all our discounted domain products. </p>
            <p><span class="reseller">*</span> Evergreen Web Design is an authorized GoDaddy Reseller. You can buy GoDaddy products through us for less. Exact same products, same support, same dependability, less money.</p>

          <div class="container">
            <p class="social-network-icons"><a href="https://www.facebook.com/evergreenwebdesign01" target="_blank"><img class="facebook-square" src="https://www.evergreenwebdesign.com/_images/facebook-icon.jpg" alt="Facebook"></a> <a href="https://twitter.com/EWDLLC" target="_blank"><img class="twitter-square" src="_images/twitter-icon.jpg" alt="Twitter"></a> <a href="https://plus.google.com/+Evergreenwebdesignllc" target="_blank"><img class="google-plus-square" src="_images/google-plus-icon.jpg" alt="Google+"></a> please share</p>

            <a href="#" class="click no-default"><i class="fa fa-angle-down"></i> Creative Solutions</a>

            <div class="expand">
              <p class="seo-strategies">This website you are looking at right now was built 100% by hand coded acuity. There is no prefabricated, template-driven framework to restrict complete creative freedom which, as a developer, represents unbriadled joy!</p>
              <p>How can this help you? Well, to start this means that no matter what project you have, whether it exists already or it is a future concept, the sky's the limit! Nothing's getting farmed out here. You want answers? We've got 'em.</p>
            </div><!-- .expand !-->
          </div><!-- #container -->

          <div class="container2">
             <a href="#" class="click no-default"><i class="fa fa-angle-down"></i> Pricing</a>
            <div class="expand">
              <p>The first question everyone asks, &quot;How much?&quot; A similar question would be, &quot;How much is a car?&quot; With all of the options and details to outline it is impossible to set generic pricing. That said, pricing options are available to suit virtually every budget and project. Let's discuss your idea and outline a plan that works for you.</p>

              <p>Discounted pricing for domain names, hosting, etc. can be found through our <a href="http://store.evergreenwebdesign.com">GoDaddy Reseller portal</a>.</p>
            </div><!-- .expand !-->
          </div><!-- #container2 -->

        </div><!-- #tab1 .tab .active .cf -->

    <div id="tab3" class="tab cf"><!-- $? tab -->
      <h2 class="mobile">Options</h2>
      <p>The sky's the limit!</p>
      <p>At the risk of oversimplifying it I always tell people, &quot;The short answer is 'Yes'.&quot; In other words, if you can think it I can do it. Truth is, you have a lot of options depending on what your specific needs are. In the realm of content management systems you can weigh the pros and cons of a framework like WordPress against Squarespace. WordPress is wildly popular but comes with its burdens in the form of long-term overhead maitenance. Squarespace solves that problem with a tradeoff in creative freedom.</p>
      <p>And then there's hand coded which offeres the greatest of both worlds but comes with a front end price tag. Sometimes, depending on the functionality you need from your website, a hand coded site makes the most sense. There are so many variables in this equation that I could write several pages on the topic, all of which you would never read.</p>
      <p>In the name of practicality and brevity - and for a free consultation call <a class="txt-a" href="tel:(303)%20932-7483">(303) WEBSITE</a></p>
    </div><!-- #tab3 .tab cf -->

  </div><!-- .tab-content -->
  </div><!-- .tabs -->

</section><!-- #div-two -->

<?php require ("_includes/about.php"); ?>
<?php require ("_includes/backstretch.php"); ?>

<?php include "_includes/footer.php" ?>
<?php require_once('_includes/contactform-code.php'); ?>

<script type="text/javascript" src="_scripts/jquery.backstretch.min.js"></script>
<script type="text/javascript" src="_scripts/scripts-02-min.js?<?php echo time(); ?>"></script>
<script src="http://localhost:35729/livereload.js"></script>
</body>
</html>


<?php
    error_reporting(E_ALL ^ E_NOTICE);

    // set a variable to hold g-recaptcha-response so you can 
    // leave it out of the email body when message is composed
    if (isset($_POST['g-recaptcha-response'])) { 
        $captcha = $_POST['g-recaptcha-response'];
    }

    $my_email = "robert@evergreenwebdesign.com";

    // to let visitor fill in the "from" field leave string below empty 
    $from_email = "";

    $errors = array();

    if (count($_COOKIE)) {
        foreach(array_keys($_COOKIE) as $value) {
            unset($_REQUEST[$value]);
        }
    }

    if (isset($_REQUEST['email']) && !empty($_REQUEST['email'])) {
        $_REQUEST['email'] = trim($_REQUEST['email']);
        if (substr_count($_REQUEST['email'],"@") != 1 || stristr($_REQUEST['email']," ") || stristr($_REQUEST['email'],"\\") || stristr($_REQUEST['email'],":")) {
            $errors[] = "Email address is invalid";
        } else {
            $exploded_email = explode("@",$_REQUEST['email']);
            if (empty($exploded_email[0]) || strlen($exploded_email[0]) > 64 || empty($exploded_email[1])) {
                $errors[] = "Email address is invalid";
            } else {
                if (substr_count($exploded_email[1],".") == 0) {
                    $errors[] = "Email address is invalid";
                } else {
                    $exploded_domain = explode(".",$exploded_email[1]);
                    if (in_array("",$exploded_domain)) {
                        $errors[] = "Email address is invalid";
                    } else {
                        foreach ($exploded_domain as $value) {
                            if (strlen($value) > 63 || !preg_match('/^[a-z0-9-]+$/i',$value)) {
                                $errors[] = "Email address is invalid"; 
                                break;
                            }
                        }
                    }
                }
            }
        }

    }

    if (!(isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER']) && stristr($_SERVER['HTTP_REFERER'],$_SERVER['HTTP_HOST']))) {
        $errors[] = "There are many other scripts out there that are much easier to hijack. Please leave this one alone.";
    }

    function recursive_array_check_blank($element_value) {
        global $set;

        if (!is_array($element_value)) { 
            if (!empty($element_value)) {
                $set = 1;
            }
        } else {
            foreach($element_value as $value) {
                if($set) {
                    break;
                } recursive_array_check_blank($value);
            }
        }
    }

    recursive_array_check_blank($_REQUEST);

    if (!$set) {
        $errors[] = "<script>alert('\\n\\nYou cannot submit a blank form.');window.location.replace('index.php');</script>";
    }

    unset($set);

    if (count($errors)){
        foreach($errors as $value){
            print "$value<br>";
        } exit;
    }

    if (!defined("PHP_EOL")){
        define("PHP_EOL", strtoupper(substr(PHP_OS,0,3) == "WIN") ? "\r\n" : "\n");
    }

    function build_message($request_input){
        if (!isset($message_output)) {
            $message_output ="";
        } if (!is_array($request_input)) {
            $message_output = $request_input;
        } else {
            foreach($request_input as $key => $value) {
                // check that the key of the $_POST variable is not the
                // g-recaptcha-response before adding it to the message
                if ($key != 'g-recaptcha-response') {

                    if(!empty($value)) {
                        if (!is_numeric($key)) {
                            $message_output .= str_replace("_"," ",ucfirst($key)).": ".build_message($value).PHP_EOL.PHP_EOL;
                        } else {
                            $message_output .= build_message($value).", ";
                        }
                    }
                }
            }   
        } return rtrim($message_output,", ");
    }

    $message = build_message($_REQUEST);
    $message = $message . PHP_EOL.PHP_EOL."".PHP_EOL."";
    $message = stripslashes($message);
    $subject = "Message From Evergreen Web Design - More Information Request Form";
    $subject = stripslashes($subject);

    if ($from_email) {
        $headers = "From: " . $from_email;
        $headers .= PHP_EOL;
        $headers .= "Reply-To: " . $_REQUEST['email'];
        } else {
            $from_name = "";
            if (isset($_REQUEST['name']) && !empty($_REQUEST['name'])) {
                $from_name = stripslashes($_REQUEST['name']);
            }

        $headers = "From: {$from_name} <{$_REQUEST['email']}>"."\r\n";
        /* BCC if needed */
        // $headers .= "BCC: robert@evergreenwebdesign.com\r\n";

        }

        mail($my_email,$subject,$message,$headers);
    // must exit the else statement so it does not print the form again
    break;
    }
?>
          <form action="thank-you.php#thank-you" method="post" id="contactForm">
              <ul>
                  <li>
                    <label class="text top-text" for="name">Name</label>
                    <input name="name" type="text" id="name" tabindex="10" />
                  </li>
                  <li>
                    <label class="text" for="email">Email</label>
                    <input required name="email" type="email" id="email" tabindex="20" />
                  </li>
                  <li>
                    <label class="text" for="comments">Comments</label>
                    <textarea noresize name="comments" id="comments" tabindex="30"></textarea>
                  </li>
                  <li>
                     <div class="g-recaptcha" data-callback="recaptchaCallback" data-sitekey="6LfN9SgUAAAAAOX_A0_akc32rH9egF6oe4KEYx9Q"></div>
                  </li>
                  <li>
                      <button id="confirm" disabled>Check Captcha above to enable Send</button>
                      <button id="send" type="submit" class="display" disabled>Send</button>
                  </li>     
              </ul> 
          </form>
        </div><!-- .right-side -->
      </div><!-- #contact-form -->
    </section><!-- #contact -->

    </div><!-- #addSites01 -->

   <!--  </div> --><!-- #tab2 .tab .cf --><!-- Websites tab -->


    <div id="tab1" class="tab cf"><!-- Overview tab -->
        <h2 class="mobile">Overview</h2>
          <p></p>
          <p>Based in beautiful Evergreen, Colorado, Evergreen Web Design is a full-service Internet marketing firm offering custom solutions to virtually any Web related project. [This is no joke, we're hostage. Creative hostages and only your project might set us both free. <a class="txt-a" href="tel:(303)%20932-7483">Call</a>, let's fix this. - We now join our previous discussion already in progress -] ...to hosting to website concept, design and development.</p>

          <p>Products &amp; services include:</p>
          <div class="project-col">
            <ul class="past-projects">
              <li>Website Development</li>
              <li>Social Media Campaigns</li>
              <li>WordPress Recovery &amp; Migration</li>
              <li>Custom Solutions</li>
            </ul>
            </div>

            <div class="project-col">
            <ul class="past-projects second-column">
              <li>Domain Registration<span class="reseller">*</span></li>
              <li>Hosting<span class="reseller">*</span></li>
              <li>SSL Certificates<span class="reseller">*</span></li>
              <li>24/7/365 Support<span class="reseller">*</span></li>
            </ul>
            </div>

            <p>Visit our <a class="storefront-link" href="http://store.evergreenwebdesign.com">Storefront</a> for a complete selection of all our discounted domain products. </p>
            <p><span class="reseller">*</span> Evergreen Web Design is an authorized GoDaddy Reseller. You can buy GoDaddy products through us for less. Exact same products, same support, same dependability, less money.</p>

          <div class="container">
            <p class="social-network-icons"><a href="https://www.facebook.com/evergreenwebdesign01" target="_blank"><img class="facebook-square" src="https://www.evergreenwebdesign.com/_images/facebook-icon.jpg" alt="Facebook"></a> <a href="https://twitter.com/EWDLLC" target="_blank"><img class="twitter-square" src="_images/twitter-icon.jpg" alt="Twitter"></a> <a href="https://plus.google.com/+Evergreenwebdesignllc" target="_blank"><img class="google-plus-square" src="_images/google-plus-icon.jpg" alt="Google+"></a> please share</p>

            <a href="#" class="click no-default"><i class="fa fa-angle-down"></i> Creative Solutions</a>

            <div class="expand">
              <p class="seo-strategies">This website you are looking at right now was built 100% by hand coded acuity. There is no prefabricated, template-driven framework to restrict complete creative freedom which, as a developer, represents unbriadled joy!</p>
              <p>How can this help you? Well, to start this means that no matter what project you have, whether it exists already or it is a future concept, the sky's the limit! Nothing's getting farmed out here. You want answers? We've got 'em.</p>
            </div><!-- .expand !-->
          </div><!-- #container -->

          <div class="container2">
             <a href="#" class="click no-default"><i class="fa fa-angle-down"></i> Pricing</a>
            <div class="expand">
              <p>The first question everyone asks, &quot;How much?&quot; A similar question would be, &quot;How much is a car?&quot; With all of the options and details to outline it is impossible to set generic pricing. That said, pricing options are available to suit virtually every budget and project. Let's discuss your idea and outline a plan that works for you.</p>

              <p>Discounted pricing for domain names, hosting, etc. can be found through our <a href="http://store.evergreenwebdesign.com">GoDaddy Reseller portal</a>.</p>
            </div><!-- .expand !-->
          </div><!-- #container2 -->

        </div><!-- #tab1 .tab .active .cf -->

    <div id="tab3" class="tab cf"><!-- $? tab -->
      <h2 class="mobile">Options</h2>
      <p>The sky's the limit!</p>
      <p>At the risk of oversimplifying it I always tell people, &quot;The short answer is 'Yes'.&quot; In other words, if you can think it I can do it. Truth is, you have a lot of options depending on what your specific needs are. In the realm of content management systems you can weigh the pros and cons of a framework like WordPress against Squarespace. WordPress is wildly popular but comes with its burdens in the form of long-term overhead maitenance. Squarespace solves that problem with a tradeoff in creative freedom.</p>
      <p>And then there's hand coded which offeres the greatest of both worlds but comes with a front end price tag. Sometimes, depending on the functionality you need from your website, a hand coded site makes the most sense. There are so many variables in this equation that I could write several pages on the topic, all of which you would never read.</p>
      <p>In the name of practicality and brevity - and for a free consultation call <a class="txt-a" href="tel:(303)%20932-7483">(303) WEBSITE</a></p>
    </div><!-- #tab3 .tab cf -->

  </div><!-- .tab-content -->

  </div><!-- .tabs -->
  
</section><!-- #div-two -->