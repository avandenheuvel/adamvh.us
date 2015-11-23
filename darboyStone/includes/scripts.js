  // Disable scroll zooming and bind back the click event
  var onMapMouseleaveHandler = function (event) {
    var that = $(this);

    that.on('click', onMapClickHandler);
    that.off('mouseleave', onMapMouseleaveHandler);
    that.find('#map_canvas').css("pointer-events", "none");
  }

  var onMapClickHandler = function (event) {
    var that = $(this);

    // Disable the click handler until the user leaves the map area
    that.off('click', onMapClickHandler);

    // Enable scrolling zoom
    that.find('iframe').css("pointer-events", "auto");

    // Handle the mouse leave event
    that.on('mouseleave', onMapMouseleaveHandler);
  }

  // Enable map zooming with mouse scroll when the user clicks the map
  $('.maps.embed-container').on('click', onMapClickHandler);

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
 * Show contact us modal
 */
function showContactModal(){
	$('#contactModal').modal('show');
	$("#contactModal").css("minHeight",window.innerHeight);
}
/*
 * Calls the addModal.php function for making new modals
 */
function addModal(str){
	var fileDir=str;
	var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4)/* && xmlhttp.status == 200)*/ {
                document.getElementById("output").innerHTML = xmlhttp.responseText;
                $('#addModal').modal('show');
            }
        }
        //Call to dbQuery.php
        xmlhttp.open("GET", "../includes/addModal.php?q=" + fileDir, true);//Added file dir
        xmlhttp.send();
}

function JSuploadImage(str){
	if (str.length == 0) {
        alert("str empty");
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4)/* && xmlhttp.status == 200)*/{
               document.getElementById("output").innerHTML = xmlhttp.responseText;
               $('#addImgModal').modal('show');
            }
        }
        //Call to dbSelect.php
        xmlhttp.open("GET", "../includes/addImage.php?q=" + str, true);
        xmlhttp.send();
    }
}

/*
 * Called after success of add Modal
 */
function modalInserted(){
	var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4)/* && xmlhttp.status == 200)*/ {
                document.getElementById("output").innerHTML = xmlhttp.responseText;
                $('#modalInserted').modal('show');
            }
        }
        //Call to insert.php
        xmlhttp.open("POST", "../includes/insert.php?", true);
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
/*
 * Script for deleting modal
 */
function deleteModal(str) {
	
    if (str.length == 0) {
        document.getElementById("output").innerHTML = "Error loading: ";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4)/* && xmlhttp.status == 200)*/{
               document.getElementById("output").innerHTML = xmlhttp.responseText;
                $('#deleteModal').modal('show');
            }
        }
        //Call to dbSelect.php
        xmlhttp.open("GET", "../includes/dbDelete.php?q=" + str, true);
        xmlhttp.send();
    }
}
/*
 * Script for deleting an image
 */
function deleteImage() {
	var str = document.getElementById("lgImage").src;
	alert("delete Image: "+str);
    if (str.length == 0) {
        document.getElementById("output").innerHTML = "Error loading: ";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4)/* && xmlhttp.status == 200)*/{
               document.getElementById("output").innerHTML = xmlhttp.responseText;
                $('#deleteModal').modal('show');
            }
        }
        //Call to dbSelect.php
        xmlhttp.open("GET", "../includes/delete.php?q=" + str, true);
        xmlhttp.send();
    }
}