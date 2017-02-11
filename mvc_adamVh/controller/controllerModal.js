$(document).ready(function(){

//Show specific user or project data 
 $(document).on('click', '#getProj, #getUser', function(e){
  	
  	//determine which button was clicked and adjust parameters.
  	if($(event.target).attr('id')=='getUser'){
        $url = 'mvc_adamVh/model/getUser.php';
  		$pageDesc = 'User details';
    } else if($(event.target).attr('id')=='getProj'){
        $url = 'mvc_adamVh/model/getProject.php';
		$pageDesc = 'Project details';
    } else if($(event.target).attr('id')=='button3'){
        /* specific code for button3 */
    } else if($(event.target).attr('id')=='button4'){
        /* specific code for button4 */
    } 
  	
  e.preventDefault();
  
  var uid = $(this).data('id'); // get id of clicked row
  
  $('#dynamic-content').hide(); // hide dive for loader
  $('#modal-loader').show();  // load ajax loader
  
  $.ajax({
      url: $url,
      type: 'POST',
      data: 'id='+uid,
      dataType: 'html'
      //dataType: 'json'
  })
  .done(function(data){
      console.log(data);
      $('#dynamic-content').hide(); // hide dynamic div
      $('#dynamic-content').html(''); // blank before load.
      $('.modal-title').html('');
      $('#dynamic-content').html(data); // load here
      $('.modal-title').html($pageDesc);
      $('#dynamic-content').show(); // show dynamic div
      //$('#txt_fname').html(data.first_name);
      //$('#txt_lname').html(data.last_name);
      //$('#txt_email').html(data.email);
      //$('#txt_position').html(data.position);
      //$('#txt_office').html(data.office);
      $('#modal-loader').hide();    // hide ajax loader
  })
  .fail(function(){
      $('.modal-body').html('<i class="glyphicon glyphicon-info-sign"></i> Unable to load details, Please try again...');
  });
  
 });
 
 //Brings up a list of users 
 $(document).on('click', '#selectUser', function(e){
  		
    e.preventDefault();
  
    //var uid = $(this).data('id'); // get id of clicked row
  
    $('#dynamic-content').html(''); // leave this div blank
	$('#modal-loader').show();      // load ajax loader on button click
	 
	     $.ajax({
	          url: 'mvc_adamVh/model/selectUser.php',
	      	dataType: 'html'
	})
	.done(function(data){
	     console.log(data); 
	     $('#dynamic-content').html(''); // blank before load.
	     $('.modal-title').html('');
	     $('#dynamic-content').html(data); // load here
	     $('.modal-title').html('Select a user');
	     $('#modal-loader').hide(); // hide loader  
	})
	.fail(function(){
	     $('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Unable to load user table..');
	     $('#modal-loader').hide();
});

});


//Brings up a list of projects 
 $(document).on('click', '#projectModal', function(e){
  		
    e.preventDefault();
  
    //var uid = $(this).data('id'); // get id of clicked row
  
    $('#dynamic-content').html(''); // leave this div blank
	$('#modal-loader').show();      // load ajax loader on button click
	 
	     $.ajax({
	          url: 'mvc_adamVh/model/selectProject.php',
	      	dataType: 'html'
	})
	.done(function(data){
	     console.log(data); 
	     $('#dynamic-content').html(''); // blank before load.
	     $('.modal-title').html('');
	     $('#dynamic-content').html(data); // load here
	     $('.modal-title').html('Select a project');
	     $('#modal-loader').hide(); // hide loader  
	})
	.fail(function(){
	     $('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Unable to load user table..');
	     $('#modal-loader').hide();
});

});


//Load the time entry screen
 $(document).on('click', '#timeEntry', function(e){
  		
     e.preventDefault();
  
     //var uid = $(this).data('id'); // get id of clicked row
  
     $('#dynamic-content').html(''); // leave this div blank
 	 $('#modal-loader').show();      // load ajax loader on button click
 
     $.ajax({
     	url: 'mvc_adamVh/view/timeEntry.php',
     	dataType: 'html'
 	 })
	 .done(function(data){
	      console.log(data); 
	      $('#dynamic-content').html(''); // blank before load.
	      $('.modal-title').html('');
	      $('#dynamic-content').html(data); // load here
	      $('.modal-title').html('Time Entry');
	      $('#modal-loader').hide(); // hide loader  
	 })
	 .fail(function(){
	      $('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Unable to load time entry..');
	      $('#modal-loader').hide();
	 });

});

//process the user punch in request
$(document).on('click', '#btn-punchIn', function(e){
  		
    e.preventDefault();
    
    //set up the variables to be passed to the database. 
    var proj = "";
    if($("#newProject").val()==""){
    	proj = $("#project").val();
    }else{
    	proj = $("#newProject").val();
    }
    var task = $("#task").val();
  	
    $('#dynamic-content').html(''); // leave this div blank
 	$('#modal-loader').show();      // load ajax loader on button click
 
    $.ajax({
    	url: 'mvc_adamVh/model/timeEntryProcess.php',
    	type: 'POST',
    	data: 'project='+proj+'&task='+task,
     	//dataType: 'html'
 	})
 	 
	.done(function(data){
	     console.log(data); 
	     $('#dynamic-content').html(''); // blank before load.
	     $('.modal-title').html('');
	     $('#dynamic-content').html(data); // load here
	     $('.modal-title').html('Time Entry');
	     $('#modal-loader').hide(); // hide loader  
	})
	.fail(function(){
	     $('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Unable to load time entry..');
	     $('#modal-loader').hide();
	});

});

//Beginnings for the user punch out request
$(document).on('click', '#clockOut', function(e){
  		
    e.preventDefault();
    
    //Pass the variable to timeEntryProcess.php which tells it that you're punching out 
    var v = "punchOut";
  	
    $('#dynamic-content').html(''); // leave this div blank
 	$('#modal-loader').show();      // load ajax loader on button click
 
    $.ajax({
    	url: 'mvc_adamVh/model/timeEntryProcess.php',
    	type: 'POST',
    	data: 'req='+v,
     	//dataType: 'html'
 	})
 	 
	.done(function(data){
	     console.log(data); 
	     $('#dynamic-content').html(''); // blank before load.
	     $('.modal-title').html('');
	     $('#dynamic-content').html(data); // load here
	     $('.modal-title').html('Time Entry');
	     $('#modal-loader').hide(); // hide loader  
	})
	.fail(function(){
	     $('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Unable to load time entry..');
	     $('#modal-loader').hide();
	});

});
//End time engry 

//Loads User login screen 
 $(document).on('click', '#userLogin', function(e){	
     e.preventDefault();
  
     //var uid = $(this).data('id'); // get id of clicked row
  
    $('#dynamic-content').html(''); // leave this div blank
 	$('#modal-loader').show();      // load ajax loader on button click
 
     $.ajax({
          url: 'mvc_adamVh/view/userLogin.php',
      dataType: 'html'
 })
 .done(function(data){
      console.log(data); 
      $('#dynamic-content').html(''); // blank before load.
      $('.modal-title').html('');
      $('#dynamic-content').html(data); // load here
      $('.modal-title').html('Log in to adamVh.us');
      $('#modal-loader').hide(); // hide loader  
	 })
	 .fail(function(){
	      $('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong..');
	      $('#modal-loader').hide();
	 });

});
    
    //Log in the user
      /* validation 
	  $("#login-form").validate({
	      rules:
	   {
	   password: {
	   required: true,
	   },
	   user_email: {
	            required: true,
	            email: true
	            },
	    },
	       messages:
	    {
	            password:{
	                      required: "please enter your password"
	                     },
	            user_email: "please enter your email address",
	       },
	    submitHandler: submitForm 
	       });  
	    /* validation */
	    
	    /* login submit 
	    function submitForm(){  */
	   	$(document).on('click', '#btn-login', function(e){
  		
     	e.preventDefault();
		   var data = $("#login-form").serialize();
		    
		   $.ajax({
		    
		   type : 'POST',
		   url  : 'mvc_adamVh/model/loginProcess.php',
		   data : data,
		   beforeSend: function()
		   { 
		    $("#error").fadeOut();
		    $("#btn-login").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
		   },
		   success :  function(response){      
		     if(response=="ok"){  
			     $("#btn-login").html('<img src="mvc_adamVh/view/ajax-loader.gif" /> &nbsp; Signing In ...');
			     setTimeout(' window.location.href = "index.php"; ',2000);
			     $('#dynamic-content').html(''); // leave this div blank
	 			 $('#modal-loader').show();
		     }
		     else{
		     	$("#error").fadeIn(1000, function(){      
		     	$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+' !</div>');
	         	$("#btn-login").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In');
	         	});
		     }
		    }	
		   });
	    return false;
	    
	  });  
 }); 