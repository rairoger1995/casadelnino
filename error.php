<?php
session_start();
$_SESSION['restrictLogin']=0;
?>
<!DOCTYPE html>
<html>
	<head>

	<title><?php include('assets/includes/inc_title.php');?></title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/login.css">
	<!-- ReCAPTCHA JS -->
	<script src="https://www.google.com/recaptcha/api.js"></script>
	<!-- FAVICON ICON-->
    <link rel="shortcut icon" href="images/favicon.ico"/>


	</head>
	<body class="div-login">
		<div class="container login" style="color:#fff; font-weight:200px;">
			<div class="col-md-5">
				<div class="row">
					<h3>Sign in </h3>
				</div>
				<div class="row divLogin">
					<form action="process.php" method="post" role="signin">
	                    <div class="alert alert-warning fade in">
						    <a href="#" class="close" data-dismiss="alert">&times;</a>
						    <strong>Warning!</strong> There was a problem with your credentials.
						</div>
						<div class="form-group has-error has-feedback">
						  <label class="control-label" for="inputError2">Username</label>
						  <input type="text" class="form-control"  name="txtUsername" id="txtUsername" aria-describedby="inputError2Status">
						  <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
						  <span id="inputError2Status" class="sr-only">(error)</span>
						</div>
						<div class="form-group has-error has-feedback">
						  <label class="control-label" for="inputError2">Password</label>
						  <input type="text" class="form-control"  name="txtPassword" id="txtPassword" aria-describedby="inputError2Status">
						  <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
						  <span id="inputError2Status" class="sr-only">(error)</span>
						</div>
	                    <div class="form-group pull-left" style="margin-left:15px;">
	                    	<button type="submit" name="btnLogin" id="btnLogin" class="btn btn-danger">Login</button>
	                	</div>
		            </form>
				</div>
			</div>
		</div>	
		

	<!-- Bootstrap JS -->
		<script src="assets/js/jquery.js"></script>
	    <script src="assets/js/bootstrap.js"></script>  
	</body>
</html>