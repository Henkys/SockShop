<footer>©ThemeSocks 2019</footer>
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
</body>
</html>