<!DOCTYPE html>
<html lang="eng">
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
  <style type="text/css">
  .hr-footer{
    display: none;
  }
  .footer{
    display: none;
  }

  .navbar-default{
    height: auto !important;
    margin: 0 !important;
  }

  .page-icons a{
    padding-bottom: 11.8px !important;
    line-height: 4.47em !important;
  }
  </style>
</head>
<body  onload="myFunction()" style="margin:0;"><!--  -->
<div id="loader">
    <div class="loader_logo"> <img src="images/logo_white.png"></div>
    <div class="loader_loading"> <img src="images/loading.gif"></div>  
</div>
<div style=" color:#fff;display:none; " id="myDiv" class="animate-bottom"><!-- -->
   <?php include 'includes/navigation.php';?>
    <div class="col-xs-12 col-md-12 col-md-12 info">
      <h3 align="center"><span>Contact</span></h3>
      
      <div class="col-xs-12 col-md-6 col-sm-6 infoleft">
        <div class="col-xs-12 col-md-12 col-ms-12 infoleft-top">
          <company class="company">43 Latin steake and grill house</compan>
          <add class="address"><i class="fa fa-map-marker"></i>&nbsp;43 titchfield street kilmarnock ka1 1qs</add>
          <phone class="phone"> <i class="fa fa-phone"></i>&nbsp;01563559555/444</phone>
          <mobile class="mobile"> <i class="fa fa-mobile"></i>&nbsp;9800000000</mobile>
          <mail class="mail"><i class="fa fa-envelope"></i>&nbsp;info@43.com.uk</mail>
        </div>
        <div class="col-xs-12 col-md-12 col-ms-12 infoleft-bottom map">
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d199.20907204728604!2d-4.497268627662041!3d55.60560971577403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x488832947fbe7f61%3A0xcbded777d6ae82bc!2sTitchfield+St%2C+Kilmarnock+KA1+1QS%2C+UK!5e0!3m2!1sen!2snp!4v1468575664316" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-xs-12 col-md-6 col-sm-6 contact-feedback">
              <table cellpadding="5">
                <form action="#" method="post">
                        <tr><td><input type="text" placeholder="  &#xf007;&nbsp; Your Name"></td></tr>
                        <tr><td><input type="text" placeholder="  &#xf0e0;&nbsp; Your Email Address"></td></tr>
                        <tr><td><input type="text" placeholder="  &#xf02d;&nbsp; Subject Of Your Message"></td></tr>
                        <tr><td><textarea rows="7"  placeholder="  &#xf075;&nbsp; Drop Us A Message"></textarea></td></tr>
                        <tr><td>
                          <input type="submit" value="Submit Message" class="btn btn-default submit pull-left" 
                          style="margin-bottom:0px !important;">
                        </td></tr>
                      </form>
                </table>
          </div>
    </div>
    <?php include'includes/footer.php';?>
    </div>
</div>
</div>
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
</body>
</html>

