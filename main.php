<?php require_once('Connections/conn.php');
include('inc_security.php');
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
	<title><?php include('assets/includes/inc_title.php');?></title>
	<meta name="description" content="File Upload widget with multiple file selection, drag&amp;drop support, progress bars, validation and preview images, audio and video for jQuery. Supports cross-domain, chunked and resumable file uploads and client-side image resizing. Works with any server-side platform (PHP, Python, Ruby on Rails, Java, Node.js, Go etc.) that supports standard HTML form file uploads.">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

   	<!-- Bootstrap CSS -->
  	<link rel="stylesheet" href="assets/css/bootstrap.css">
  	<link rel="stylesheet" href="assets/css/bootstrap-theme.css">	
	<!-- FAVICON ICON-->
    <link rel="shortcut icon" href="images/favicon.ico"/>
</head>
<body>
<div class="gridContainer clear">
<?php include("assets/includes/inc_navigation.php");?>
  

  
    <div id="content">
        <div id="contentpad">
			<?php if($_SESSION['levelID']==3){ ?>
				<div class="container">
					<h1>User</h1>
				</div>
			<?php }?>
			<?php if($_SESSION['levelID']==2){ ?>
				<div class="container">
					<h1>Admin</h1>
				</div>
			<?php }?>
			<?php if($_SESSION['levelID']==1){ ?>
				<div class="container">
					<h1>SuperUser</h1>
				</div>
			<?php }?>
			</div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
		<script src="assets/js/jquery.js"></script>
	    <script src="assets/js/bootstrap.js"></script>  
</body>
</html>
