function addToCart(id) {
   var xhttp = new XMLHttpRequest();
   xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
         parseInt(document.getElementById("cartNum").value) += 
         parseInt(this.responseText);
      }
   };
   xhttp.open("GET", "addToCart.php", true);
   xhttp.send();
}