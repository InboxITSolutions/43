<div id="loader">
    <div class="loader_logo"> <img src="assets/43-logo.png"></div>
    <div class="loader_loading"> <img src="images/loading.gif"></div>  
</div>
<script>
var myVar;
function myFunction() {
    myVar = setTimeout(showPage,4);
}
function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>

