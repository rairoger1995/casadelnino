<?php
session_start();
$_SESSION['restrictLogin']=0;

?>

<?php
include('assets/includes/header.php');
?>

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
	                    	<button type="submit" name="btnLogin" id="btnLogin" class="btn btn-primary">Login</button>
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