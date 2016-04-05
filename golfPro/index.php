<?php
	session_start();
?>

<!DOCTYPE html>

<html lang="en">

<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		Golf Pro
	</title>
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>

	<link href="styles/bootstrap.css"  rel="stylesheet"/>
	<link href="styles/adamvh.css" rel="stylesheet" />
	
	</script>
	
</head>

<body>
	<div class="container">
		<?php
			include "header.php";
			//Check if the user is logged in and present available functions
			//If not, display home page.
			if(!isset($_SESSION['user'])){
				echo "
					<script>
					$(document).ready(function(){
						$('#page-content').load('content_general.php', function(){
				            // hide loader image
				            $('#loader-image').hide(); 
				             
				            // fade in effect
				            $('#page-content').fadeIn('slow');
			            });
		            });
					</script>	
				";
			}
		?>
		<div class="content">
			<div class='page-header'>
	            <h1 id='page-title'>Online Golf Course Management</h1>
	        </div>
			
			<!-- this is where the contents will be shown. -->
			<div id='page-content'></div>
			
			<!-- This is where we'll pop-up a modal for user interation-->
			<div id='page-modal'></div>
						
			<div class='margin-bottom-1em overflow-hidden'>
				
			    <!-- when clicked, it will show the User's list -->
			    <div id='read-users' class='btn btn-primary pull-right display-none'>
			        <span class='glyphicon glyphicon-list'></span> Read Users
			    </div>
			 
			    <!-- when clicked, it will load the create User form -->
			    <div id='create-user' class='btn btn-primary pull-right'>
			        <span class='glyphicon glyphicon-plus'></span> Create User
			    </div>
			     
			    <!-- this is the loader image, hidden at first -->
			    <div id='loader-image'><img src='image/ajax-loader.gif' /></div>
			</div>
		</div>
	</div>
	
	<script type="text/javascript">
	
	// change page title
	function changePageTitle(page_title){   
	    // change page title
	    $('#page-title').text(page_title);
	     
	    // change title tag
	    document.title=page_title;
	}
	
	// change the username in header after login
	function changeUserTitle(user_name){
		//change user name
		$('#user-title').text(user_name);
		// change user name tag
		document.title=user_name;
	}
	
	$(document).ready(function(){
		
		// will run if the delete button was clicked
		$(document).on('click', '.delete-btn', function(){ 
		    if(confirm('Are you sure?')){
		     
		        // get the id
		        var iduser = $(this).closest('td').find('.user-id').text();
		         
		        // trigger the delete file
		        $.post("delete.php", { id: iduser })
		            .done(function(data){
		                console.log(data);
		                 
		                // show loader image
		                $('#loader-image').show();
		                 
		                // reload the product list
		                showUsers();
		                 
		            });
		    }
		});
		
		// will run if update user form was submitted
		$(document).on('submit', '#update-user-form', function() {
		 
		    // show a loader img
		    $('#loader-image').show();
		     
		    // post the data from the form
		    $.post("update.php", $(this).serialize())
		        .done(function(data) {
		             
		            // show create product button
		            $('#create-user').show();
		             
		            // hide read products button
		            $('#read-user').hide();
		         
		            // 'data' is the text returned, you can do any conditions based on that
		            
		            showUsers();
		        });
		             
		    return false;
		});
		
		// clicking the edit button
		$(document).on('click', '.edit-btn', function(){ 
		    // change page title
		    changePageTitle('Update User');
		 
		    var user_id = $(this).closest('td').find('.user-id').text();
		     
		    // show a loader image
		    $('#loader-image').show();
		     
		    // hide create user button
		    $('#create-user').hide();
		     
		    // show read user button
		    $('#read-users').show();
		 
		    // fade out effect first
		    $('#page-content').fadeOut('slow', function(){
		        $('#page-content').load('update_form.php?user_id='+user_id, function(){
		            // hide loader image
		            $('#loader-image').hide(); 
		             
		            // fade in effect
		            $('#page-content').fadeIn('slow');
		        });
		    });
		}); 
		
		 
		// clicking the 'read Users' button
		$('#read-users').click(function(){
		     
		    // show a loader img
		    $('#loader-image').show();
		     
		    // show create User button
		    $('#create-user').show();
		     
		    // hide read Users button
		    $('#read-users').hide();
		     
		    // show Users
		    showUsers();
		});
		 
		// read Users
		function showUsers(){
		         
		    // change page title
		    changePageTitle('Read Users');
		     
		    // fade out effect first
		    $('#page-content').fadeOut('slow', function(){
		        $('#page-content').load('read.php', function(){
		            // hide loader image
		            $('#loader-image').hide(); 
		             
		            // fade in effect
		            $('#page-content').fadeIn('slow');
		        });
		    });
		}
		
		//User log in function
		$(document).on('submit', '#user-login-form', function() {
		 	
		    // show a loader img
		    $('#loader-image').show();
		     
		    // post the data from the form
		    $.post("user_login.php", $(this).serialize())
		        .done(function(data) {
		            //show create User button
		            $('#create-user').show();
		             
		            // hide read Users button
		            $('#read-users').hide();
		             
		            // 'data' is the text returned, you can do any conditions based on that
		            
		            changeUserTitle(data); 
		            showUsers();
		        });    
		    return false;
		});
	    // will show the user-login form
	    $('#user-login').click(function(){
	        // change page title
	        changePageTitle('Please Login');
	        changeUserTitle('Testing123');
	         
	        // show User login form
	        // show a loader image
	        $('#loader-image').show();
	         
	        // hide create User button
	        $('#create-user').hide();
	         
	        // show read Users button
	        $('#read-users').show();
	         
	        // fade out effect first
	        $('#page-content').fadeOut('slow', function(){
	            $('#page-content').load('user_login_form.php', function(){ 
	             
	                // hide loader image
	                $('#loader-image').hide(); 
	                 
	                // fade in effect
	                $('#page-content').fadeIn('slow');
	            });
	        });
	    });
		
     	// will run if create User form was submitted
		$(document).on('submit', '#create-user-form', function() {
		 
		    // show a loader img
		    $('#loader-image').show();
		     
		    // post the data from the form
		    $.post("create.php", $(this).serialize())
		        .done(function(data) {
		             
		            // show create User button
		            $('#create-user').show();
		             
		            // hide read Users button
		            $('#read-users').hide();
		             
		            // 'data' is the text returned, you can do any conditions based on that
		            showUsers();
		        });
		             
		    return false;
		});
	    // will show the create User form
	    $('#create-user').click(function(){
	        // change page title
	        changePageTitle('Create User');
	         
	        // show create User form
	        // show a loader image
	        $('#loader-image').show();
	         
	        // hide create User button
	        $('#create-user').hide();
	         
	        // show read Users button
	        $('#read-users').show();
	         
	        // fade out effect first
	        $('#page-content').fadeOut('slow', function(){
	            $('#page-content').load('create_user.php', function(){ 
	             
	                // hide loader image
	                $('#loader-image').hide(); 
	                 
	                // fade in effect
	                $('#page-content').fadeIn('slow');
	            });
	        });
	    });
	});
	</script>
</body>
</html>