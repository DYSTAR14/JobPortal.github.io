    function search() {
        var keyword=document.getElementById("keyword").value;
        var xmlhttp;
        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        } else {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState != 4 && xmlhttp.status == 200) {
                document.getElementById("subcontent").innerHTML = "Searching..";
            } else if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("subcontent").innerHTML = xmlhttp.responseText;
            } else {
                document.getElementById("subcontent").innerHTML = "Error Occurred. <a href='index.php'>Reload Or Try Again</a> the page.";
            }
        }
        xmlhttp.open("GET", "home_search.php?key=" + keyword , true);
        xmlhttp.send();
    }
