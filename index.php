<!DOCTYPE html>
<html>
<head>
	<title>Student Manager</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet">
	<!-- UIkit CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.31/css/uikit.min.css" />
	<!-- UIkit JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.31/js/uikit.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.31/js/uikit-icons.min.js"></script>
	<!-- Custom CSS-->
	<link rel="stylesheet" href="style.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
</head>
<body style="">
	<nav class="uk-navbar-container uk-margin" uk-navbar>
    <div class="uk-navbar-center">

        <div class="uk-navbar-center-left"><div>
            <ul class="uk-navbar-nav">
                
                
            </ul>
        </div></div>
        <a class="uk-navbar-item uk-logo uk-text-left" href="#">Student Manager</a>
        <div class="uk-navbar-center-right"><div>
            <ul class="uk-navbar-nav">
                
            </ul>
        </div></div>

    </div>

</nav>
<div class="uk-height-small uk-background-cover uk-light uk-flex" uk-parallax="bgy: -500" style="background-position:0px  100px;margin-top:-20px;background-image: url('001.jpg');">

    <h1 class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical font-montserrat" style="font-size:24px;">Welcome to Student Manager</h1>

</div>
<section class="uk-container uk-margin-medium-top">
	<h3 class="uk-heading-divider font-montserrat">Dashboard</h3>

</section>
<section class="uk-container uk-margin-large-top">

	<div class="uk-child-width-expand@s uk-text-center" uk-grid>
		 <div>
        <div class="uk-card uk-card-default uk-card-body uk-text-left font-ubuntu">
       		<h4 class="font-montserrat uk-text-left"> Add Student</h4>
       		<small>Enter student details</small>

       		<form class="uk-grid-small uk-margin-small-top" uk-grid>
    
    <div class="uk-width-1-2@s">
    	<label class="uk-bold" style="font-weight: bold;font-size: 13px">First Name</label>
        <input class="uk-input" name="fname" id="fname" type="text" placeholder="">
    </div>
    <div class="uk-width-1-2@s">
    	<label class="uk-bold" style="font-weight: bold;font-size: 13px">Last Name</label>
        <input class="uk-input" name="lname" id="lname" type="text" placeholder="">
    </div>
    <div class="uk-width-3-4@s">
    	<label class="uk-bold" style="font-weight: bold;font-size: 13px">Address</label>
        <input class="uk-input" name="address" id="address" type="text" placeholder="">
    </div>
    <div class="uk-width-1-4@s">
    	<label class="uk-bold" style="font-weight: bold;font-size: 13px">Age</label>
        <input class="uk-input" name="age" id="age" type="text" placeholder="">
    </div>
    <div class="uk-width-1-1@s">
    	<input type="button" name="addStudent" id="addStudent" class="uk-button uk-button-default" value="Add">
    	<input type="reset" name="addStudent" class="uk-button uk-button-danger" value="Clear">
    	<span id="adderror"></span>
    </div>
    
    
</form>
    	</div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body uk-text-left">
        	<h4 class="font-montserrat uk-text-left">Update Student Details </h4>
        	<small>Enter Student ID</small>

       		<form class="uk-grid-small uk-margin-small-top" uk-grid>
    
    <div class="uk-width-1-5@s">
    	<label class="uk-bold" style="font-weight: bold;font-size: 13px">Student ID</label>
        <input class="uk-input" id="uid" type="text" placeholder="">
    </div>

      <div class="uk-width-2-5@s">
    	<label class="uk-bold" style="font-weight: bold;font-size: 13px">First Name</label>
        <input class="uk-input" id="ufname" type="text" placeholder="">
    </div>
    <div class="uk-width-2-5@s">
    	<label class="uk-bold" style="font-weight: bold;font-size: 13px">Last Name</label>
        <input class="uk-input" id="ulname" type="text" placeholder="">
    </div>
    <div class="uk-width-3-4@s">
    	<label class="uk-bold" style="font-weight: bold;font-size: 13px">Address</label>
        <input class="uk-input" id="uaddress" type="text" placeholder="">
    </div>
    <div class="uk-width-1-4@s">
    	<label class="uk-bold" style="font-weight: bold;font-size: 13px">Age</label>
        <input class="uk-input" id="uage" type="text" placeholder="">
    </div>

   
    <div class="uk-width-1-1@s">
    	<input type="button" name="updateStudent" id="updateStudent" class="uk-button uk-button-default" value="Update">
    	
    	<span id="error" class="" ></span>
    </div>
    
    
