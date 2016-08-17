<html>
<head>
<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>

<form>
<select name="users" onChange="showUser(this.value)">
  <option value="">Select a person:</option>
  <option value="women_clothing">Women Clothing</option>
  <option value="men_clothing">Men Clothing</option>
  <option value="health_beauty">Health & Beauty</option>
  <option value="home_garden">Home & Garden</option>
  <option value="book_store">Book's Store</option>
  <option value="bags_shoes">Bags & Shoes</option>
  <option value="kids_baby">Kids & Baby</option>
  </select>
</form>
<br>
<div id="txtHint"><b>Person info will be listed here...</b></div>

</body>
</html>