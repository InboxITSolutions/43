<!DOCTYPE html>
<html>
<head>
	<title>The 43 Latin Steak and Grill House</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
	<script type="text/javascript" src="js/jquery-2.1.4.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/responsive-all.css">
	<link rel="stylesheet" type="text/css" href="css/w3.css">
	<script type="text/javascript" src="js/stickysidebar.js"></script>
  <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
	<script type="text/javascript" src="js/hovereffect.js"></script>
</head>
<body  style="margin:0;"><!--  -->
<div style=" color:#fff;" id="myDiv" class="animate-bottom"><!-- -->
<?php include 'includes/navigation.php'; ?> 
  <div class="col-xs-12 col-md-12 col-sm-12 heading-gallery">
    <div class="heading-wrapper">
      <h3 style="margin-bottom: 2.5em;" ><span>Gallery</span></h3>
    </div>
  </div>
  <div class="col-xs-12 col-md-12 col-sm-12 gallery" id="photos">
    <a href="assets/2.jpg" class="popup-portfolio" ><img src="assets/2.jpg"></a>
    <a href="assets/3.jpg" class="popup-portfolio" ><img src="assets/3.jpg"></a>
    <a href="assets/7.jpg" class="popup-portfolio" ><img src="assets/7.jpg"></a>
    <a href="assets/5.jpg" class="popup-portfolio" ><img src="assets/5.jpg"></a>

    <a href="assets/2.jpg" class="popup-portfolio" ><img src="assets/4.jpg"></a>
    <a href="assets/6.jpg" class="popup-portfolio" ><img src="assets/6.jpg"></a>
    <a href="assets/5.jpg" class="popup-portfolio" ><img src="assets/5.jpg"></a>
    <a href="assets/10.jpg" class="popup-portfolio" ><img src="assets/10.jpg"></a>

    <a href="assets/2.jpg" class="popup-portfolio" ><img src="assets/9.jpg"></a>
    <a href="assets/3.jpg" class="popup-portfolio" ><img src="assets/8.jpg"></a>
    <a href="assets/7.jpg" class="popup-portfolio" ><img src="assets/2.jpg"></a>
    <a href="assets/5.jpg" class="popup-portfolio" ><img src="assets/5.jpg"></a>

    <a href="assets/7.jpg" class="popup-portfolio" ><img src="assets/7.jpg"></a>
    <a href="assets/3.jpg" class="popup-portfolio" ><img src="assets/3.jpg"></a>
    <a href="assets/9.jpg" class="popup-portfolio" ><img src="assets/9.jpg"></a>
    <a href="assets/2.jpg" class="popup-portfolio" ><img src="assets/2.jpg"></a>
  </div>  
  <?php include'includes/footer.php';?>
</div>
</div>
</div>
<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  $('.popup-portfolio').magnificPopup({
    type:'image',
    gallery:{
    enabled:true
  }

});
});
</script>
</body>
</html>
