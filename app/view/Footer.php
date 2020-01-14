
<script>
    function openCart() {
        console.log("Starting openCart() function...");
        var sockingCart = document.getElementById("socking-cart");
        if (sockingCart.style.display == "none") {
            console.log("Opening cart.");
            sockingCart.style.display = "block";
        } else {
            console.log("Closing cart.");
            sockingCart.style.display = "none";
        }
    }
</script>
<footer class="page-footer pt-4">

<div class="container fullcover">
  <div class="row">
    <!-- <div class="col-md-12">
        <h3>contact information</h3>
</div> -->

<div class="col-md-12">
    <h4>©ThemeSocks 2019</h4>
</div>
</div>
</div>
</footer>
</body>
</html>