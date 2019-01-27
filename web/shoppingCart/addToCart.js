function addToCart(id) {
   var xhttp = new XMLHttpRequest();
   xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
         var myCart = JSON.parse(this.responseText);
         document.getElementById("cartNum").innerHTML = myCart.numItems;
      }
   };
   xhttp.open("GET", "addToCart.php?item=" + id, true);
   xhttp.send();
}

