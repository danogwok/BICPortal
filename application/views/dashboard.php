<!-- 
 ********PLease NOte***********
 Where there's a select tag and option for other,
 they'll be a 'please specify input field'
 please ensure that that value is added to the database
-->

<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
					<meta name="description" content="">
						<meta name="author" content="">


							<title>Dashboard</title>

							<!-- Custom fonts for this template-->
							<link href="<?php echo base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
								<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

									<!-- Custom styles for this template-->
									<link href="<?php echo base_url(); ?>assets/css/sb-admin-2.css" rel="stylesheet">

										<link href="<?php echo base_url(); ?>assets/js/sweetalert.css" rel="stylesheet" />


										<!-- For the scrolling modal -->
										<link href="<?php echo base_url(); ?>assets/css/cart.css" rel="stylesheet"/>

										<!-- Custom scripts for all pages-->
										<script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
										<script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>

									</head>

									<body id="page-top">

										<!-- Page Wrapper -->
										<div id="wrapper">

											<!-- Sidebar -->
											<ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar">

												<!-- Sidebar - Brand --><br/>
												<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
													<div class="sidebar-brand-icon rotate-n-15">
														<!-- Sidebar <i class="fas fa-laugh-wink"></i>-->
													</div>
													<div class="sidebar-brand-text mx-3"><img src="<?php echo base_url(); ?>assets/Images/Logo2.png" style="width:240px;height:110px;"></div>
													</a>

													<!-- Divider 
      <hr class="sidebar-divider my-0">-->

													<!-- Nav Item - Dashboard --><br/>
													<li class="nav-item active">
														<a class="nav-link" href="index.html">
															<i class="fas fa-fw fa-tachometer-alt"></i>
															<span>Dashboard</span></a>
													</li>

													<!-- Divider -->
													<hr class="sidebar-divider">

														<!-- Heading -->
														<div class="sidebar-heading">
        Interface
														</div>

														<!-- Need To Know -->
														<li class="nav-item">
															<a class="nav-link collapsed" href="Application.html" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
																<i class="fas fa-fw fa-folder"></i>
																<span>What you need to know</span>
															</a>
															<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
																<div class="bg-white py-2 collapse-inner rounded">
																	<a class="collapse-item" href="aboutbic.html">About BIC</a>
																</div>
															</div>
															<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
																<div class="bg-white py-2 collapse-inner rounded">
																	<a class="collapse-item" href="ApplicationDetails.html">Application & Adjudication</a>
																</div>
															</div>
															<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
																<div class="bg-white py-2 collapse-inner rounded">
																	<a class="collapse-item" href="EntryCheckList.html">Entry Checklist</a>
																</div>
															</div>
														</li>
														<!-- End Need To Know -->

														<!-- Nav Item - Application Form -->
														<li class="nav-item">
															<a class="nav-link collapsed" href="Application.html" data-toggle="collapse" data-target="#collapseUtilities1" aria-expanded="true" aria-controls="collapseUtilities">
																<i class="fas fa-fw fa-folder"></i>
																<span>Application Form</span>
															</a>
															<div id="collapseUtilities1" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
																<div class="bg-white py-2 collapse-inner rounded">
																	<a class="collapse-item" href="Application.html">View Application</a>
																</div>
															</div>
														</li>
														<!-- End Nav Item - Application Form -->



														<!-- Divider -->
														<hr class="sidebar-divider">

															<!-- Heading -->
															<div class="sidebar-heading">
        Addons
															</div>


															<!-- Nav Item - Terms and Conditions -->
															<li class="nav-item">
																<a class="nav-link" href="Terms.html">
																	<i class="fas fa-fw fa-comments"></i>
																	<span>Terms and Conditions</span></a>
															</li>

															<!-- Nav Item - Help -->
															<li class="nav-item">
																<a class="nav-link" href="help.html">
																	<i class="fas fa-fw fa-comments"></i>
																	<span>Help</span></a>
															</li>

															<!-- Nav Item - Logout -->
															<li class="nav-item">
																<a class="nav-link" href="<?php echo base_url(); ?>user/logout">
																	<i class="fas fa-fw fa-chart-area"></i>
																	<span>FAQ's</span></a>
															</li>

															<!-- Nav Item - Contact Us -->
															<li class="nav-item">
																<a class="nav-link" href="#">
																	<i class="fas fa-fw fa-comments"></i>
																	<span>Contact Us</span></a>
															</li>


															<!-- Nav Item - Logout -->
															<li class="nav-item">
																<a class="nav-link" href="<?php echo base_url(); ?>user/logout">
																	<i class="fas fa-fw fa-chart-area"></i>
																	<span>Logout</span></a><!--****
                                       Please end the session for the logoout modal
                                    ****-->
															</li>


															<!-- Divider -->
															<hr class="sidebar-divider d-none d-md-block">

																<!-- Sidebar Toggler (Sidebar) -->
																<div class="text-center d-none d-md-inline">
																	<button class="rounded-circle border-0" id="sidebarToggle"></button>
																</div>

															</ul>
															<!-- End of Sidebar -->

															<!-- Content Wrapper -->
															<div id="content-wrapper" class="d-flex flex-column">

																<!-- Main Content -->
																<div id="content">

																	<!-- Topbar -->
																	<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

																		<!-- Sidebar Toggle (Topbar) -->
																		<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
																			<i class="fa fa-bars"></i>
																		</button>



																		<!-- Topbar Navbar -->
																		<ul class="navbar-nav ml-auto">

																			<!-- Nav Item - Search Dropdown (Visible Only XS) -->
																			<li class="nav-item dropdown no-arrow d-sm-none">
																				<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																					<i class="fas fa-search fa-fw"></i>
																				</a>
																				<!-- Dropdown - Messages -->
																				<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
																					<form class="form-inline mr-auto w-100 navbar-search">
																						<div class="input-group">
																							<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
																								<div class="input-group-append">
																									<button class="btn btn-primary" type="button">
																										<i class="fas fa-search fa-sm"></i>
																									</button>
																								</div>
																							</div>
																						</form>
																					</div>
																				</li>


																				<!--*********************Display Session Here**************--> 
																				<li class="nav-item dropdown no-arrow">
																					<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																						<span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $userFirstname.' '.$userSurname; ?></span>
																					</a>
																				</li>

																			</ul>

																		</nav>
																		<!-- End of Topbar -->

																		<!-- Begin Page Content -->
																		<div class="container-fluid center">

																			<!-- Page Heading -->
																			<div class="d-sm-flex align-items-center justify-content-between mb-4">
																				<h1 class="h3 mb-0 text-gray-800">Application form</h1>
																			</div>

																			<!--***************Progress Bar******************-->
																			<div class="row" style="text-align:center;"><!--Row Start-->
																				<div class="col-md-7 col-md-offset-12" >
																					<div class="login-panel panel panel-info">
																						<div class="panel-heading center">
																							<div class="card shadow mb-4">
																								<div class="card-header py-3">
																									<h6 class="m-0 font-weight-bold text-primary">Application</h6>
																								</div>
																								<div class="card-body">
																									<h4 class="small font-weight-bold">Completion<span class="float-right">30%</span></h4>
																									<div class="progress mb-4">
																										<div class="progress-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
																									</div>
																								</div>
																							</div>
																						</div>
																						<div class="panel-body">
																							<a data-toggle="modal" data-target="#AcknowledgementModal"><button class="btn btn-lg btn-info btn-block center"><i class="far fa-check-circle bg-success"></i>&nbsp How did you learn about competition</button></a><hr>
																								<a data-toggle="modal" data-target="#CompanyDetailsModal"><button class="btn btn-lg btn-info btn-block center"><i class="far fa-check-circle bg-success"></i>&nbsp Company Details</button></a><hr>
																									<a data-toggle="modal" data-target="#AboutBusinessModal"><button class="btn btn-lg btn-info btn-block center"><i class="far fa-check-circle bg-success"></i>&nbsp About Business</button></a><hr>
																										<a data-toggle="modal" data-target="#CorporateGovernanceModal"><button class="btn btn-lg btn-info btn-block center"><i class="far fa-check-circle bg-danger"></i>&nbsp Corporate Governance</button></a><hr>
																											<a data-toggle="modal" data-target="#FinanceModal"><button class="btn btn-lg btn-info btn-block center"><i class="far fa-check-circle bg-danger"></i>&nbsp Finances</button></a><hr>
																												<a data-toggle="modal" data-target="#AccountabilityModal"><button class="btn btn-lg btn-info btn-block center"><i class="far fa-check-circle bg-success"></i>&nbsp Financial Accountability</button></a><hr>
																													<a data-toggle="modal" data-target="#BeneficiaryModal"><button class="btn btn-lg btn-info btn-block center"><i class="far fa-check-circle f-success"></i>&nbsp Beneficiaries</button></a><hr>
																														<a data-toggle="modal" data-target="#InfrastructureModal"><button class="btn btn-lg btn-info btn-block center"><i class="far fa-check-circle f-success"></i>&nbsp Infrastructure</button></a><hr>
																															<a data-toggle="modal" data-target="#MarketingModal"><button class="btn btn-lg btn-info btn-block center"><i class="far fa-check-circle f-success"></i>&nbsp Marketing & Sales</button></a><hr>
																																<a data-toggle="modal" data-target="#FeasibilityModal"><button class="btn btn-lg btn-info btn-block center"><i class="far fa-check-circle f-success"></i>&nbsp Feasibility & Sustainability</button></a><hr>
																																	<a data-toggle="modal" data-target="#MotivationModal"><button class="btn btn-lg btn-info btn-block center"><i class="far fa-check-circle f-success"></i>&nbsp Motivations</button></a><hr>
																																		<a data-toggle="modal" data-target="#UndertakingModal"><button class="btn btn-lg btn-info btn-block center"><i class="far fa-check-circle f-success"></i>&nbsp Undertaking</button></a><hr>
																																			<a href="importantdocs.html"><button class="btn btn-lg btn-info btn-block center"><i class="far fa-check-circle f-success"></i>&nbsp Important Documents</button></a><hr>

																																			</div>
																																		</div>
																																	</div>
																																</div><!--Row End-->
																																<!--End Registration Form -->



																																<!-- Footer -->
																																<footer class="sticky-footer bg-white">
																																	<div class="container my-auto">
																																		<div class="copyright text-center my-auto">
																																			<span>Copyright &copy; Eskom BIC 2019</span>
																																			<a href=""><span>&nbsp Terms and Conditions</span></a>
																																			<a href=""><span>&nbsp Help</span></a>
																																		</div>
																																	</div>
																																</footer>
																																<!-- End of Footer -->

																															</div>
																															<!-- End of Content Wrapper -->

																														</div>
																														<!-- End of Page Wrapper -->

																														<!-- Scroll to Top Button-->
																														<a class="scroll-to-top rounded" href="#page-top">
																															<i class="fas fa-angle-up"></i>
																														</a>

																														<!-- 
    Please end the session for the logoout modal
  -->
																														<!-- Logout Modal-->
																														<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
																															<div class="modal-dialog" role="document">
																																<div class="modal-content">
																																	<div class="modal-header">
																																		<h5 class="modal-title" id="exampleModalLabel">?</h5>
																																		<button class="Save" type="button" data-dismiss="modal" aria-label="Close">
																																			<span aria-hidden="true">x</span>
																																		</button>
																																	</div>
																																	
                                                                  <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
																																	<div class="modal-footer">
																																		<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
																																		<a class="btn btn-primary" href="<?php echo base_url(); ?>user/logout">Logout</a>
																																	</div>
																																</div>
																															</div>
																														</div>


																														<!-- Add this details to Contactperson table, you can use a session for the user id
  
  -->
																														<!-- How did you find out Modal-->
                                                            <form action="#" id="learn">
																														<div class="modal fade" id="AcknowledgementModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
																															<div class="modal-dialog" role="document">
																																<div class="modal-content">
																																	<div class="modal-header">
																																		<h5 class="modal-title" id="exampleModalLabel"></h5>
																																		<button class="Save" type="button" data-dismiss="modal" aria-label="Close">
																																			<span aria-hidden="true">x</span>
																																		</button>
																																	</div>
																																	<div class="modal-body">
																																		<h4> How did you learn about the competition</h4>
																																		<select class="form-control" name="exposure" onchange="yesnoCheck8(this);">
																																			<option value="Facebook">Facebook</option>
																																			<option value="Eskom website">Eskom website</option>
																																		<option value="Email">Email</option>
																																		<option value="Through a business organization"> Through a business organization/industry body</option>
																																		<option value="Newspaper">Newspaper</option>
																																		<option value="Radio">Radio</option>
																																		<option value="TV">TV</option>
																																		<option value="Otherexposure">Other</option>
																																	</select>
																																	<div id="ifother8" style="display: none;">
																																		<div class='row'>
																																			<label  class='col-form-label'><strong>Please Specify</strong></label>
																																			<input  class='form-control' type='text' name="otherexposure"/>
																																		</div>
																																		<br/>
																																	</div>


																																</div>
																																<div class="modal-footer">
																																	<div class='col-md-2' >
																																		<button class='btn btn-info' onclick="submitModalData('learn')" data-dismiss="modal">Save</button>
																																	</div>
																																</div>
																															</div>
																														</div>
																													</div>
                                                          </form>
																													<!-- End How did you find out Modal-->


																													<!--******* These details must go in business table, also
       some of these fields must be pre-poulated from registration page
       company person html is at the bottom of this html page	 
    **********	   
   -->

																													<!-- CompanyDetailsModal Modal-->
																													<div class="modal fade bd-example-modal-lg" id="CompanyDetailsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
																														<div class="modal-dialog modal-xl" >
																															<div class="modal-content">
																																<div class="modal-header">
																																	<h5 class="modal-title" name="exampleModalLabel">Company Details</h5>
																																	<button class="Save" type="button" data-dismiss="modal" aria-label="Close">
																																		<span aria-hidden="true">x</span>
																																	</button>
																																</div>
																																<div class="modal-body">

																																	<div id="myCarousel1" class="carousel slide" data-ride="carousel" data-interval="0">
																																		<!-- Indicators -->
																																		<ol class="carousel-indicators">
																																			<li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
																																			<li data-target="#myCarousel1" data-slide-to="1"></li>
																																			<li data-target="#myCarousel1" data-slide-to="2"></li>
																																			<li data-target="#myCarousel1" data-slide-to="3"></li>
																																		</ol>

																																		<!-- Wrapper for slides -->
																																		<div class="carousel-inner">

																																			<div class="item active">
																																				<div class='form-group row'>
																																					<div class='col-md-6 col-lg-6'>
																																						<label  class='col-form-label'><strong>Trade Name </strong></label>
																																						<input  class='form-control' placeholder='Trade Name' name='tadename' type='text' />
																																					</div>
																																					<div class='col-md-6 col-lg-6'>
																																						<label  class='col-form-label'><strong>Registered Name </strong></label>
																																						<input  class='form-control' placeholder='Registered Name' name='regname' type='text' />
																																					</div></div>
																																				<br />
																																				<div class='form-group row'>
																																					<div class='col-md-6 col-lg-6'>
																																						<label  class='col-form-label'><strong>Registration Date</strong></label>
																																						<input class='form-control' name='regdate' type='date' />
																																					</div>
																																					<div class='col-md-6 col-lg-6'>
																																						<label  class='col-form-label'><strong>Registration Number</strong></label>
																																						<input class='form-control' name='regno' placeholder='Registration Number' type='text' />
																																					</div>
																																				</div>
																																				<br />
																																				<div class='form-group row'>
																																					<div class='col-md-6 col-lg-6'>
																																						<label  class='col-form-label'><strong>Sector</strong></label>
																																						<select class="form-control" name="sector">
																																							<option value="Agriculture">Agriculture</option>
																																							<option value="Construction/Engineering">Construction/Engineering</option>
																																							<option value="Manufacturing">Manufacturing</option>
																																							<option value="Trade/Services">Trade/Services</option>
																																						</select>
																																					</div>
																																					<div class='col-md-6 col-lg-6'>
																																						<label  class='col-form-label'><strong>Contact Person</strong></label><br/>
																																						<a data-toggle="modal" data-target="#PersonModal"><button class="btn btn-success">View</button></a>
																																					</div><br />
																																				</div>
																																			</div>


																																			<div class="item">
																																				<div class='form-group row'>
																																					<div class='col-md-6 col-lg-6'>
																																						<label  class='col-form-label'><strong>Income Tax Number</strong></label>
																																						<input  class='form-control' name="taxno" placeholder='Income Tax Number' type='text'/></div>
																																					<div class='col-md-6 col-lg-6'>
																																						<label class='col-form-label'><strong>Business VAT Number</strong></label>
																																						<input  class='form-control' name="vatno" placeholder='Business VAT Number' type='text' />
																																						<br/>
																																					</div>
																																				</div>
																																				<div class='form-group row'>
																																					<label  class='col-form-label'><strong>&nbsp &nbsp Municipality</strong></label>
																																					<input  class='form-control' placeholder='Municipality' name='municipality' type='text'/>
																																				</div>
																																				<div class='form-group row'>
																																					<label  class='col-form-label'><strong>&nbsp &nbsp Business Physical Address</strong></label>
																																					<textarea  rows="3" name='physicaladdress' class='form-control' name='' type='text'></textarea>
																																				</div>
																																				<br />
																																				<div class='form-group row'>
																																					<label class='col-form-label'><strong>&nbsp &nbsp Postal Code</strong></label>
																																					<input  class='form-control' placeholder='Postal Code' name='postalcode' type='number' />
																																				</div>
																																			</div>

																																			<div class="item">
																																				<div class='form-group row'>
																																					<label  class='col-form-label'><strong>&nbsp &nbsp Postal Address</strong></label>
																																					<textarea  rows="3" name='postaladdress' class='form-control' name='' type='text'></textarea>
																																				</div>
																																				<br />
																																				<div class='form-group row'>
																																					<label class='col-form-label'><strong>&nbsp &nbsp Postal Address Code</strong></label>
																																					<input   class='form-control' placeholder='Postal Code' name='postaladdresscode' type='number' />
																																				</div>

																																				<div class='form-group row'>
																																					<div class='col-md-6 col-lg-6'>
																																						<label class='col-form-label'><strong>Telephone</strong></label>
																																						<input   class='form-control' placeholder='Telephone' name='telephone' type='number' />
																																					</div>
																																					<div class='col-md-6 col-lg-6'>
																																						<label class='col-form-label'><strong>Email</strong></label>
																																						<input   class='form-control' placeholder='Email' name='email' type='email' /> 
																																					</div></div>
																																			</div>


																																			<div class="item">
																																				<div class='form-group row'>
																																					<label  class='col-form-label'><strong>&nbsp &nbspLegal Status of Business:</strong></label>
																																					<select  class="form-control" name="legalstatus" onchange="yesnoCheck9(this);">
																																						<option value="Company (Pty) Ltd">Company (Pty) Ltd</option>
																																						<option value="Closed Corporation (CC)">Closed Corporation (CC)</option>
																																						<option value="Sole proprietor">Sole proprietor</option>
																																						<option value="Trust">Trust</option>
																																						<option value="Partnership">Partnership</option>
																																						<option value="other9">Other (Please Specify)</option><!-- Take only input value not 'other' select option-->
																																					</select>
																																					<div id="ifother9" style="display: none;">
																																						<div class='row'>
																																							<label  class='col-form-label'><strong>&nbsp &nbsp &nbsp &nbsp Please Specify</strong></label>
																																							<input  class='form-control' type='text' name="otherstatus"/>
																																						</div>
																																						<br/>
																																					</div>

																																				</div>
																																			</div>


																																			<!-- Left and right controls -->
																																			<a class="left carousel-control" href="#myCarousel1" data-slide="prev" >
																																				<span class="glyphicon glyphicon-chevron-left"></span>
																																				<span class="sr-only">Previous</span>
																																			</a>
																																			<a class="right carousel-control" href="#myCarousel1" data-slide="next">
																																				<span class="glyphicon glyphicon-chevron-right"></span>
																																				<span class="sr-only">Next</span>
																																			</a>
																																		</div><!--Here is end of slider-->
																																		<div class='col-md-6' >
																																			<button class='btn btn-info'>Save</button>
																																		</div>

																																	</div>
																																</div>
																															</div>
																														</div>
																													</div>
																													<!-- End CompanyDetailsModal Modal-->


																													<!--******* 
  -These details must go in business table.
  -Please see how you can add the checked fields to database..  
  -Please see bootstrap.js line 2400 for adding rows to a table dynamically     	 
    **********	   
   -->
																													<!-- About Business Modal-->
																													<div class="modal fade bd-example-modal-lg" id="AboutBusinessModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
																														<div class="modal-dialog modal-lg" >
																															<div class="modal-content">
																																<div class="modal-header">
																																	<h5 class="modal-title" name="exampleModalLabel">About The Business</h5>
																																	<button class="Save" type="button" data-dismiss="modal" aria-label="Close">
																																		<span aria-hidden="true">x</span>
																																	</button>
																																</div>
																																<div class="modal-body">

																																	<div id="myCarousel3" class="carousel slide" data-ride="carousel" data-interval="0">
																																		<!-- Indicators -->
																																		<ol class="carousel-indicators">
																																			<li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
																																			<li data-target="#myCarousel3" data-slide-to="1"></li>
																																			<li data-target="#myCarousel3" data-slide-to="2"></li>
																																		</ol>

																																		<!-- Wrapper for slides -->
																																		<div class="carousel-inner">

																																			<div class="item active">
																																				<div class='form-group row'>
																																					<label  class='col-form-label'><strong>&nbsp &nbspList the objectives of the business - why was the business started? (e.g. to make bricks for building &nbsp  &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp houses)</strong></label>
																																					<textarea class="form-control" rows="4" name="objectives"></textarea>
																																				</div>
																																				<br />
																																				<div class='form-group row'>
																																					<label  class='col-form-label'><strong>&nbsp &nbsp List the products/services supplied by the business. </strong></label>
																																					<textarea class="form-control" rows="4" name="products/services"></textarea>
																																				</div>
																																				<br />
																																			</div>


																																			<div class="item">
																																				<div class='form-group row'>
																																					<label  class='col-form-label'><strong>&nbsp &nbsp Target market/customers for products/services </strong></label>
																																					<table  class="table table-striped table-bordered table-hover">
																																						<thead>
																																							<tr>
																																								<td>Type of Target Market</td>
																																								<td>Description</td>
																																							</tr>
																																						</thead>
																																						<tbody>
																																							<tr>
																																								<td>Primary (core market)</td>
																																								<td><input class='form-control' name='primarymarket' type='text' /></td>
																																							</tr>
																																							<tr>
																																								<td>Secondary</td>
																																								<td><input class='form-control' name='secondarymarket' type='text' /></td>
																																							</tr>
																																						</tbody>

																																					</table>
																																					<br/>
																																				</div>
																																				<div class='form-group row'>
																																					<label  class='col-form-label'><strong>&nbsp &nbsp Where is your target market located?</strong></label>
																																					<input class='form-control' placeholder='Area' name='area' type='text'/>

																																					<br />
																																				</div>   

																																			</div>

																																			<div class="item">

																																				<div class='form-group row'>
																																					<label class='col-form-label'><strong>&nbsp &nbsp Business hours </strong></label>
																																					<table class="table table-striped table-bordered table-hover">
																																						<thead>
																																							<tr>
																																								<td>Day</td>
																																								<td>Open</td>
																																								<td>Close</td>
																																							</tr>
																																						</thead>
																																						<tbody>
																																							<tr>
																																								<td><!-- Please see how you can add the checked fields to database  -->
																																									<div id="list3" class="dropdown-check-list" tabindex="100">
																																										<span class="anchor">Days</span>
																																										<ul class="items" name="opendays">
																																											<li><input name="" type="checkbox" value="Sunday"/><label>Sunday</label></li>
																																											<li><input name="" type="checkbox" value="Monday"/><label>Monday</label></li>
																																											<li><input name="" type="checkbox" value="Tuesday"/><label>Tuesday</label></li>
																																											<li><input name="" type="checkbox" value="Wednesday"/><label>Wednesday</label></li>
																																											<li><input name="" type="checkbox" value="Thursday"/><label>Thursday</label></li>
																																											<li><input name="" type="checkbox" value="Friday"/><label>Friday</label></li>
																																											<li><input name="" type="checkbox" value="Saturday"/><label>Saturday</label></li>
																																										</ul>
																																									</div>

																																									<style>
									.dropdown-check-list{
									display: inline-block;
									width: 100%;
									}
									.dropdown-check-list:focus{
									outline:0;
									}
									.dropdown-check-list .anchor {
									width: 98%;
									position: relative;
									cursor: pointer;
									display: inline-block;
									padding-top:5px;
									padding-left:5px;
									padding-bottom:5px;
									border:1px #ccc solid;
									}
									.dropdown-check-list .anchor:after {
									position: absolute;
									content: "";
									border-left: 2px solid black;
									border-top: 2px solid black;
									padding: 5px;
									right: 10px;
									top: 20%;
									-moz-transform: rotate(-135deg);
									-ms-transform: rotate(-135deg);
									-o-transform: rotate(-135deg);
									-webkit-transform: rotate(-135deg);
									transform: rotate(-135deg);
									}
									.dropdown-check-list .anchor:active:after {
									right: 8px;
									top: 21%;
									}
									.dropdown-check-list ul.items {
									padding: 2px;
									display: none;
									margin: 0;
									border: 1px solid #ccc;
									border-top: none;
									}
									.dropdown-check-list ul.items li {
									list-style: none;
									}
									.dropdown-check-list.visible .anchor {
									color: #0094ff;
									}
									.dropdown-check-list.visible .items {
									display: block;
									}
																																									</style>

																																									<script>
									jQuery(function ($) {
											var checkList = $('.dropdown-check-list');
											checkList.on('click', 'span.anchor', function(event){
												var element = $(this).parent();

												if ( element.hasClass('visible') )
												{
													element.removeClass('visible');
												}
												else
												{
													element.addClass('visible');
												}
											});
										});

																																									</script>
																																								</td>
																																								<td><!-- ********** Please see how you can add the checked fields to database **************-->
																																									<div id="list3" class="dropdown-check-list" tabindex="100">
																																										<span class="anchor">Select</span>
																																										<ul class="items" name="openhours">
																																											<li><input name="" type="checkbox" value="00:00"/><label>00:00</label></li>
																																											<li><input name="" type="checkbox" value="01:00"/><label>01:00</label></li>
																																											<li><input name="" type="checkbox" value="02:00"/><label></label>02:00</li>
																																											<li><input name="" type="checkbox" value="03:00"/><label></label>03:00</li>
																																											<li><input name="" type="checkbox" value="04:00"/><label></label>04:00</li>
																																											<li><input name="" type="checkbox" value="05:00"/><label></label>05:00</li>
																																											<li><input name="" type="checkbox" value="06:00"/><label></label>06:00</li>
																																											<li><input name="" type="checkbox" value="07:00"/><label></label>07:00</li>
																																											<li><input name="" type="checkbox" value="08:00"/><label></label>08:00</li>
																																											<li><input name="" type="checkbox" value="09:00"/><label></label>09:00</li>
																																											<li><input name="" type="checkbox" value="10:00"/><label></label>10:00</li>
																																											<li><input name="" type="checkbox" value="11:00"/><label></label>11:00</li>
																																											<li><input name="" type="checkbox" value="12:00"/><label></label>12:00</li>
																																											<li><input name="" type="checkbox" value="13:00"/><label></label>13:00</li>
																																											<li><input name="" type="checkbox" value="14:00"/><label></label>14:00</li>
																																											<li><input name="" type="checkbox" value="15:00"/><label></label>15:00</li>
																																											<li><input name="" type="checkbox" value="16:00"/><label></label>16:00</li>
																																											<li><input name="" type="checkbox" value="17:00"/><label></label>17:00</li>
																																											<li><input name="" type="checkbox" value="18:00"/><label></label>18:00</li>
																																											<li><input name="" type="checkbox" value="19:00"/><label></label>19:00</li>
																																											<li><input name="" type="checkbox" value="20:00"/><label></label>20:00</li>
																																											<li><input name="" type="checkbox" value="21:00"/><label></label>21:00</li>
																																											<li><input name="" type="checkbox" value="22:00"/><label></label>22:00</li>
																																											<li><input name="" type="checkbox" value="23:00"/><label></label>23:00</li>
																																										</ul>
																																									</div>

																																									<style>
									.dropdown-check-list{
									display: inline-block;
									width: 100%;
									}
									.dropdown-check-list:focus{
									outline:0;
									}
									.dropdown-check-list .anchor {
									width: 98%;
									position: relative;
									display: inline-block;
									padding-top:5px;
									padding-left:5px;
									padding-bottom:5px;
									border:1px #ccc solid;
									}
									.dropdown-check-list .anchor:after {
									position: absolute;
									content: "";
									border-left: 2px solid black;
									border-top: 2px solid black;
									padding: 5px;
									right: 10px;
									top: 20%;
									-moz-transform: rotate(-135deg);
									-ms-transform: rotate(-135deg);
									-o-transform: rotate(-135deg);
									-webkit-transform: rotate(-135deg);
									transform: rotate(-135deg);
									}
									.dropdown-check-list .anchor:active:after {
									right: 8px;
									top: 21%;
									}
									.dropdown-check-list ul.items {
									padding: 2px;
									display: none;
									margin: 0;
									border: 1px solid #ccc;
									border-top: none;
									}
									.dropdown-check-list ul.items li {
									list-style: none;
									}
									.dropdown-check-list.visible .anchor {
									color: #0094ff;
									}
									.dropdown-check-list.visible .items {
									display: block;
									}
																																									</style>

																																									<script>
									jQuery(function ($) {
											var checkList = $('.dropdown-check-list');
											checkList.on('click', 'span.anchor', function(event){
												var element = $(this).parent();

												if ( element.hasClass('visible') )
												{
													element.removeClass('visible');
												}
												else
												{
													element.addClass('visible');
												}
											});
										});

																																									</script>
																																								</td>
																																								<td><!-- -->
																																									<div id="list3" class="dropdown-check-list" tabindex="100">
																																										<span class="anchor">Closed Hours</span>
																																										<ul class="items" name="closedhours">
																																											<li><input name="" type="checkbox" value="00:00"/><label>00:00</label></li>
																																											<li><input name="" type="checkbox" value="01:00"/><label>01:00</label></li>
																																											<li><input name="" type="checkbox" value="02:00"/><label></label>02:00</li>
																																											<li><input name="" type="checkbox" value="03:00"/><label></label>03:00</li>
																																											<li><input name="" type="checkbox" value="04:00"/><label></label>04:00</li>
																																											<li><input name="" type="checkbox" value="05:00"/><label></label>05:00</li>
																																											<li><input name="" type="checkbox" value="06:00"/><label></label>06:00</li>
																																											<li><input name="" type="checkbox" value="07:00"/><label></label>07:00</li>
																																											<li><input name="" type="checkbox" value="08:00"/><label></label>08:00</li>
																																											<li><input name="" type="checkbox" value="09:00"/><label></label>09:00</li>
																																											<li><input name="" type="checkbox" value="10:00"/><label></label>10:00</li>
																																											<li><input name="" type="checkbox" value="11:00"/><label></label>11:00</li>
																																											<li><input name="" type="checkbox" value="12:00"/><label></label>12:00</li>
																																											<li><input name="" type="checkbox" value="13:00"/><label></label>13:00</li>
																																											<li><input name="" type="checkbox" value="14:00"/><label></label>14:00</li>
																																											<li><input name="" type="checkbox" value="15:00"/><label></label>15:00</li>
																																											<li><input name="" type="checkbox" value="16:00"/><label></label>16:00</li>
																																											<li><input name="" type="checkbox" value="17:00"/><label></label>17:00</li>
																																											<li><input name="" type="checkbox" value="18:00"/><label></label>18:00</li>
																																											<li><input name="" type="checkbox" value="19:00"/><label></label>19:00</li>
																																											<li><input name="" type="checkbox" value="20:00"/><label></label>20:00</li>
																																											<li><input name="" type="checkbox" value="21:00"/><label></label>21:00</li>
																																											<li><input name="" type="checkbox" value="22:00"/><label></label>22:00</li>
																																											<li><input name="" type="checkbox" value="23:00"/><label></label>23:00</li>
																																										</ul>
																																									</div>

																																									<style>
									.dropdown-check-list{
									display: inline-block;
									width: 100%;
									}
									.dropdown-check-list:focus{
									outline:0;
									}
									.dropdown-check-list .anchor {
									width: 98%;
									position: relative;
									cursor: pointer;
									display: inline-block;
									padding-top:5px;
									padding-left:5px;
									padding-bottom:5px;
									border:1px #ccc solid;
									}
									.dropdown-check-list .anchor:after {
									position: absolute;
									content: "";
									border-left: 2px solid black;
									border-top: 2px solid black;
									padding: 5px;
									right: 10px;
									top: 20%;
									-moz-transform: rotate(-135deg);
									-ms-transform: rotate(-135deg);
									-o-transform: rotate(-135deg);
									-webkit-transform: rotate(-135deg);
									transform: rotate(-135deg);
									}
									.dropdown-check-list .anchor:active:after {
									right: 8px;
									top: 21%;
									}
									.dropdown-check-list ul.items {
									padding: 2px;
									display: none;
									margin: 0;
									border: 1px solid #ccc;
									border-top: none;
									}
									.dropdown-check-list ul.items li {
									list-style: none;
									}
									.dropdown-check-list.visible .anchor {
									color: #0094ff;
									}
									.dropdown-check-list.visible .items {
									display: block;
									}
																																									</style>

																																									<script>
									jQuery(function ($) {
											var checkList = $('.dropdown-check-list');
											checkList.on('click', 'span.anchor', function(event){
												var element = $(this).parent();

												if ( element.hasClass('visible') )
												{
													element.removeClass('visible');
												}
												else
												{
													element.addClass('visible');
												}
											});
										});

																																									</script>
																																								</td>
																																							</tr>
																																						</tbody>

																																					</table>
																																					<br/>
																																				</div>
																																				<div class='form-group row'>
																																					<table class="table table-striped table-bordered table-hover" id="vorschlaege"> 
																																						<tr> 
																																							<td>Description</td>
																																							<td>Value(R)</td>
																																						</tr>

																																					</table>
																																					<label  class='col-form-label'><strong>&nbsp &nbsp Asset Total</strong></label>
																																					<input  class='form-control' name='assettotal' type='number' />
																																					<button class="btn btn-success" id="abschicken">Add New Row</button>
																																				</div>
																																				<div class='form-group row'>
																																					<label  hidden class='col-form-label'><strong>&nbsp Has the business ever been formally evaluated by  </div>
																																						<div hidden class='row'> &nbsp &nbsp &nbsp by government, any external person, financial institution, donor,</div>
																																						<div hidden class='row'> &nbsp &nbsp &nbsp funder, or any other development organisation? </div></strong></label>
																																				<label class='col-form-label'><strong>Has the business ever been formally evaluated by government, any external person, financial institution, donor, funder, or any other development organisation?</strong></label>
																																				<select class="form-control" name="evaluated" onchange="yesnoCheck(this);">
																																					<option value="">No</option>
																																					<option value="Yes">Yes</option>
																																				</select>
																																				<div id="ifYes" style="display: none;">
																																					<div class='row'>
																																						<label  class='col-form-label'><strong>&nbsp &nbsp &nbspPlease give details</strong></label>
																																						<input  class='form-control' type='text' name="evaluatedinfo"/><!--Please add to Business table evaluated -->
																																					</div>
																																					<br/>
																																				</div>
																																				<br />

																																			</div>



																																		</div>


																																		<!-- Left and right controls -->
																																		<a class="left carousel-control" href="#myCarousel3" data-slide="prev" >
																																			<span class="glyphicon glyphicon-chevron-left"></span>
																																			<span class="sr-only">Previous</span>
																																		</a>
																																		<a class="right carousel-control" href="#myCarousel3" data-slide="next">
																																			<span class="glyphicon glyphicon-chevron-right"></span>
																																			<span class="sr-only">Next</span>
																																		</a>
																																	</div><!--Here is end of slider-->
																																	<div class='col-md-6' >
																																		<button class='btn btn-info'>Save</button>
																																	</div>

																																</div>
																															</div>
																														</div>
																													</div>
																												</div>
																												<!-- End About Business Modal-->



																												<!--******* These details must go in business table, also
       some go to Stakeholder,shareholders,management,staff table
	   Please see bootstrap.js lines 2421- 2483
    **********	   
   -->

																												<!-- Corporate Governance Modal-->

																												<div class="modal fade bd-example-modal-lg" id="CorporateGovernanceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
																													<div class="modal-dialog modal-xl" >
																														<div class="modal-content">
																															<div class="modal-header">
																																<h5 class="modal-title" name="exampleModalLabel">Corporate Governance</h5>
																																<button class="Save" type="button" data-dismiss="modal" aria-label="Close">
																																	<span aria-hidden="true">x</span>
																																</button>
																															</div>
																															<div class="modal-body">

																																<div id="myCarousel41" class="carousel slide" data-ride="carousel" data-interval="0">
																																	<!-- Indicators -->
																																	<ol class="carousel-indicators">
																																		<li data-target="#myCarousel41" data-slide-to="0" class="active"></li>
																																		<li data-target="#myCarousel41" data-slide-to="1"></li>
																																		<li data-target="#myCarousel41" data-slide-to="2"></li>
																																		<li data-target="#myCarousel41" data-slide-to="3"></li>
																																	</ol>

																																	<!-- Wrapper for slides -->
																																	<div class="carousel-inner">

																																		<div class="item active">
																																			<div class='form-group row'>
																																				<label  class='col-form-label'><strong>&nbsp &nbsp Owners Photo (Label as 'Owner(s)' )</strong></label>
																																				<input   class='form-control' name='ownerphoto' type='file' />
																																			</div><br />
																																			<div class='form-group row'>
																																				<label  class='col-form-label'><strong>&nbsp &nbsp Management Photo (if applicable) (Label as 'Management Team' )</strong></label>
																																				<input   class='form-control' name='managementphoto' type='file' />
																																			</div>
																																			<br />
																																			<div class='form-group row'>
																																				<label  class='col-form-label'><strong>&nbsp &nbsp Employee(s) (if applicable) Photo (Label as 'Employee(s)' )</strong></label>
																																				<input   class='form-control' name='' type='file' />
																																			</div>
																																			<br />
																																		</div>



																																		<div class="item">
																																			<div class='form-group row'>
																																				<label  class='col-form-label'><strong>&nbsp &nbsp  Shareholding: Members, shareholders, trustees or members, if applicable.</strong></label>
																																				<table class="table table-striped table-bordered table-hover" id="vorschlaege1"> 
																																					<tr> 
																																						<td>Title</td>
																																						<td>Name</td>
																																						<td>Surname</td>
																																						<td>ID Number</td>
																																						<td>Qualifications</td>
																																						<td>% of Shareholding</td>
																																					</tr>

																																				</table>
																																				<button class="btn btn-success" id="abschicken1">Add New Row</button>

																																			</div><br/>
																																		</div>

																																		<div class="item">
																																			<div class='form-group row'>
																																				<label  class='col-form-label'><strong>&nbsp &nbsp Management Team</strong></label><div class='col-md-6'><button class="btn btn-success" id="abschicken2">Add New Row</button></div>
							&nbsp &nbsp 
																																				<table class="table table-striped table-bordered table-hover" id="vorschlaege2"> 
																																					<tr> 
																																						<td>Title</td>
																																						<td>Name</td>
																																						<td>Surname</td>
																																						<td>ID Number</td>
																																						<td>Qualifications</td>
																																						<td>Position In Business</td>
																																						<td>Formal Skills</td>
																																						<td>Action</td>
																																					</tr>

																																				</table>
																																				<!--This is for display-->
																																				<div>&nbsp &nbsp
				         &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
						  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
						  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
						  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
						  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
						  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
						  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
						  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
						  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
						  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
						  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
						  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
																																				</div>

																																			</div><br/>

																																		</div>

																																		<div class="item">
																																			<div class='form-group row'>
																																				<label  class='col-form-label'><strong>&nbsp &nbspAdditional staff (operational, not on management team), if applicable. </strong></label><div class='col-md-6'><button class="btn btn-success" id="abschicken3">Add New Row</button></div>
							&nbsp &nbsp 
																																				<table class="table table-striped table-bordered table-hover" id="vorschlaege3"> 
																																					<tr> 
																																						<td>Title</td>
																																						<td>Name</td>
																																						<td>Surname</td>
																																						<td>ID Number</td>
																																						<td>Qualifications</td>
																																						<td>Position In Business</td>
																																						<td>Formal Skills</td>
																																						<td>Action</td>
																																					</tr>

																																				</table>
																																				<!--This is for display-->
																																				<div>&nbsp &nbsp
				         &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
						  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
						  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
						  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
						  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
						  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
						  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
						  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
						  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
						  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
						  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
						  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
																																				</div>

																																			</div><br/>

																																		</div>



																																	</div>
																																	<!-- Left and right controls -->
																																	<a class="left carousel-control" href="#myCarousel41" data-slide="prev" >
																																		<span class="glyphicon glyphicon-chevron-left"></span>
																																		<span class="sr-only">Previous</span>
																																	</a>
																																	<a class="right carousel-control" href="#myCarousel41" data-slide="next">
																																		<span class="glyphicon glyphicon-chevron-right"></span>
																																		<span class="sr-only">Next</span>
																																	</a>
																																</div>
																																<div class='col-md-6' >
																																	<button class='btn btn-info'>Save</button>
																																</div>
																																<br/>  
																															</div>			   
																														</div>     
																													</div>		  
																												</div>

																												<!-- End Corporate Governance Modal-->

																												<!--******* These details must go in Banking,Signatories, table,
              See line 2490-2500 in bootstrap.js
			  
			  See again line 2518 in bootstrap.js
    **********	   
   -->
																												<!-- Finance Modal-->
																												<div class="modal fade bd-example-modal-lg" id="FinanceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
																													<div class="modal-dialog modal-lg" >
																														<div class="modal-content">
																															<div class="modal-header">
																																<h5 class="modal-title" name="exampleModalLabel">Finances</h5>
																																<button class="Save" type="button" data-dismiss="modal" aria-label="Close">
																																	<span aria-hidden="true">x</span>
																																</button>
																															</div>
																															<div class="modal-body">

																																<div id="myCarousel4" class="carousel slide" data-ride="carousel" data-interval="0">
																																	<!-- Indicators -->
																																	<ol class="carousel-indicators">
																																		<li data-target="#myCarousel4" data-slide-to="0" class="active"></li>
																																		<li data-target="#myCarousel4" data-slide-to="1"></li>
																																		<li data-target="#myCarousel4" data-slide-to="2"></li>
																																	</ol>

																																	<!-- Wrapper for slides -->
																																	<div class="carousel-inner">

																																		<div class="item active">
																																			<label class='col-form-label'><strong>Does the business have an active bank account?</strong></label>
																																			<select class="form-control" onchange="yesnoCheck1(this);">
																																				<option selected value="No">No</option>
																																				<option value="Yes">Yes</option>
																																			</select>
																																			<br/>
																																			<div id="ifYes1" style="display: none;">
																																				<div class='row'>
																																					<label  class='col-form-label'><strong>&nbsp &nbsp When was the bank account opened? (Date)</strong></label>
																																					<input  class='form-control' name="bnkopendate"  type='date' />
																																				</div>
																																				<br/>
																																				<div class='row'>
																																					<label  class='col-form-label'><strong>&nbsp &nbsp Account Holder Name</strong></label>
																																					<input  class='form-control' name='bnkaccountholder' type='text' />
																																				</div>
																																				<br/>
																																				<div class='row'>
																																					<label  class='col-form-label'><strong>&nbsp &nbsp Bank Name</strong></label>
																																					<input  class='form-control' name='bnkbankname' type='text' />
																																				</div>
																																				<br/>
																																				<div class='row'>
																																					<label  class='col-form-label'><strong>&nbsp &nbsp  Account Number</strong></label>
																																					<input  class='form-control' name='bnkaccountnumber' type='text' />
																																				</div>
																																				<br/>
																																				<div class='row'>
																																					<label  class='col-form-label'><strong>&nbsp &nbsp Type of Account</strong></label>
																																					<input  class='form-control' name='bnkaccounttype' type='text' />
																																				</div>
																																				<br/>
																																				<div class='row'>
																																					<label  class='col-form-label'><strong>&nbsp &nbsp Branch Name</strong></label>
																																					<input  class='form-control' name='bnkbranchname' type='text' />
																																				</div>
																																				<br/>
																																				<div class='row'>
																																					<label  class='col-form-label'><strong>&nbsp &nbsp Branch Code</strong></label>
																																					<input  class='form-control' name='bnkbranchcode' type='text' />
																																				</div>
																																				<div class='row'>
																																					<label  class='col-form-label'><strong>&nbsp &nbsp Please provide proof of bank account – letter from the bank </strong></label>
																																					<input  class='form-control' name='bankproof' type='file' />
																																				</div>
																																				<br/>

																																			</div>
																																		</div>

																																		<div class="item ">

																																			<div class='row'>
																																				<label  class='col-form-label'><strong>&nbsp &nbsp Account Signatories</strong></label><div class='col-md-6' ><button class="btn btn-success" id="abschicken4">Add New Row</button></div>
																																				<table class="table table-striped table-bordered table-hover" id="vorschlaege4"> 
																																					<tr> 
																																						<td>Name</td>
																																						<td>Surname</td>
																																						<td>Action</td>
																																					</tr>

																																				</table>
																																			</div>
																																			<br/>
																																			<h4>Previous funding</h4>
																																			<label class='col-form-label'><strong>Have you previously received a grant/donation from Eskom or Eskom Development Foundation?</strong></label>
																																			<select class="form-control" onchange="yesnoCheck2(this);">
																																				<option selected value="No">No</option>
																																				<option value="Yes">Yes</option>
																																			</select>
																																			<br/>
																																			<div id="ifYes2" style="display: none;">
																																				<div class='row'>
																																					<label  class='col-form-label'><strong>&nbsp &nbsp &nbspDate of donation</strong></label>
																																					<input  class='form-control' name="donationdate"  type='date' />
																																				</div>
																																				<br/>
																																				<div class='row'>
																																					<label  class='col-form-label'><strong>&nbsp &nbsp &nbsp Amount of grant</strong></label>
																																					<input  class='form-control' name='grantamount' type='number' />
																																				</div>
																																				<br/>
																																				<div class='row'>
																																					<label  class='col-form-label'><strong>&nbsp &nbsp &nbspWhat was the donation for?</strong></label>
																																					<input  class='form-control' name='bnkbankname' type='text' />
																																				</div>
																																				<br/>

																																			</div>
																																		</div>

																																		<div class="item">
																																			<label class='col-form-label'><strong>Have you previously received a grant/donation from any other organization - including business loans?</strong></label>
																																			<select class="form-control" onchange="yesnoCheck3(this);">
																																				<option selected value="No">No</option>
																																				<option value="Yes">Yes</option>
																																			</select>
																																			<br/>
																																			<div id="ifYes3" style="display: none;">

																																				<div class='row'>
																																					<label  class='col-form-label'><strong>&nbsp &nbsp &nbsp List other previous funder/donors</strong></label><div class='col-md-6' ><button class="btn btn-success" id="abschicken5">Add New Row</button></div>
																																					<table class="table table-striped table-bordered table-hover" id="vorschlaege5"> 
																																						<tr> 
																																							<td>Name of funder</td>
																																							<td>Describe type of support(grant/loan, etc)</td>
																																							<td>Amount Funded (Rands)</td>
																																							<td>Date of funding</td>
																																							<td>Reason for funding</td>
																																							<td>Action</td>
																																						</tr>

																																					</table>
																																				</div>
																																			</div>
																																		</div>




																																	</div>
																																	<!-- Left and right controls -->
																																	<a class="left carousel-control" href="#myCarousel4" data-slide="prev" >
																																		<span class="glyphicon glyphicon-chevron-left"></span>
																																		<span class="sr-only">Previous</span>
																																	</a>
																																	<a class="right carousel-control" href="#myCarousel4" data-slide="next">
																																		<span class="glyphicon glyphicon-chevron-right"></span>
																																		<span class="sr-only">Next</span>
																																	</a>
																																</div>
																																<div class='col-md-6' >
																																	<button class='btn btn-info'>Save</button>
																																</div>
																																<br/>

																															</div>
																														</div>
																													</div>
																												</div>
																												<!-- End Finance Modal-->


																												<!--******* These details must go in accountability and audit table, 
                
    **********	   
   -->
																												<!-- Accountability Modal-->
																												<div class="modal fade bd-example-modal-lg" id="AccountabilityModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
																													<div class="modal-dialog modal-lg" >
																														<div class="modal-content">
																															<div class="modal-header">
																																<h5 class="modal-title" name="exampleModalLabel">Accountability</h5>
																																<button class="Save" type="button" data-dismiss="modal" aria-label="Close">
																																	<span aria-hidden="true">x</span>
																																</button>
																															</div>
																															<div class="modal-body">

																																<div id="myCarousel7" class="carousel slide" data-ride="carousel" data-interval="0">
																																	<!-- Indicators -->
																																	<ol class="carousel-indicators">
																																		<li data-target="#myCarousel7" data-slide-to="0" class="active"></li>
																																		<li data-target="#myCarousel7" data-slide-to="1"></li>
																																	</ol>

																																	<!-- Wrapper for slides -->
																																	<div class="carousel-inner">

																																		<div class="item active">
																																			<h4>Business' Accountant/accounting firm details</h4>
																																			<div class='form-group row'>
																																				<div class='col-md-6 col-lg-6'>
																																					<label  class='col-form-label'><strong>Name of Firm</strong></label>
																																					<input class='form-control' placeholder='Firm Name' name='firmname' type='text' />
																																				</div>
																																				<div class='col-md-6 col-lg-6'>
																																					<label  class='col-form-label'><strong>Contact Person</strong></label>
																																					<input  class='form-control' placeholder='Contact Person' name='firmcontact' type='text' />
																																				</div></div>
																																			<br />
																																			<div class='form-group row'>
																																				<div class='col-md-6 col-lg-6'>
																																					<label  class='col-form-label'><strong>Telephone Number</strong></label>
																																					<input   class='form-control' placeholder='Telephone Number' name='firmtelephonenumber' type='number' />
																																				</div>
																																				<div class='col-md-6 col-lg-6'>
																																					<label  class='col-form-label'><strong>Email Address</strong></label>
																																					<input   class='form-control' placeholder='Email Address' name='firmemail' type='text'/>
																																				</div></div>
																																			<div class='form-group row'>
																																				<label  class='col-form-label'><strong>&nbsp &nbsp Physical Address</strong></label>
																																				<textarea  rows="4" name='firmaddress' class='form-control' name='' type='text'></textarea>
																																			</div>
																																			<div class='form-group row'>
																																				<label  class='col-form-label'><strong>&nbsp &nbsp Postal Address</strong></label>
																																				<textarea  rows="4" name='firmpostaladdress' class='form-control' name='' type='text'></textarea>
																																			</div>
																																			<br />
																																		</div>

																																		<div class="item">
																																			<label class='col-form-label'><strong>Have the organisation’s books of accounts been audited? (If not, state reasons.)</strong></label>
																																			<select class="form-control" onchange="yesnoCheck4(this);">
																																				<option selected>Select Answer</option>
																																				<option value="No"> No</option>
																																				<option value="Yes">Yes</option>
																																			</select>
																																			<br/>
																																			<div id="ifNo4" style="display: none;">
																																				<label  class='col-form-label'><strong>Please give a reason</strong></label>
																																				<input class='form-control' name='noauditreason' type='text' />
																																			</div>

																																			<div id="ifYes4" style="display: none;">
																																				<div class='form-group row'>
																																					<div class='col-md-6 col-lg-6'>
																																						<label  class='col-form-label'><strong>Name of Audit Firm</strong></label>
																																						<input class='form-control' placeholder='Firm Name' name='auditname' type='text' />
																																					</div>
																																					<div class='col-md-6 col-lg-6'>
																																						<label  class='col-form-label'><strong>Auditor Contact Person</strong></label>
																																						<input  class='form-control' placeholder='Contact Person' name='auditcontact' type='text' />
																																					</div></div>
																																				<br />
																																				<div class='form-group row'>
																																					<div class='col-md-6 col-lg-6'>
																																						<label  class='col-form-label'><strong>Auditor Telephone Number</strong></label>
																																						<input   class='form-control' placeholder='Telephone Number' name='audittelephonenumber' type='number' />
																																					</div>
																																					<div class='col-md-6 col-lg-6'>
																																						<label  class='col-form-label'><strong>Auditor Email Address</strong></label>
																																						<input   class='form-control' placeholder='Email Address' name='auditemail' type='text'/>
																																					</div></div>
																																				<br />
																																				<div class='form-group row'>
																																					<label  class='col-form-label'><strong>&nbsp Auditor Physical Address</strong></label>
																																					<textarea  rows="4" name='auditaddress' class='form-control' name='' type='text'></textarea>
																																				</div>
																																				<div class='form-group row'>
																																					<label  class='col-form-label'><strong>&nbsp &nbsp Postal Address</strong></label>
																																					<textarea  rows="4" name='auditpostaladdress' class='form-control' name='' type='text'></textarea>
																																				</div>
																																				<br />

																																			</div>
																																		</div>


																																	</div>
																																	<!-- Left and right controls -->
																																	<a class="left carousel-control" href="#myCarousel7" data-slide="prev" >
																																		<span class="glyphicon glyphicon-chevron-left"></span>
																																		<span class="sr-only">Previous</span>
																																	</a>
																																	<a class="right carousel-control" href="#myCarousel7" data-slide="next">
																																		<span class="glyphicon glyphicon-chevron-right"></span>
																																		<span class="sr-only">Next</span>
																																	</a>
																																</div>
																																<div class='col-md-6' >
																																	<button class='btn btn-info'>Save</button>
																																</div>
																																<br/>

																															</div>
																														</div>
																													</div>
																												</div>
																												<!-- End Accountability Modal-->

																												<!--******* These details must go in beneficiary table
    **********	   
   -->

																												<!-- Beneficiary Modal-->
																												<div class="modal fade bd-example-modal-lg" id="BeneficiaryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
																													<div class="modal-dialog modal-lg" >
																														<div class="modal-content">
																															<div class="modal-header">
																																<h5 class="modal-title" name="exampleModalLabel">Beneficiaries</h5>
																																<button class="Save" type="button" data-dismiss="modal" aria-label="Close">
																																	<span aria-hidden="true">x</span>
																																</button>
																															</div>
																															<div class="modal-body">

																																<div id="myCarousel8" class="carousel slide" data-ride="carousel" data-interval="0">
																																	<!-- Indicators -->
																																	<ol class="carousel-indicators">
																																		<li data-target="#myCarousel8" data-slide-to="0" class="active"></li>
																																		<li data-target="#myCarousel8" data-slide-to="1"></li>
																																	</ol>

																																	<!-- Wrapper for slides -->
																																	<div class="carousel-inner">

																																		<div class="item active">
																																			<h4>How many people are employed on a <strong>full</strong>-time basis? – Please add numbers </h4>
																																			<div class='form-group row'>
																																				<label  class='col-form-label'><strong>&nbsp &nbsp Number of women</strong></label>
																																				<input   class='form-control'  name="bnfwomen" type='text' />
																																			</div><br />
																																			<div class='form-group row'>
																																				<label  class='col-form-label'><strong>&nbsp &nbsp Number of men</strong></label>
																																				<input   class='form-control' name="bnfmen" type='text' />
																																			</div>
																																			<br />
																																			<div class='form-group row'>
																																				<label  class='col-form-label'><strong>&nbsp &nbsp Total</strong></label>
																																				<input   class='form-control' name="bnftotal" type='text' />
																																			</div><br />
																																			<div class='form-group row'>
																																				<label  class='col-form-label'><strong>&nbsp &nbsp Of the total, how many are youths (16 – 24)?</strong></label>
																																				<input   class='form-control' name="bnfyouth" type='text'/>
																																			</div>
																																			<br />
																																			<div class='form-group row'>
																																				<label  class='col-form-label'><strong>&nbsp &nbsp Of the total, how many are senior citizens (65+)?</strong></label>
																																				<input   class='form-control' name="bnfsenior" type='number'/>
																																			</div><br />
																																			<div class='form-group row'>
																																				<label  class='col-form-label'><strong>&nbsp &nbspOf the total, how many are persons with disabilities?</strong></label>
																																				<input   class='form-control' name="bnfdisabled" type='text' />
																																			</div>
																																			<br />
																																		</div>

																																		<div class="item">
																																			<h4>How many people are employed on a <strong>part</strong>-time basis? – Please add numbers </h4>
																																			<div class='form-group row'>
																																				<label  class='col-form-label'><strong>&nbsp &nbsp Number of women</strong></label>
																																				<input   class='form-control'  name="bnpwomen" type='text' />
																																			</div><br />
																																			<div class='form-group row'>
																																				<label  class='col-form-label'><strong>&nbsp &nbsp Number of men</strong></label>
																																				<input   class='form-control' name="bnpmen" type='text' />
																																			</div>
																																			<br />
																																			<div class='form-group row'>
																																				<label  class='col-form-label'><strong>&nbsp &nbsp Total</strong></label>
																																				<input   class='form-control' name="bnptotal" type='text' />
																																			</div><br />
																																			<div class='form-group row'>
																																				<label  class='col-form-label'><strong>&nbsp &nbsp Of the total, how many are youths (16 – 24)?</strong></label>
																																				<input   class='form-control' name="bnpyouth" type='text'/>
																																			</div>
																																			<br />
																																			<div class='form-group row'>
																																				<label  class='col-form-label'><strong>&nbsp &nbsp Of the total, how many are senior citizens (65+)?</strong></label>
																																				<input   class='form-control' name="bnpsenior" type='number'/>
																																			</div><br />
																																			<div class='form-group row'>
																																				<label  class='col-form-label'><strong>&nbsp &nbspOf the total, how many are persons with disabilities?</strong></label>
																																				<input   class='form-control' name="bnpdisabled" type='text' />
																																			</div>
																																			<br />
																																		</div>



																																	</div>
																																	<!-- Left and right controls -->
																																	<a class="left carousel-control" href="#myCarousel8" data-slide="prev" >
																																		<span class="glyphicon glyphicon-chevron-left"></span>
																																		<span class="sr-only">Previous</span>
																																	</a>
																																	<a class="right carousel-control" href="#myCarousel8" data-slide="next">
																																		<span class="glyphicon glyphicon-chevron-right"></span>
																																		<span class="sr-only">Next</span>
																																	</a>
																																</div>
																																<div class='col-md-6' >
																																	<button class='btn btn-info'>Save</button>
																																</div>
																																<br/>

																															</div>
																														</div>
																													</div>
																												</div>
																												<!-- End Beneficiary Modal-->


																												<!--******* These details must go in infrastructure table	 
    **********	   
   -->
																												<!-- Infrastructure Modal-->
																												<div class="modal fade bd-example-modal-lg" id="InfrastructureModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
																													<div class="modal-dialog modal-lg" >
																														<div class="modal-content">
																															<div class="modal-header">
																																<h5 class="modal-title" name="exampleModalLabel">Infrastructure</h5>
																																<button class="Save" type="button" data-dismiss="modal" aria-label="Close">
																																	<span aria-hidden="true">x</span>
																																</button>
																															</div>
																															<div class="modal-body">

																																<div id="myCarousel9" class="carousel slide" data-ride="carousel" data-interval="0">
																																	<!-- Indicators -->
																																	<ol class="carousel-indicators">
																																		<li data-target="#myCarousel9" data-slide-to="0" class="active"></li>
																																		<li data-target="#myCarousel9" data-slide-to="1"></li>
																																	</ol>

																																	<!-- Wrapper for slides -->
																																	<div class="carousel-inner">

																																		<div class="item active">
																																			<div class='form-group row'>
																																				<label  class='col-form-label'><strong>&nbsp &nbspHow many rooms does the property have?</strong></label>
																																				<input   class='form-control'  name='propertyrooms' type='text' />
																																			</div>
																																			<div class='form-group row'>
																																				<label  class='col-form-label'><strong>&nbsp &nbspSize of premises in m2</strong></label>
																																				<input   class='form-control'  id='propertysize' type='text' />
																																			</div>
																																			<br />
																																			<div class='form-group row'>
																																				<label  class='col-form-label'><strong>&nbsp &nbspDoes the business have the following facilities? </strong></label>
																																				<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																																					<span>Please select -</span></a>
																																				<div class="dropdown-menu btn-default" aria-labelledby="pagesDropdown">
																																					<h6 class="dropdown-header form-control">Facilities:</h6>
																																					<a class="dropdown-item"><input value="Fencing" type="checkbox"name=""/>Fencing</a>
																																					<a class="dropdown-item"><input value="Water" type="checkbox"name=""/>Water</a>
																																					<a class="dropdown-item"><input value="Electricity" type="checkbox"name=""/>Electricity</a>
																																					<a class="dropdown-item"><input value="Sewerage" type="checkbox"name=""/>Sewerage</a>
																																					<a class="dropdown-item"><input value="Security" type="checkbox"name=""/>Security</a>
																																					<a class="dropdown-item"><input value="Gas" type="checkbox"name=""/>Gas</a>
																																					<a class="dropdown-item"><input value="Other" type="checkbox"name="">Other</a>
																																					</div>
																																				</div><br />
																																				<h6>Attach photographs of: </h6>
																																				<div class='form-group row'>
																																					<label  class='col-form-label'><strong>&nbsp &nbsp Exterior of business</strong></label>
																																					<input   class='form-control' name='exteriorphoto' type='file'/>
																																				</div>
																																				<br />
																																				<div class='form-group row'>
																																					<label  class='col-form-label'><strong>&nbsp &nbsp Interior of business</strong></label>
																																					<input   class='form-control' name='interiorphoto' type='file'/>
																																				</div><br />
																																				<div class='form-group row'>
																																					<label  class='col-form-label'><strong>&nbsp &nbsp Equipment you have and use</strong></label>
																																					<input   class='form-control' name='equipmentphoto' type='file' /></div>
																																				<br />
																																				<div class='form-group row'>
																																					<label  class='col-form-label'><strong>&nbsp &nbsp Products/Service of your enterprise</strong></label>
																																					<input   class='form-control'  name='product/servicephoto' type='file' /></div>
																																				<br />
																																			</div>

																																			<div class="item">
																																				<h6>Do you own/rent the business premises?</h6>
																																				<select class="form-control" name="RentOwn" onchange='yesnoCheck5(this);'>
																																					<option >Choose</option>
																																					<option value='Owning' >Own</option>
																																					<option value="Renting">Renting</option>
																																					<option value="Free">Use property rent free</option>
																																				</select>
																																				<br/>

																																				<div id="ifRentFree" style="display: block;">
																																					<div class='col-md-6 col-lg-6'>
																																						<label  class='col-form-label'><strong>Rent/Bond Amount (per month)</strong></label>
																																						<input class='form-control' placeholder='Rent/Bond Amount' name='rentbondamount' type='text' />
																																					</div><br />
																																					<div class='col-md-6 col-lg-6'>
																																						<label  class='col-form-label'><strong>Rates & Taxes(per month)</strong></label>
																																						<input  class='form-control' placeholder='Rates & Taxes' name='ratesntaxes' type='text' />
																																					</div><br />
																																				</div>

																																				<div class='form-group row'>
																																					<div class='col-md-6 col-lg-6'>
																																						<label  class='col-form-label'><strong>Water Costs (per month)</strong></label>
																																						<input   class='form-control' placeholder='Water Costs (per month' name='watercosts' type='number' />
																																					</div>
																																					<div class='col-md-6 col-lg-6'>
																																						<label  class='col-form-label'><strong>Type of electricity account </strong></label>
																																						<select class="form-control" name="electricitytype">
																																							<option value="Prepaid">Prepaid </option>
																																							<option value="Post-paid"> Post-paid</option>
																																						</select>
																																					</div></div>
																																				<br />
																																				<div class='form-group row'>
																																					<label  class='col-form-label'><strong>&nbsp &nbspWhat phase electricity is used?</strong></label>
																																					<select class="form-control" name="electricityphase">
																																						<option value="Single phase">Single phase </option>
																																						<option value="3-phase"> 3-phase</option>
																																					</select>
																																				</div>
																																				<div class='form-group row'>
																																					<label  class='col-form-label'><strong>&nbsp &nbsp Electricity supplied by: </strong></label>
																																					<select class="form-control" name="electricitysupply" onchange='yesnoCheck6(this);'>
																																						<option value="By local municipality ">By local municipality </option>
																																						<option value="Directly by eskom">Directly by eskom</option>
																																						<option id="ifOwn" style="display: block;" value="ElectricityOwner">Person/Company that owns premises that business operates on</option>
																																					</select>
																																					<div id="ifEskom" style="display: none;">
																																						<div class='form-group row'>
																																							<label  class='col-form-label'><strong>&nbsp &nbsp &nbsp &nbsp Closest Eskom Office</strong></label>
																																							<input class='form-control' name='closesteskomoffice' type='text' />
																																						</div>
																																						<div class='form-group row'>
																																							<label  class='col-form-label'><strong>&nbsp &nbsp &nbsp &nbsp Eskom Account Number</strong></label>
																																							<input class='form-control' name='eskomaccountnnumber' type='text' />
																																						</div>
																																					</div>
																																					<div id="ifPerson" style="display: none;"><!-- Enter these details into Property Owner Table-->
																																						<div class='form-group row'>
																																							<label  class='col-form-label'><strong>&nbsp &nbsp &nbsp &nbsp  Name of contact person</strong></label>
																																							<input class='form-control'  name='propertyownername' type='text' />
																																						</div>
																																						<div class='form-group row'>
																																							<label  class='col-form-label'><strong>&nbsp &nbsp &nbsp &nbsp Telephone Number</strong></label>
																																							<input class='form-control' name='propertyownernumber' type='text' />
																																						</div>
																																						<div class='form-group row'>
																																							<label  class='col-form-label'><strong>&nbsp &nbsp &nbsp &nbsp  Please enclose a letter/copy of the lease agreement from the &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp owner giving permission for the property to be used</strong></label>
																																							<input class='form-control' name='leaseagreement' type='file' />
																																						</div>
																																					</div>
																																				</div>
																																				<br />

																																			</div>
																																		</div>
																																		<!-- Left and right controls -->
																																		<a class="left carousel-control" href="#myCarousel9" data-slide="prev" >
																																			<span class="glyphicon glyphicon-chevron-left"></span>
																																			<span class="sr-only">Previous</span>
																																		</a>
																																		<a class="right carousel-control" href="#myCarousel9" data-slide="next">
																																			<span class="glyphicon glyphicon-chevron-right"></span>
																																			<span class="sr-only">Next</span>
																																		</a>
																																	</div>
																																	<div class='col-md-6' >
																																		<button class='btn btn-info'>Save</button>
																																	</div>
																																	<br/>

																																</div>
																															</div>
																														</div>
																													</div>
																													<!-- End Infrastructure Modal-->


																													<!--******* These details must go in TargetMarket from registration page
       company person html is at the bottom of this html page	 
    **********	   
   -->
																													<!-- Marketing Modal-->
																													<div class="modal fade bd-example-modal-lg" id="MarketingModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
																														<div class="modal-dialog modal-lg" >
																															<div class="modal-content">
																																<div class="modal-header">
																																	<h5 class="modal-title" name="exampleModalLabel">Marketing & Sales</h5>
																																	<button class="Save" type="button" data-dismiss="modal" aria-label="Close">
																																		<span aria-hidden="true">x</span>
																																	</button>
																																</div>
																																<div class="modal-body">

																																	<div id="myCarousel10" class="carousel slide" data-ride="carousel" data-interval="0">
																																		<!-- Indicators -->
																																		<ol class="carousel-indicators">
																																			<li data-target="#myCarousel10" data-slide-to="0" class="active"></li>
																																			<li data-target="#myCarousel10" data-slide-to="1"></li>
																																			<li data-target="#myCarousel10" data-slide-to="2"></li>
																																			<li data-target="#myCarousel10" data-slide-to="3"></li>
																																		</ol>

																																		<!-- Wrapper for slides -->
																																		<div class="carousel-inner">

																																			<div class="item active">
																																				<div class='form-group row'>
																																					<label  class='col-form-label'><strong>&nbsp &nbsp Please explain how your services and/or products meet your customers’ needs</strong></label>
																																					<textarea  rows="4" class='form-control' name='marketneeds' type='text'></textarea>
																																				</div><br />
																																				<div class='form-group row'>
																																					<label  class='col-form-label'><strong>&nbsp &nbsp Please list your current key customers below. </strong></label>
																																					<textarea  rows="4" class='form-control' name='keycustomers' type='text'></textarea>
																																				</div><br />
																																				<div class='form-group row'>
																																					<label  class='col-form-label'><strong>&nbsp &nbsp How do you market your services and/or products to your target market / customers? </strong></label>
																																					<textarea rows="4"  class='form-control' name='howmarket' type='text'></textarea>
																																				</div><br />
																																				<br />

																																			</div>
																																			<div class="item">
																																				<div class='form-group row'>
																																					<label  class='col-form-label'><strong>&nbsp &nbsp Please list your potential customers below</strong></label>
																																					<textarea rows="4"  class='form-control' name='potentialcustomers' type='text'></textarea>
																																				</div><br />
																																				<div class='form-group row'>
																																					<label  class='col-form-label'><strong>&nbsp &nbsp How many businesses in your area of service, provide similar products/services as yours? Please list &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp names. </strong></label>
																																					<textarea rows="4"  class='form-control' name='competition' type='text'></textarea>
																																				</div><br />
																																				<div class='form-group row'>
																																					<label  class='col-form-label'><strong>&nbsp &nbsp What is your business’s unique selling proposition / selling point that other businesses that provide &nbsp &nbsp &nbsp &nbsp &nbsp &nbspsimilar products / services do not have? </strong></label>
																																					<textarea rows="4"  class='form-control' name='uniqueness' type='text'></textarea>
																																				</div><br />
																																				<div class='form-group row'>
																																					<label  class='col-form-label'><strong>&nbsp &nbsp Raw materials & distribution 
																																							<br>&nbsp &nbsp &nbspo	How are the raw materials transported to your business site(if applicable)?
																																								<br>&nbsp &nbsp &nbspo	How are goods/products transported from your business site to market (if applicable)?
																																									<br>&nbsp &nbsp &nbspo	What is the distance to the nearest commercial center/town?
																																									</strong></label>
																																								<textarea  rows="4" class='form-control' name='howtomarket' type='text'></textarea>
																																							</div><br />
																																						</div>

																																						<div class="item"><!-- The fields below go to the sales table-->
																																							<h4>Business performance</h4>
																																							<div class='form-group row'>
																																								<label  class='col-form-label'><strong>&nbsp &nbsp Monthly income from sales (R)</strong></label>
																																								<input   class='form-control' placeholder='' name='monthlyincome' type='number'/>
																																							</div>

																																							<div class='form-group row'>
																																								<label class='col-form-label'><strong>&nbsp &nbsp Monthly expenses (R)</strong></label>
																																								<input   class='form-control' placeholder='' name='salesexpenses' type='number'/>
																																							</div>

																																							<div class='form-group row'>
																																								<label class='col-form-label'><strong>&nbsp &nbsp Total (R)</strong></label>
																																								<input   class='form-control' placeholder='' name='salestotal' type='number'/>
																																							</div>

																																							<div class='form-group row'>
																																								<label class='col-form-label'><strong>&nbsp &nbspProduction Costs(R)</strong></label>
																																								<input   class='form-control' placeholder='' name='productioncosts' type='number'/>
																																							</div>

																																							<div class='form-group row'>
																																								<label class='col-form-label'><strong>&nbsp &nbsp Profit/Loss(R)</strong></label>
																																								<input   class='form-control' placeholder='' name='profits' type='number'/>
																																							</div>

																																						</div>

																																						<div class="item">
																																							<label  class='col-form-label'><strong>&nbsp &nbspDoes local authority /traditional leadership support your business? </strong></label>
																																							<select class="form-control" name="authoritysupport" onchange='yesnoCheck7(this);'>
																																								<option value="No">No</option>
																																								<option value="Yes">Yes</option>
																																							</select>
																																							<div id="ifYes7" style="display: none;">
																																								<div class='form-group row'>
																																									<label  class='col-form-label'><strong>&nbsp &nbsp &nbsp &nbsp Name of Authority Body</strong></label>
																																									<input class='form-control' name='authorityname' type='text' />
																																								</div>
																																								<div class='form-group row'>
																																									<label  class='col-form-label'><strong>&nbsp &nbsp &nbsp &nbsp Names of Persons</strong></label>
																																									<input class='form-control' name='authorityperson' type='text' />
																																								</div>
																																								<div class='form-group row'>
																																									<label  class='col-form-label'><strong>&nbsp &nbsp &nbsp &nbsp Contact Number</strong></label>
																																									<input class='form-control' name='authoritynumber' type='number' />
																																								</div>
																																							</div>
																																						</div>
																																						<br/>


																																					</div>
																																					<!-- Left and right controls -->
																																					<a class="left carousel-control" href="#myCarousel10" data-slide="prev" >
																																						<span class="glyphicon glyphicon-chevron-left"></span>
																																						<span class="sr-only">Previous</span>
																																					</a>
																																					<a class="right carousel-control" href="#myCarousel10" data-slide="next">
																																						<span class="glyphicon glyphicon-chevron-right"></span>
																																						<span class="sr-only">Next</span>
																																					</a>
																																				</div>
																																				<div class='col-md-6' >
																																					<button class='btn btn-info'>Save</button>
																																				</div>
																																				<br/>

																																			</div>
																																		</div>
																																	</div>
																																</div>
																																<!-- End Marketing Modal-->

																																<!--******* These details must go in feasibility table, 	 
    **********	   
   -->
																																<!-- Feasibility Modal-->
																																<div class="modal fade bd-example-modal-lg" id="FeasibilityModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
																																	<div class="modal-dialog modal-lg" >
																																		<div class="modal-content">
																																			<div class="modal-header">
																																				<h5 class="modal-title" name="exampleModalLabel">Feasibility & Sustainability  </h5>
																																				<button class="Save" type="button" data-dismiss="modal" aria-label="Close">
																																					<span aria-hidden="true">x</span>
																																				</button>
																																			</div>
																																			<div class="modal-body">

																																				<div id="myCarousel13" class="carousel slide" data-ride="carousel" data-interval="0">
																																					<!-- Indicators -->
																																					<ol class="carousel-indicators">
																																						<li data-target="#myCarousel13" data-slide-to="0" class="active"></li>
																																						<li data-target="#myCarousel13" data-slide-to="1"></li>
																																					</ol>

																																					<!-- Wrapper for slides -->
																																					<div class="carousel-inner">

																																						<div class="item active">
																																							<div class='form-group row'>
																																								<label  class='col-form-label'><strong>&nbsp &nbspHow long has the business been operational? (number of years) ?</strong></label>
																																								<input   class='form-control' placeholder='Number of years' name='numberofyears' type='number'/>
																																							</div><br />
																																							<div class='form-group row'>
																																								<label  class='col-form-label'><strong>&nbsp &nbspMotivate why and how the business will remain sustainable in the long term</strong></label>
																																								<textarea  rows="4" class='form-control' name='longtermmotivation' type='text'></textarea>
																																							</div><br />
																																							<div class='form-group row'>
																																								<label  class='col-form-label'><strong>&nbsp &nbsp Current average monthly income per employee</strong></label>
																																								<input   class='form-control' placeholder='In Rands' name='averageemployee' type='number'/>
																																							</div><br />
																																							<div class='form-group row'>
																																								<label  class='col-form-label'><strong>&nbsp &nbsp Current average monthly income per member of management </strong></label>
																																								<input   class='form-control' placeholder='In Rands' name='averagemanagement' type='number'/>
																																							</div><br />
																																						</div>



																																						<div class="item">
																																							<h4>SWOT Analysis of the business</h4>
																																							<div class='form-group row'>
																																								<label  class='col-form-label'><strong>&nbsp &nbsp &nbsp &nbsp Business Strengths</strong></label>
																																								<textarea  rows="4" class='form-control' name='strengths' type='text'></textarea>
																																							</div>
																																							<div class='form-group row'>
																																								<label  class='col-form-label'><strong>&nbsp &nbsp &nbsp &nbsp Business Weakness</strong></label>
																																								<textarea  rows="4" class='form-control' name='weaknesses' type='text'></textarea>
																																							</div>
																																							<div class='form-group row'>
																																								<label  class='col-form-label'><strong>&nbsp &nbsp &nbsp &nbspBusiness Opportunities</strong></label>
																																								<textarea  rows="4" class='form-control' name='opportunities' type='text'></textarea>
																																							</div>
																																							<div class='form-group row'>
																																								<label  class='col-form-label'><strong>&nbsp &nbsp &nbsp &nbsp Business Threats </strong></label>
																																								<textarea  rows="4" class='form-control' name='threats' type='text'></textarea>
																																							</div>

																																						</div>




																																					</div>
																																					<!-- Left and right controls -->
																																					<a class="left carousel-control" href="#myCarousel13" data-slide="prev" >
																																						<span class="glyphicon glyphicon-chevron-left"></span>
																																						<span class="sr-only">Previous</span>
																																					</a>
																																					<a class="right carousel-control" href="#myCarousel13" data-slide="next">
																																						<span class="glyphicon glyphicon-chevron-right"></span>
																																						<span class="sr-only">Next</span>
																																					</a>
																																				</div>
																																				<div class='col-md-6' >
																																					<button class='btn btn-info'>Save</button>
																																				</div>
																																				<br/>

																																			</div>
																																		</div>
																																	</div>
																																</div>
																																<!-- End Feasibility Modal-->


																																<!--******* These details must go in feasibility as well 
    **********	   
   -->
																																<!-- Motivations Modal-->
																																<div class="modal fade bd-example-modal-lg" id="MotivationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
																																	<div class="modal-dialog modal-xl" >
																																		<div class="modal-content">
																																			<div class="modal-header">
																																				<h5 class="modal-title" name="exampleModalLabel">Motivations</h5>
																																				<button class="Save" type="button" data-dismiss="modal" aria-label="Close">
																																					<span aria-hidden="true">x</span>
																																				</button>
																																			</div>
																																			<div class="modal-body">

																																				<div id="myCarousel14" class="carousel slide" data-ride="carousel" data-interval="0">
																																					<!-- Indicators -->
																																					<ol class="carousel-indicators">
																																						<li data-target="#myCarousel14" data-slide-to="0" class="active"></li>
																																						<li data-target="#myCarousel14" data-slide-to="1"></li>
																																					</ol>

																																					<!-- Wrapper for slides -->
																																					<div class="carousel-inner">

																																						<div class="item active">
																																							<div class='form-group row'>
																																								<label  class='col-form-label'><strong>&nbsp &nbspDescribe 300 words or less, how the money will be used to improve and/or expand the business, should this entry win the R300 000. prize money for &nbsp &nbsp &nbsp &nbspthe overall winner.</strong></label>
																																								<textarea  rows="7" class='form-control' name='strengths' type='text'></textarea>
																																							</div><br />


																																						</div>

																																						<div class="item">
																																							<div class='form-group row'>
																																								<label  class='col-form-label'><strong>&nbsp &nbsp Describe 300 words or less, how the money will be used to improve and/or expand the business, should this entry win the R75 000. prize money for &nbsp &nbsp &nbsp &nbsp the sector runner up.</strong></label>
																																								<textarea  rows="6" class='form-control' name='weaknesses' type='text'></textarea>
																																							</div><br />
																																						</div>


																																					</div>
																																					<!-- Left and right controls -->
																																					<a class="left carousel-control" href="#myCarousel14" data-slide="prev" >
																																						<span class="glyphicon glyphicon-chevron-left"></span>
																																						<span class="sr-only">Previous</span>
																																					</a>
																																					<a class="right carousel-control" href="#myCarousel14" data-slide="next">
																																						<span class="glyphicon glyphicon-chevron-right"></span>
																																						<span class="sr-only">Next</span>
																																					</a>
																																				</div>
																																				<div class='col-md-6' >
																																					<button class='btn btn-info'>Save</button>
																																				</div>
																																				<br/>

																																			</div>
																																		</div>
																																	</div>
																																</div>
																																<!-- End Motivation Modal-->


																																<!-- UndertakingModal Modal-->
																																<div class="modal fade bd-example-modal-lg" id="UndertakingModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
																																	<div class="modal-dialog modal-lg" >
																																		<div class="modal-content">
																																			<div class="modal-header">
																																				<h5 class="modal-title" name="exampleModalLabel">Undertaking</h5>
																																				<button class="Save" type="button" data-dismiss="modal" aria-label="Close">
																																					<span aria-hidden="true">x</span>
																																				</button>
																																			</div>
																																			<div class="modal-body">

																																				<div id="myCarousel14" class="carousel slide" data-ride="carousel" data-interval="0">
																																					<!-- Indicators -->
																																					<ol class="carousel-indicators">
																																						<li data-target="#myCarousel14" data-slide-to="0" class="active"></li>
																																					</ol>

																																					<!-- Wrapper for slides -->
																																					<div class="carousel-inner">

																																						<div class="item active">
																																							<div class='form-group row'>
																																								<label  class='col-form-label'><strong>&nbsp &nbspInitials & Surname</strong></label>
																																								<input   class='form-control' placeholder='Initials & Surname' name='initialssurname' type='text'/>
																																							</div><br />
																																							<div class='form-group row'>
																																								<label  class='col-form-label'><strong>&nbsp &nbspDesignation</strong></label>
																																								<input   class='form-control' placeholder='Designation' name='undertakingdesignation' type='text'/>
																																							</div>
																																							<div class='form-group row'>
																																								<label  class='col-form-label'><strong>&nbsp &nbspDate</strong></label>
																																								<input   class='form-control' name='undertakingate' type='date'/>
																																							</div>
																																						</div><br />
																																					</div>


																																				</div>
																																				<!-- Left and right controls -->
																																				<a class="left carousel-control" href="#myCarousel14" data-slide="prev" >
																																					<span class="glyphicon glyphicon-chevron-left"></span>
																																					<span class="sr-only">Previous</span>
																																				</a>
																																				<a class="right carousel-control" href="#myCarousel14" data-slide="next">
																																					<span class="glyphicon glyphicon-chevron-right"></span>
																																					<span class="sr-only">Next</span>
																																				</a>
																																			</div>
																																			<div class='col-md-6' >
																																				<button class='btn btn-info'>Save</button>
																																			</div>
																																			<br/>

																																		</div>
																																	</div>
																																</div>
																																<!-- End Description Modal-->


																																<!-- Company Person Modal-->
																																<div class="modal fade" id="PersonModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
																																	<div class="modal-dialog" role="document">
																																		<div class="modal-content">
																																			<div class="modal-header">
																																				<h5 class="modal-title" name="exampleModalLabel">Add Contact Person</h5>
																																				<button class="Save" type="button" data-dismiss="modal" aria-label="Close">
																																					<span aria-hidden="true">x</span>
																																				</button>
																																			</div>
																																			<div class="modal-body">
																																				<div class='form-group row'>
																																					<div class='col-md-6 col-lg-6 text-center'>
																																						<label class='col-form-label'><strong>Title</strong></label>
																																						<select class="form-control" name="">
																																							<option value="Ms">Ms</option>
																																							<option value="Mr">Mr</option>
																																							<option value="Dr">Dr</option>
																																							<option value="Prof">Prof</option>
																																							<option value="Rev">Rev</option>
																																						</select>
																																					</div>
																																					<div class='col-md-6 col-lg-6 text-center'>
																																						<label class='col-form-label'><strong>Firstname</strong></label>
																																						<input type="text" class='form-control text-center' name="title" placeholder="Firstname"> <!--new-->
																																						</div>
																																					</div><!-- End Of Row-->
																																					<div class='form-group row'>
																																						<div class='col-md-6 col-lg-6 text-center'>
																																							<label class='col-form-label'><strong>Surname</strong></label>
																																							<input type="text" class='form-control text-center' name="" placeholder="Surname">
																																							</div>

																																							<div class='col-md-6 col-lg-6 text-center'>
																																								<label class='col-form-label'><strong>Email</strong></label>
																																								<input type="email" class='form-control text-center' name="" placeholder="Email"> <!--new-->
																																								</div>
																																							</div><!-- End Of Row-->
																																							<div class='form-group row'>
																																								<div class='col-md-6 col-lg-6 text-center'>
																																									<label class='col-form-label'><strong>Gender</strong></label>
																																									<select class="form-control" name="gender" onchange="yesnoCheck(this);">
																																										<option value="Female">Female</option>
																																										<option value="Male">Male</option>
																																										<option value="Yes">Other</option>
																																									</select>
																																									<div id="ifYes" style="display: none;">
																																										<div class='row'>
																																											<label  class='col-form-label'><strong>Please Specify</strong></label>
																																											<input  class='form-control' type='text' name="othergender"/>
																																										</div>
																																										<br/>
																																									</div>
																																								</div>
																																								<div class='col-md-6 col-lg-6 text-center'>
																																									<label class='col-form-label'><strong>Dietary Requirements </strong></label>
																																									<input type="text" class='form-control text-center' name="diet" placeholder="Dietary Requirements">
																																									</div>
																																								</div><!-- End Of Row-->
																																								<div class='form-group row'>
																																									<div class='col-md-6 col-lg-6 text-center'>
																																										<label class='col-form-label'><strong>Disability Requirements</strong></label>
																																										<input type="text" class='form-control text-center' name="disability" placeholder="Disability Requirements">
																																										</div>

																																										<div class='col-md-6 col-lg-6 text-center'>
																																											<label class='col-form-label'><strong>Closest Transportation</strong></label>
																																											<input type="text" class='form-control text-center' name="transport" placeholder="Closest Transportation">
																																											</div>
																																										</div><!-- End Of Row-->
																																										<div class='form-group row'>
																																											<div class='col-md-6 col-lg-6 text-center'>
																																												<label class='col-form-label'><strong>Cellphone</strong></label>
																																												<input  type="number" class='form-control text-center' name="email" placeholder="Cellphone">
																																												</div>

																																												<div class='col-md-6 col-lg-6 text-center'>
																																													<label class='col-form-label'><strong>Position</strong></label>
																																													<input type="text" class='form-control text-center' name="" placeholder="Position In Business">
																																													</div>
																																												</div><!-- End Of Row-->
																																											</div>
																																											<div class="modal-footer">
																																												<a class="btn btn-primary">Add Person</a>
																																												<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button><!--End Session-->
																																											</div>
																																										</div>
																																									</div>
																																								</div>
																																								<!-- End Add Company Person Modal-->



																																								<!-- Bootstrap core JavaScript-->
																																								<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
																																								<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

																																								<!-- Core plugin JavaScript-->
																																								<script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

																																								<!-- Custom scripts for all pages-->
																																								<script src="<?php echo base_url(); ?>assets/js/sb-admin-2.js"></script>

																																								<!-- Page level plugins -->
																																								<script src="<?php echo base_url(); ?>assets/vendor/chart.js/Chart.min.js"></script>

																																								<!-- Page level custom scripts -->
																																								

																																								<script src="<?php echo base_url(); ?>assets/js/sweetalert.min.js"></script>


																																							</body>

																																							<script type="text/javascript">
  function submitModalData(formID)
  {
    //JQUERY form binder
    var formData = new FormData($("#"+formID)[0]);
    for (var pair of formData.entries()) 
    {
      console.log(pair[0]+ ', ' + pair[1]); 
    }

    //URL to access
    var URL = "";
    //determine PHP function to call
    switch(formID)
    {
        case "learn": // where did contact person learn about us?
          URL = "user/post_competition_exposure";
        break;
    }
    console.log(URL);
      $.ajax({
         type: "POST",
         url: "<?php echo base_url(); ?>"+ URL,
         data: formData,
         contentType: false,
         dataType: "JSON",
         processData: false,
         success: function(response)
         {
            alert(JSON.stringify(response));
            console.log(response.data);
           // window.location = "<?php echo base_url(); ?>user/dashboard";
          },
          
          error: function(response) 
          {
            alert(JSON.stringify(response));
            console.log(response.data);
           // window.location = "<?php echo base_url(); ?>user/dashboard";
          }
    });
  } 
																																							</script>

																																						</html>
																																						