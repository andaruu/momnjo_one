<?php
include("api/db_config.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="shortcut icon" href="assets/images/favicon_1.ico">
		<title>Employee</title>

        <!-- Plugins css-->
        <link href="assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
        <link href="assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" />
        <link href="assets/plugins/multiselect/css/multi-select.css"  rel="stylesheet" type="text/css" />
        <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
        <link href="assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>

	</head>

	<body class="fixed-left">

		<!-- Begin page -->
		<div id="wrapper">

            <!-- Top Bar Start -->
            <?php include "header.php"; ?>
            <!-- Top Bar End -->

            <?php include "sidemenu.php"; ?>
            <!-- Left Sidebar End -->

			<!-- Start right Content here -->
			<div class="content-page">
				<!-- Start content -->
				<div class="content">
					<div class="container">

<?php
$action=$_GET["actn"];
if($action=="update"){
?>
<!-- Update Employee -->

						<!-- Page-Title -->
						<div class="row">
							<div class="col-sm-12">
								<h4 class="page-title">Create Employee</h4>
								<ol class="breadcrumb">
									<li>
										<a href="index.php">Dashboard</a>
									</li>
									<li>
										<a href="master_employee.php">Employee</a>
									</li>
									<li class="active">
										Update Employee
									</li>
								</ol>
							</div>
						</div>

                        <div class="row">
							<div class="col-lg-10">
								<div class="card-box">
                                <form action="#" data-parsley-validate novalidate>
                                    <div class="row"> 

                                        <div class="col-md-6"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">ID Employee</label> 
                                                <input type="text" name="prodName" class="form-control" id="field-1" placeholder="0000000" required parsley-trigger="change">
                                            </div> 
                                        </div> 

                                        <div class="col-md-6"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">User Level</label> 
                                                <select class="form-control" name="prodStatus" id="field-1" parsley-trigger="change" required>
                                                    <option value="">Select</option>
                                                    <option value="trp">Therapist</option>
                                                    <option value="csr">Cashier</option>
                                                    <option value="adm">Admin</option>
                                                </select>
                                            </div> 
                                        </div> 

                                        <div class="col-md-6"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Full Name</label> 
                                                <input type="text" name="prodKode" class="form-control" id="field-1" required parsley-trigger="change">
                                            </div> 
                                        </div> 

                                        <div class="col-md-6"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Nickname</label> 
                                                <input type="text" name="prodKode" class="form-control" id="field-1" required parsley-trigger="change">
                                            </div> 
                                        </div> 

                                        <div class="col-md-6"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Gender</label> 
                                                <select class="form-control" name="prodStatus" id="field-1" parsley-trigger="change" required>
                                                    <option value="">Select</option>
                                                    <option value="female">Female</option>
                                                    <option value="male">Male</option>
                                                </select>
                                            </div> 
                                        </div> 

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Date of Birth</label>
                                                <div class="row"> 
                                                    <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                                    <input type="text" name="prodPrice" class="form-control" id="field-1" placeholder="08 (Date)" required parsley-trigger="change" maxlength="2"> 
                                                    </div>
                                                    <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                                    <input type="text" name="prodPrice" class="form-control" id="field-1" placeholder="12 (month)" required parsley-trigger="change" maxlength="2"> 
                                                    </div>
                                                    <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                                    <input type="text" name="prodPrice" class="form-control" id="field-1" placeholder="1990 (year)" required parsley-trigger="change" maxlength="4"> 
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">email</label> 
                                                <input type="email" name="prodPrice" class="form-control" id="field-1" placeholder="nama@domain.com" required parsley-trigger="change"> 
                                            </div> 
                                        </div> 

                                        <div class="col-md-6">
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Phone / HP</label> 
                                                <input type="text" name="prodPrice" class="form-control" id="field-1" placeholder="" required parsley-trigger="change"> 
                                            </div> 
                                        </div> 

                                        <div class="col-md-9"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Address</label> 
                                                <textarea class="form-control autogrow" name="prodInfo" id="field-1" placeholder="" required parsley-trigger="change"></textarea>
                                            </div> 
                                        </div> 

                                        <div class="col-md-3"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Active Status</label> 
                                                <select class="form-control" name="prodStatus" id="field-1" parsley-trigger="change" required>
                                                    <option value="enable">Enable</option>
                                                    <option value="disable">Disable</option>
                                                </select>
                                            </div> 
                                        </div> 

                                        <div class="col-md-6">
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Emergency Name</label> 
                                                <input type="text" name="prodPrice" class="form-control" id="field-1" placeholder="" required parsley-trigger="change"> 
                                            </div> 
                                        </div> 

                                        <div class="col-md-6">
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Emergency Contact</label> 
                                                <input type="text" name="prodPrice" class="form-control" id="field-1" placeholder="" required parsley-trigger="change"> 
                                            </div> 
                                        </div> 

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Start date work</label>
                                                <div class="row"> 
                                                    <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                                    <input type="text" name="prodPrice" class="form-control" id="field-1" placeholder="08 (Date)" required parsley-trigger="change" maxlength="2"> 
                                                    </div>
                                                    <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                                    <input type="text" name="prodPrice" class="form-control" id="field-1" placeholder="12 (month)" required parsley-trigger="change" maxlength="2"> 
                                                    </div>
                                                    <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                                    <input type="text" name="prodPrice" class="form-control" id="field-1" placeholder="1990 (year)" required parsley-trigger="change" maxlength="4"> 
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>

                                         <div class="col-md-12">  
                                            <div class="form-group text-center m-b-0">
                                                <button class="btn w-md btn-default waves-effect waves-light m-t-10" type="submit">
                                                Save</button>
                                                <button type="button" onclick="goBack()" class="btn btn-primary w-md waves-effect waves-light m-l-5 m-t-10">
                                                Back</button>
                                                <button type="reset" class="btn w-md waves-effect waves-light m-l-5 m-t-10">
                                                Clear</button>
									         </div>
                                        </div>

									</div>
									</form>
								</div>
							</div>
						</div>
                            
<?php 
} else if($action=="delete"){
?>
<!-- Delete Employee -->  

						<!-- Page-Title -->
						<div class="row">
							<div class="col-sm-12">
								<h4 class="page-title">Delete Employee</h4>
								<ol class="breadcrumb">
									<li>
										<a href="index.php">Dashboard</a>
									</li>
									<li>
										<a href="master_employee.php">Employee</a>
									</li>
									<li class="active">
										Delete Employee
									</li>
								</ol>
							</div>
						</div>

                        <div class="row">
							<div class="col-lg-8">
								<div class="card-box">
									<h4 class="m-t-0 header-title"><b>Employee Form</b></h4>
		                                        
									<form action="" data-parsley-validate novalidate>
                                    <div class="row"> 

                                        <div class="col-md-8"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Name</label> 
                                                <input type="text" name="prodName" class="form-control" id="field-1" parsley-trigger="change" disabled>
                                            </div> 
                                        </div> 

                                        <div class="col-md-4"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">ID Employee</label> 
                                                <input type="text" name="prodKode" class="form-control" id="field-1" disabled>
                                            </div> 
                                        </div> 

                                        <div class="col-md-12"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Why delete this employee ?</label> 
                                                <input type="text" name="prodName" class="form-control" id="field-1" placeholder="" required parsley-trigger="change">
                                            </div> 
                                        </div> 
                                        
                                        <div class="col-md-12">  
                                            <div class="form-group text-left m-b-0">
                                                <button class="btn w-md btn-danger waves-effect waves-light" type="submit">
                                                Delete</button>
                                                <button type="button" onclick="goBack()" class="btn btn-primary w-md waves-effect waves-light m-l-5">
                                                Back</button>
									         </div>
                                        </div>
                                        
									</div>
									</form>
								</div>
							</div>
						</div>

<?php 
} else if($action=="create"){
?>
<!-- Create Employee -->  

						<!-- Page-Title -->
						<div class="row">
							<div class="col-sm-12">
								<h4 class="page-title">Create Employee</h4>
								<ol class="breadcrumb">
									<li>
										<a href="index.php">Dashboard</a>
									</li>
									<li>
										<a href="master_employee.php">Employee</a>
									</li>
									<li class="active">
										Create Employee
									</li>
								</ol>
							</div>
						</div>

                        <div class="row">
							<div class="col-lg-10">
								<div class="card-box">           
									<form action="#" data-parsley-validate novalidate>
                                    <div class="row"> 

                                        <div class="col-md-6"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">ID Employee</label> 
                                                <input type="text" name="prodName" class="form-control" id="field-1" placeholder="0000000" required parsley-trigger="change">
                                            </div> 
                                        </div> 

                                        <div class="col-md-6"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">User Level</label> 
                                                <select class="form-control" name="prodStatus" id="field-1" parsley-trigger="change" required>
                                                    <option value="">Select</option>
                                                    <option value="trp">Therapist</option>
                                                    <option value="csr">Cashier</option>
                                                    <option value="adm">Admin</option>
                                                </select>
                                            </div> 
                                        </div> 

                                        <div class="col-md-6"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Full Name</label> 
                                                <input type="text" name="prodKode" class="form-control" id="field-1" required parsley-trigger="change">
                                            </div> 
                                        </div> 

                                        <div class="col-md-6"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Nickname</label> 
                                                <input type="text" name="prodKode" class="form-control" id="field-1" required parsley-trigger="change">
                                            </div> 
                                        </div> 

                                        <div class="col-md-6"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Gender</label> 
                                                <select class="form-control" name="prodStatus" id="field-1" parsley-trigger="change" required>
                                                    <option value="">Select</option>
                                                    <option value="female">Female</option>
                                                    <option value="male">Male</option>
                                                </select>
                                            </div> 
                                        </div> 

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Date of Birth</label>
                                                <div class="row"> 
                                                    <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                                    <input type="text" name="prodPrice" class="form-control" id="field-1" placeholder="08 (Date)" required parsley-trigger="change" maxlength="2"> 
                                                    </div>
                                                    <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                                    <input type="text" name="prodPrice" class="form-control" id="field-1" placeholder="12 (month)" required parsley-trigger="change" maxlength="2"> 
                                                    </div>
                                                    <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                                    <input type="text" name="prodPrice" class="form-control" id="field-1" placeholder="1990 (year)" required parsley-trigger="change" maxlength="4"> 
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">email</label> 
                                                <input type="email" name="prodPrice" class="form-control" id="field-1" placeholder="nama@domain.com" required parsley-trigger="change"> 
                                            </div> 
                                        </div> 

                                        <div class="col-md-6">
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Phone / HP</label> 
                                                <input type="text" name="prodPrice" class="form-control" id="field-1" placeholder="" required parsley-trigger="change"> 
                                            </div> 
                                        </div> 

                                        <div class="col-md-9"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Address</label> 
                                                <textarea class="form-control autogrow" name="prodInfo" id="field-1" placeholder="" required parsley-trigger="change"></textarea>
                                            </div> 
                                        </div> 

                                        <div class="col-md-3"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Active Status</label> 
                                                <select class="form-control" name="prodStatus" id="field-1" parsley-trigger="change" required>
                                                    <option value="enable">Enable</option>
                                                    <option value="disable">Disable</option>
                                                </select>
                                            </div> 
                                        </div> 

                                        <div class="col-md-6">
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Emergency Name</label> 
                                                <input type="text" name="prodPrice" class="form-control" id="field-1" placeholder="" required parsley-trigger="change"> 
                                            </div> 
                                        </div> 

                                        <div class="col-md-6">
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Emergency Contact</label> 
                                                <input type="text" name="prodPrice" class="form-control" id="field-1" placeholder="" required parsley-trigger="change"> 
                                            </div> 
                                        </div> 

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Start date work</label>
                                                <div class="row"> 
                                                    <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                                    <input type="text" name="prodPrice" class="form-control" id="field-1" placeholder="08 (Date)" required parsley-trigger="change" maxlength="2"> 
                                                    </div>
                                                    <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                                    <input type="text" name="prodPrice" class="form-control" id="field-1" placeholder="12 (month)" required parsley-trigger="change" maxlength="2"> 
                                                    </div>
                                                    <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                                    <input type="text" name="prodPrice" class="form-control" id="field-1" placeholder="1990 (year)" required parsley-trigger="change" maxlength="4"> 
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>

                                         <div class="col-md-12">  
                                            <div class="form-group text-center m-b-0">
                                                <button class="btn w-md btn-default waves-effect waves-light m-t-10" type="submit">
                                                Save</button>
                                                <button type="button" onclick="goBack()" class="btn btn-primary w-md waves-effect waves-light m-l-5 m-t-10">
                                                Back</button>
                                                <button type="reset" class="btn w-md waves-effect waves-light m-l-5 m-t-10">
                                                Clear</button>
									         </div>
                                        </div>

									</div>
									</form>
								</div>
							</div>
						</div>
    
<?php 
} 
?>

                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <?php include 'footer.php'; ?>

            </div>


        </div>
        <!-- END wrapper -->

         <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <script src="assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
        <script src="assets/plugins/switchery/js/switchery.min.js"></script>
        <script type="text/javascript" src="assets/plugins/multiselect/js/jquery.multi-select.js"></script>
        <script type="text/javascript" src="assets/plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
        <script src="assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>

        <script type="text/javascript" src="assets/plugins/autocomplete/jquery.mockjax.js"></script>
        <script type="text/javascript" src="assets/plugins/autocomplete/jquery.autocomplete.min.js"></script>
        <script type="text/javascript" src="assets/plugins/autocomplete/countries.js"></script>
        <script type="text/javascript" src="assets/pages/autocomplete.js"></script>

        <script type="text/javascript" src="assets/pages/jquery.form-advanced.init.js"></script>

        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
        
        <script type="text/javascript" src="assets/plugins/parsleyjs/parsley.min.js"></script>


        <script type="text/javascript">
			$(document).ready(function() {
				$('form').parsley();
			});
		</script>

        <script>
        function goBack() {
            window.history.back();
        }
        </script> 
	
	</body>
</html>