</form>
        </div>
    </div>
    
    
</div>
<div class="uk-child-width-expand@s uk-text-center" uk-grid>
	<div>
        <div class="uk-card uk-card-default uk-card-body uk-text-left">
        	<h4 class="font-montserrat uk-text-left">View Student</h4>
        	<small>Enter Student ID</small>

       		<form class="uk-grid-small uk-margin-small-top" uk-grid>
    
    <div class="uk-width-1-2@s">
    	<label class="uk-bold" style="font-weight: bold;font-size: 13px">Student ID</label>
        <input class="uk-input" id="vid" type="text" placeholder="">
    </div>

   
    <div class="uk-width-1-1@s">
    	<input type="button" name="viewStudent" id="viewStudent" class="uk-button uk-button-default" value="View">
    	<input type="button" name="viewAllStudents" id="viewAllStudents" class="uk-button uk-button-secondary" value="View All">
    	<span id="viewerror"></span>
    </div>
    
    
</form>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body uk-text-left">
        	<h4 class="font-montserrat uk-text-left"> Delete Student</h4>

        	<small>Enter Student ID</small>

       		<form class="uk-grid-small uk-margin-small-top" uk-grid>
    
    <div class="uk-width-1-2@s">
    	<label class="uk-bold" style="font-weight: bold;font-size: 13px">Student ID</label>
        <input class="uk-input" id="delID" type="text" placeholder="">
    </div>

   
    <div class="uk-width-1-1@s">
    	<input type="button" name="deleteStudent" id="deleteStudent" class="uk-button uk-button-danger" value="Delete">
    	<span id="deleteerror"></span>
    </div>
    
    
</form>
        </div>
    </div>
    

</div>
	<!--<div class="uk-column-1-1@s uk-column-1-2@m">
    
</div>

<div class="uk-column-1-1@s uk-column-1-2@m">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>

    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
</div>
	<div class="uk-card uk-card-default uk-card-body uk-width-1-2@m">
    <h3 class="uk-card-title">Default</h3>
    <p>Lorem ipsum <a href="#">dolor</a> sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
</div>-->
	
</section>
<div class="uk-padding-large"></div>
</body>

