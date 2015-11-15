<?php
session_start();
$_SESSION['restrictLogin']=0;

?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<title><?php include('assets/includes/inc_title.php');?></title>
	<meta name="description" content="File Upload widget with multiple file selection, drag&amp;drop support, progress bars, validation and preview images, audio and video for jQuery. Supports cross-domain, chunked and resumable file uploads and client-side image resizing. Works with any server-side platform (PHP, Python, Ruby on Rails, Java, Node.js, Go etc.) that supports standard HTML form file uploads.">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	
	<!-- Bootstrap CSS -->
  	<link rel="stylesheet" href="assets/css/bootstrap.css">
  	<link rel="stylesheet" href="assets/css/bootstrap-theme.css">
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
				<div class="row divLogin">
					<form action="process.php" method="post" role="signin">
	                    <div class="form-group col-md-10">
	                		<label for="InputName">Username: </label>
	                    	<div class="input-group">
	                    		<input type="text" class="form-control" name="txtUsername" id="txtUsername" placeholder="Username"required>
	                    		<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
	                		</div>
	            		</div>
	                    <div class="form-group col-md-10">
	                        <label for="InputName">Password</label>
	                        <div class="input-group">
	                            <input type="password" class="form-control" name="txtPassword" id="txtPassword" placeholder="Password"required>
	                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
	                        </div>
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