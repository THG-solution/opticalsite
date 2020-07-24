currency_conversion = (conTo) => {
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("product-list-item").innerHTML = this.responseText;
    }}
    xhttp.open("GET", "includes/product.php?to="+conTo, true);
    xhttp.send();
}

filter_product = (val) => {
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("product-list-item").innerHTML = this.responseText;
    }}
    xhttp.open("GET", "includes/filt_product.php?gender="+val, true);
    xhttp.send();
}