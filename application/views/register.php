<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>BIC Portal</title>

  <!-- Custom fonts for this template-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/sb-admin-2.css">


</head>

<body class="bg-gradient-warning">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" action="<?php echo base_url(); ?>user/start_business_registration" method="post">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
				  <label class="">Trade Name</label>
                    <input type="text" class="form-control form-control-user" name="tradename" id="tradename" placeholder="Business Trade Name">
                  </div>
                  <div class="col-sm-6">
				  <label class="">Registered Name</label>
                    <input type="text" class="form-control form-control-user" name="registeredname" id="registeredname" placeholder="Registered Business Name">
                  </div>
                </div><br/>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
				  <label class="">Registration Date</label>
                    <input type="date" class="form-control form-control-user" name="regdate" id="regdate" placeholder="Business Trade Name">
                  </div>
                  <div class="col-sm-6">
				  <label class="">Registration Number</label>
                    <input type="text" class="form-control form-control-user" name="regnum" id="regnum" placeholder="Registered Business Name">
                  </div>
                </div><br/>
				<div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
				  <label class="">Sector</label>
                    <select class="form-control" name="" id="sector">
					<option value="Agriculture">Agriculture</option>
					<option value="Construction/Engineering">Construction/Engineering</option>
					<option value="Manufacturing">Manufacturing</option>
					<option value="Trade/Services">Trade/Services</option>
					</select>
                  </div>
                  <div class="col-sm-6">
				  <label class="">Province</label>
                    <select class="form-control" name="" id="province">
					 <option value="Eastern Cape">Eastern Cape</option>
					 <option value="Free State">Free State</option>
					 <option value="Gauteng">Gauteng</option>
					 <option value="KwaZulu-Natal">KwaZulu-Natal</option>
					 <option value="Limpopo">Limpopo</option>
					 <option value="Mpumalanga">Mpumalanga</option>
					 <option value="Northern Cape">Northern Cape</option>
					 <option value="North West">North West</option>
					 <option value="Western Cape">Western Cape</option>
					</select>
                  </div>
                </div><br/>
				<div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
				  <label class="">Town</label>
                    <input type="text" class="form-control form-control-user" name="town" id="town" placeholder="Town">
                  </div>
                  <div class="col-sm-6">
				  <label class="">Add Contact Person</label><br/>
                    <a data-toggle="modal" data-target="#PersonModal"><button class="btn btn-success">Add</button></a>
                  </div>
                </div><br/>
				<div class='row'><input id="Duration" type="checkbox" value="">&nbsp My business is 24 months or older</input>   <div id="error" class="text-danger">Your business registration number shows that it not been registered for 2 or more years. Unfortunately you are not eligible to enter the competition. Please try again next year.</div></div><hr/>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
				  <label class=""></label>
                    <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Password">
                  </div>
                  <div class="col-sm-6">
				  <label class=""></label>
                    <input type="password" class="form-control form-control-user" name="repassword" id="repassword" placeholder="Confirm Password">
                  </div>
                </div><br/>
				
                <a data-toggle="modal" data-target="#AcknowledgementModal" href="Application.html" class="btn btn-info btn-user btn-block">
                  Please acknowledge the following 
                </a>
				<br/>
                <div id="subbro"><button class="btn btn-google btn-user btn-block" type="submit" name="action">
                  Register Account
                </button></div>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="login.html">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  
  <!-- Company Person Modal-->
	 <!-- <form action="<?php echo base_url(); ?>user/getPersonDetails" method="post" id="frmContact"> -->
	 
    <div class="modal fade" id="PersonModal" tabindex="-1" role="dialog" aria-labelledby="PersonModal" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
				<form action="#" id="form_user" class="form-horizontal">
          <div class="modal-header">
            <h5 class="modal-title" name="exampleModalLabel">Add Contact Person</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"></span>
            </button>
          </div>
		     
          <div class="modal-body">		 
            <div class='form-group row'>
                        <div class='col-md-6 col-lg-6 text-center'>
                        <label class='col-form-label'><strong>Title</strong></label>
                        <select class="form-control" name="" id="title">
						 <option value="Ms">Ms</option>
						 <option value="Mr">Mr</option>
						 <option value="Dr">Dr</option>
						 <option value="Prof">Prof</option>
						 <option value="Rev">Rev</option>
						</select>
                        </div>
                        <div class='col-md-6 col-lg-6 text-center'>
                        <label class='col-form-label'><strong>Firstname</strong></label>
                        <input type="text" class='form-control text-center' name="firstname" placeholder="Firstname" id="firstname"> <!--new-->
                        </div>
                  </div><!-- End Of Row-->
                  <div class='form-group row'>
                        <div class='col-md-6 col-lg-6 text-center'>
                        <label class='col-form-label'><strong>Surname</strong></label>
                        <input type="text" class='form-control text-center' name="surname" placeholder="Surname" id="surname">
                        </div>

                        <div class='col-md-6 col-lg-6 text-center'>
                        <label class='col-form-label'><strong>Email</strong></label>
                        <input type="email" class='form-control text-center' name="email" placeholder="Email" id="email"> <!--new-->
                        </div>
                  </div><!-- End Of Row-->
				  <div class='form-group row'>
                        <div class='col-md-6 col-lg-6 text-center'>
                        <label class='col-form-label'><strong>Gender</strong></label>
                        <!-- <select class="form-control" name="gender" onchange="yesnoCheck(this);"> -->
												<select class="form-control" name="gender" id="gender">
						 <option value="Female">Female</option>
						 <option value="Male">Male</option>
						 <option value="Yes">Other</option>
						</select>
						<div id="ifYes" style="display: none;">
							<!-- <div class='row'>
							<label  class='col-form-label'><strong>Please Specify Gender</strong></label>
							<input  class='form-control' type='text' name="othergender" id="othergender"/>
                            </div>
							<br/> -->
						</div>
                        </div>
                        <div class='col-md-6 col-lg-6 text-center'>
                        <label class='col-form-label'><strong>Dietary Requirements </strong></label>
                        <input type="text" class='form-control text-center' id="diet" name="diet" placeholder="Dietary Requirements">
                        </div>
                  </div><!-- End Of Row-->
				  <div class='form-group row'>
                        <div class='col-md-6 col-lg-6 text-center'>
                        <label class='col-form-label'><strong>Disability Requirements</strong></label>
                        <input type="text" class='form-control text-center' id="disability" name="disability" placeholder="Disability Requirements">
                        </div>

                        <div class='col-md-6 col-lg-6 text-center'>
                        <label class='col-form-label'><strong>Closest Transportation</strong></label>
                        <input type="text" class='form-control text-center' id="transport" name="transport" placeholder="Closest Transportation">
                        </div>
                  </div><!-- End Of Row-->
                  <div class='form-group row'>
                        <div class='col-md-6 col-lg-6 text-center'>
                        <label class='col-form-label'><strong>Cellphone</strong></label>
                        <input required="true" type="number" class='form-control text-center' id="cellphone" name="cellphone" placeholder="Cellphone">
                        </div>

                        <div class='col-md-6 col-lg-6 text-center'>
                        <label class='col-form-label'><strong>Position</strong></label>
                        <input type="text" class='form-control text-center' id="position" name="position" placeholder="Position In Business">
                        </div>
                  </div><!-- End Of Row-->
       
	   
            
          </div>
					</form>
          <div class="modal-footer">
            <button class="btn btn-primary" id ="save" onclick="save()">Add Person</button>
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button><!--End Session-->
          </div>
        </div>
      </div>
    </div>
		
    <!-- End Add Company Person Modal-->
	
	<!-- Acknowledgement Modal-->
    <div class="modal fade" id="AcknowledgementModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" >
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" name="exampleModalLabel">Please acknowledge the following</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"></span>
            </button>
          </div>
          <div class="modal-body">
                <div class='row'><input type="checkbox" value="">&nbsp My business is a small / medium enterprise.</input></div><hr/>
				<div class='row'><input type="checkbox" value="">&nbsp  My business is  100% South African owned.</input></div><hr/>
				<div class='row'><input type="checkbox" value="">&nbsp  My business is 100% Black-owned.</input></div><hr/>
				<div class='row'><input type="checkbox" value="">&nbsp  I / my business is not a previous overall or category winner of BIC .</input></div><hr/>	
                <div class='row'><input type="checkbox" value=""/>&nbsp  All the information I have and will provide in the rest of the </div>
				<div class='row'> &nbsp &nbsp &nbsp entry is truthful and my own.</div><hr/>
				<div class='row'><input type="checkbox" value="">&nbsp  I give Eskom permission to communicate with me</input></div>
				<div class='row'>&nbsp &nbsp &nbsp  about BIC competition</div><hr/>
				<div class='row'><input type="checkbox" value="">&nbsp  I have read and understand the <a href="Terms.html">&nbsp terms and conditions</a></input></div><hr/>
            </div>
      </div>
    </div>
    <!-- End Acknowledgement Modal-->

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- Custom scripts for all pages-->
  <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url(); ?>assets/js/sb-admin-2.min.js"></script>

  <script>
	function store(){
		data = {};
		$('#frmContact').submit(function(e) {
			// $('#frmContact').submit(function() {
			e.preventDefault();
			// Coding
			//$('#PersonModal').modal('toggle'); 
			//or  
			//Collect data
			data.select = $("#title").value();
			$('#PersonModal').modal('hide');
			//return false;
		});
		console.log(data);
	}
	
	function save()
	{
		$('#btnSave').text('saving...'); //change button text
		$('#btnSave').attr('disabled',true); //set button disable
		var url;

		// if(save_method == 'add') {
		// 	url = "<?php echo base_url('user/addStudent'); ?>";
		// } else {
		// 	url = "<?php echo base_url('user/updateStudent');?>";
		// }

		var formData = new FormData($('#form_user')[0]);

		console.log(formData);

		// Display the key/value pairs
		for (var pair of formData.entries()) {
			//ID -> Value
			console.log(pair[0]+ ', ' + pair[1]); 
		}

		// $.ajax({
		// 	url : url,
		// 	type: "POST",
		// 	data: formData,
		// 	contentType: false,
		// 	processData: false,
		// 	dataType: "JSON",
		// 	success: function(data)
		// 	{
		// 		if(data.status) //if success close modal and reload ajax table
		// 		{
		// 			$('#modal_form').modal('hide');
		// 			reload_table();
		// 		}
		// 		else
		// 		{

		// 			for (var i = 0; i < data.inputerror.length; i++)
		// 			{
		// 				$('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
		// 				$('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
		// 			}
		// 		}
		// 		$('#btnSave').text('save'); //change button text
		// 		$('#btnSave').attr('disabled',false); //set button enable

		// 	},
		// 	error: function (jqXHR, textStatus, errorThrown)
		// 	{
		// 		alert('Error adding / update data');
		// 		$('#btnSave').text('save'); //change button text
		// 		$('#btnSave').attr('disabled',false); //set button enable

		// 	}
		// });
	}

  </script>

</body>

</html>
