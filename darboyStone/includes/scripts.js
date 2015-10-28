
/*
 * Script for generating modal based on contents of the database
 */
function createModal(str) {
	var fileName = str.firstElementChild.src;
    if (str.length == 0) {
        document.getElementById("output").innerHTML = "Error loading: "+ fileName;
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4)/* && xmlhttp.status == 200)*/ {
                document.getElementById("output").innerHTML = xmlhttp.responseText;
                $('#myModal').modal('show');
            }
        }
        //Call to dbQuery.php
        xmlhttp.open("GET", "../includes/dbQuery.php?q=" + fileName, true);
        xmlhttp.send();
    }
}
/*
 * Calls the addModal.php function for making new modals
 */
function addModal(){
	var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4)/* && xmlhttp.status == 200)*/ {
                document.getElementById("output").innerHTML = xmlhttp.responseText;
                $('#addModal').modal('show');
            }
        }
        //Call to dbQuery.php
        xmlhttp.open("GET", "../includes/addModal.php?", true);
        xmlhttp.send();
}
/*
 * Script for generating modal to update based on contents of the database
 */
function updateModal(str) {
	
    if (str.length == 0) {
        document.getElementById("output").innerHTML = "Error loading: ";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4)/* && xmlhttp.status == 200)*/{
               document.getElementById("output").innerHTML = xmlhttp.responseText;
                $('#updateModal').modal('show');
            }
        }
        //Call to dbSelect.php
        xmlhttp.open("GET", "../includes/dbSelect.php?q=" + str, true);
        xmlhttp.send();
    }
}