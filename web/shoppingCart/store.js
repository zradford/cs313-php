function addToCart(id) {
   var xhttp = new XMLHttpRequest();
   xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
         document.getElementById("cartNum").innerHTML = this.responseText;
      }
   };
   xhttp.open("GET", "addToCart.php?item=" + id, true);
   xhttp.send();
}