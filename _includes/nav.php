<nav id="mainNav">
  <div id="center-nav">
  <h2>Site Navigation</h2>
  <ul>
    <li id="slide-in-phone" 
      <?php if ($layout_context == "homepage") { 
        echo "class=\"full-height header-phone mobile-nav-phone-gone\"";
      } else {
        echo "class=\"full-height header-phone2 mobile-nav-phone-gone\"";
      } ?>>
      Call: (303) WEBSITE
      <p>(303) 932.7483</p>
    </li>
    <li class="full-height">
      <a href="#div-two" class="placeholder">SERVICES</a>
    </li>
    <li class="full-height">
      <a href="#div-three" class="placeholder">ABOUT</a>
    </li>
    <li class="full-height">
      <a id="toggle-contact" class="last-nav-item pc">CONTACT</a>
     <!--  <a class="last-nav-item" href="mailto:robert@evergreenwebdesign.com">CONTACT</a> -->
    </li>
    
    <li class="full-height ewd-nav-logo">
      <a href="#" class="no-active-nav back-to-top2">
        <img class="nav-logo" src="_images/Evergreen-Web-Design-nav-logo.png" alt="Evergreen Web Design logo">
      </a>
    </li>
    <li class="full-height"><a class="first-nav-item no-active-nav large-screen-gone mobile_menu2"><i class="fa fa-chevron-up"></i></a></li>
  </ul>
  </div>
</nav>