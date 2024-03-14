<?php 
require_once  'config/initialize.php'; 
require       '_includes/head.php';
?>
<body>
  <div class="wrap">
    <a class="alink epop myBtnEWD">contact</a>
    <a class="alink epop myBtnRobert">Robert</a>
    <a class="alink epop myBtnBobby">Bobby</a>
    <a class="alink epop myBtnBob">Bob</a> 
    <a class="alink epop myBtnRob">Rob</a> 
  </div>


<?php require "_includes/epop.php" ?>

<script type="text/javascript" src="scripts/scripts.js?<?php echo time(); ?>"></script>
<?php echo livereload(); ?>
</body>
</html>