<script type="text/javascript">
	$('#uid').click(function(event) {
		/* Act on the event */
		$('#updateStudent').val('Update');
	});
	$('#ufname').click(function(event) {
		/* Act on the event */
		$('#updateStudent').val('Update');
	});
	$('#ulname').click(function(event) {
		/* Act on the event */
		$('#updateStudent').val('Update');
	});
	$('#uaddress').click(function(event) {
		/* Act on the event */
		$('#updateStudent').val('Update');
	});
	$('#uage').click(function(event) {
		/* Act on the event */
		$('#updateStudent').val('Update');
	});

	$('#viewAllStudents').click(function(event) {
		/* Act on the event */
		$.ajax({
			url: 'api.php',
			type: 'POST',
			data: {type: 'viewAllStudent'},
		})
		.done(function(response) {
			if(response != 'false'){
				
					$('#viewerror').html('');

					UIkit.modal.dialog('<div class="uk-padding-large "><h5 class="font-montserrat uk-heading-divider">All Student Details</h5>'+response+'<br><input type="button" class="uk-button uk-button-secondary uk-modal-close uk-text-right" value="close" /></div>');
			}
			else{
				$('#viewerror').html('No student record!');
			}
	});
	});

	$('#viewStudent').click(function(event) {

/* Act on the event */
		id = $('#vid').val();
		$.ajax({
			url: 'api.php',
			type: 'POST',
			data: {type: 'viewStudent', id: id},
		})
		.done(function(response) {
			if(response == 'true'){
				id = $('#vid').val();
				$.ajax({
					url: 'api.php',
					type: 'POST',
					data: {type: 'loadStudent', id: id},
				})
				.done(function(response) {
					var details = new Array();
					details = $.parseJSON(response);
					$('#ufname').val(details[1]);
					$('#ulname').val(details[2]);
					$('#uaddress').val(details[3]);

					$('#uage').val(details[4]);
					$('#viewerror').html('');
					UIkit.modal.dialog('<div class="uk-padding-large "><h5 class="font-montserrat uk-heading-divider">Student Details</h5><p class="font-ubuntu" style="font-size:14px">Student ID: '+details[0]+'</p><p class="font-ubuntu" style="font-size:14px">Name: '+details[1]+' '+details[2]+'</p><p class="font-ubuntu" style="font-size:14px">Address: '+details[3]+'</p><p class="font-ubuntu" style="font-size:14px">Age: '+details[4]+'</p><br><input type="button" class="uk-button uk-button-secondary uk-modal-close uk-text-right" value="close" /></div>');
					console.log("success");
				})
				.fail(function() {
					console.log("error");
				})
				.always(function() {
					console.log("complete");
				});
				
			}
			else{
				$('#viewerror').html('<span class="uk-margin-small-left uk-text-danger uk-padding-small" style="font-size: 13px;border:1px solid red;border-radius:4px">StudentID does not exist!</span>');
			}
			console.log("success");
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});	});

	$('#updateStudent').click(function(event) {
		/* Act on the event */
		uid = $('#uid').val();
		ufname = $('#ufname').val();
        ulname = $('#ulname').val();
        uaddress = $('#uaddress').val();
        uage = $('#uage').val();
        if (uid == '') {
        	console.log('Failed');
        }
        else{

        $.ajax({
        	url: 'api.php',
        	type: 'POST',
        	data: {type: 'updateStudent', id: uid, fname: ufname, lname: ulname, address: uaddress, age: uage},
        	beforeSend: function () {
                $('#updateStudent').val("Updating...");
            }
        })
        .done(function(response) {
        	if(response == 'true'){
        		$('#updateStudent').val('Updated');
        		//UIkit.modal.dialog('<div class="uk-padding-large uk-heading-divider"><h5 class="font-montserrat">Student Details</h5><p class="font-ubuntu" style="font-size:14px">Student ID: </p><p>Name: </p><p>Address: </p><p>Age: </p><br><input type="button" class="uk-button uk-button-secondary uk-modal-close uk-text-right" value="close" /></div>');
        	}
        	else{
        		$('#updateStudent').val('Retry');
        	}
        	console.log("success");
        })
        .fail(function() {
        	console.log("error");
        })
        .always(function() {
        	console.log("complete");
        });
    }
        
	});


	$('#addStudent').click(function(event) {
                        /* Act on the event */
                        fname = $('#fname').val();
                        lname = $('#lname').val();
                        address = $('#address').val();
                        age = $('#age').val();
                        if(lname == '' || fname == '' || address == '' || age == ''){
                                $('#adderror').html('<span class="uk-margin-small-left uk-text-danger uk-padding-small" style="font-size: 13px;border:1px solid red;border-radius:4px">Some fields are empty!</span>');
                        }else{
                        $.ajax({
                                url: 'api.php',
                                type: 'POST',
                                data: {type: 'addStudent', fname: fname, lname: lname, address: address, age: age},
                                beforeSend: function () {
                                $('#addStudent').val("Please Wait...");
                        }
                        })
                        
                        .done(function(response) {
                                console.log("success");
                                if (response == 'true') {
                                    
                                     $('#addStudent').val("Saved!");
                                      setTimeout(function(){
                                      	$('#fname').val('');
                                      	$('#lname').val('');
                                      	$('#address').val('');
                                      	$('#age').val('');
                                        $('#addStudent').val("Add");
                                      },2000); 
                                }
                                else{
                                        $('#adderror').html('<span class="uk-margin-small-left uk-text-danger uk-padding-small" style="font-size: 13px;border:1px solid red;border-radius:4px">Unable to save!</span>');
                       
                                }
                               
                                
                        })
                        .fail(function(jqXHR, exception) {
                                var msg = '';
                                if (jqXHR.status === 0) {
                                    msg = '<span class="text-ff-red"><i class="fa fa-plug"></i>&nbsp&nbspOops! Looks like you aren\'t connected to the internet!</span>';
                                } else if (jqXHR.status == 404) {
                                    msg = 'Requested page not found. [404]';
                                } else if (jqXHR.status == 500) {
                                    msg = 'Internal Server Error [500].';
                                } else if (exception === 'parsererror') {
                                    msg = 'Requested JSON parse failed.';
                                } else if (exception === 'timeout') {
                                    msg = 'Timeout Error!.';
                                } else if (exception === 'abort') {
                                    msg = 'Request aborted.';
                                } else {
                                    msg = 'Uncaught Error.\n' + jqXHR.responseText;
                                }
                                $('#addStudent').val("Retry");
                                UIkit.notification(msg);
                                console.log("error");
                        })
                        .always(function() {
                                console.log("complete");
                        });
                }
                        
                });
	$('#uid').keyup(function(event) {
		/* Act on the event */
		id = $('#uid').val();
		$.ajax({
			url: 'api.php',
			type: 'POST',
			data: {type: 'viewStudent', id: id},
		})
		.done(function(response) {
			if(response == 'true'){
				id = $('#uid').val();
				$.ajax({
					url: 'api.php',
					type: 'POST',
					data: {type: 'loadStudent', id: id},
				})
				.done(function(response) {
					var details = new Array();
					details = $.parseJSON(response);
					$('#ufname').val(details[1]);
					$('#ulname').val(details[2]);
					$('#uaddress').val(details[3]);
					$('#uage').val(details[4]);
					console.log("success");
				})
				.fail(function() {
					console.log("error");
				})
				.always(function() {
					console.log("complete");
				});
				
			}
			else{
				$('#ufname').val('');
					$('#ulname').val('');
					$('#uaddress').val('');
					$('#uage').val('');
			}



			console.log("success");
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
		
	});
	
	$('#deleteStudent').click(function(event) {
                        /* Act on the event */
                       
                        id = $('#delID').val();
                        
                        if(id == '' ){
                                $('#deleteerror').html('<span class="uk-margin-small-left uk-text-danger uk-padding-small" style="font-size: 13px;border:1px solid red;border-radius:4px">Enter Student ID</span>');
                        }
                        else{
                        $.ajax({
                                url: 'api.php',
                                type: 'POST',
                                data: {type: 'deleteStudent', id: id},
                                beforeSend: function () {
                                $('#deleteStudent').val("Please Wait...");
                        }
                        })
                        
                        .done(function(response) {
                                console.log("success");
                                if (response == 'true') {
                                    
                                     $('#deleteStudent').val("Deleted!!");
                                     $('#deleteerror').fadeOut();	
                                      setTimeout(function(){
                                      	$('#delID').val('');
                                      	
                                        $('#deleteStudent').val("Delete");
                                      },2000); 
                                }
                                else{
                                        $('#deleteerror').html('<span class="uk-margin-small-left uk-text-danger uk-padding-small" style="font-size: 13px;border:1px solid red;border-radius:4px">StudentID not found!</span>');
                                        $('#deleteStudent').val("Retry");
                                }
                               
                                
                        })
                        .fail(function(jqXHR, exception) {
                                var msg = '';
                                if (jqXHR.status === 0) {
                                    msg = '<span class="text-ff-red"><i class="fa fa-plug"></i>&nbsp&nbspOops! Looks like you aren\'t connected to the internet!</span>';
                                } else if (jqXHR.status == 404) {
                                    msg = 'Requested page not found. [404]';
                                } else if (jqXHR.status == 500) {
                                    msg = 'Internal Server Error [500].';
                                } else if (exception === 'parsererror') {
                                    msg = 'Requested JSON parse failed.';
                                } else if (exception === 'timeout') {
                                    msg = 'Timeout Error!.';
                                } else if (exception === 'abort') {
                                    msg = 'Request aborted.';
                                } else {
                                    msg = 'Uncaught Error.\n' + jqXHR.responseText;
                                }
                                $('#deleteStudent').val("Retry");
                                UIkit.notification(msg);
                                console.log("error");
                        })
                        .always(function() {
                                console.log("complete");
                        });
                }
                        
                });
</script>
</html>