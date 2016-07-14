<!DOCTYPE html>
<html>
<head>
	<title>43</title>
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
	
</head>
<body  onload="myFunction()" style="margin:0;"><!--  -->
<div id="loader">
    <div class="loader_logo"> <img src="images/logo_white.png"></div>
    <div class="loader_loading"> <img src="images/loading.gif"></div>  
</div>
<div style=" color:#fff;display:none; " id="myDiv" class="animate-bottom"><!-- -->
<?php include 'includes/navigation.php'; ?> 
	<div class="col-xs-12 col-md-12 col-ms-12 ">
	</div>
</div>
</div>
</body>
</html>
<script>
var myVar;
function myFunction() {
    myVar = setTimeout(showPage, 1);
}
function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>