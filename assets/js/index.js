function showCustomer(str) {
  var xhttp;
  if (str == "") {
    document.getElementById("fullpost").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("fullpost").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "assets/php/fullpost.php?q="+str, true);
  xhttp.send();
}
