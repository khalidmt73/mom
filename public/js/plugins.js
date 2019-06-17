var httpSite = 'http://localhost/tasmem4u/';
//var httpSite = "http://www.tasmem4u.com/";

//----------------------------------------------------------------------------------------
	
	function AjaxSearch(search, id1, id2, url) {
        //document.write(httpSite+url);
        //document.write(search);

        if (search == "") {
            document.getElementById(id1).innerHTML = "";
            return;
        }
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else { // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById(id1).innerHTML = xmlhttp.responseText;
                document.getElementById(id1).style.display = 'block';
                document.getElementById(id2).style.display = 'none';
            }
        }
        xmlhttp.open("POST", httpSite + url, true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
        xmlhttp.send('search=' + search);
    }
//----------------------------------------------------------------------------------------
