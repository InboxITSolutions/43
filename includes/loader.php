<div id="loader">
    <div class="loader_logo"> <img src="images/logo-real.jpg"></div>
    <div class="loader_loading"> <img src="images/loading.gif"></div>  
</div>
<script>
var myVar;
function myFunction() {
    myVar = setTimeout(showPage,1);
}
function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>