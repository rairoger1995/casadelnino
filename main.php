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

	<style>
		.carousel-inner > .item > img, .carousel-inner > .item > a > img {
			width: 100%;
			margin: auto;
		}
	</style>
</head>
<body>
<div class="gridContainer clear">
<?php include("assets/includes/inc_navigation.php");?>
  

  
    <div id="content">
        <div id="contentpad">
			<?php if($_SESSION['levelID']==3){ ?>
				<div class="container">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
							<li data-target="#myCarousel" data-slide-to="3"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
							  <img src="assets/images/cropped-Banner1.jpg" alt="Chania">
							</div>

							<div class="item">
							  <img src="assets/images/cropped-Banner1.jpg" alt="Chania">
							</div>

							<div class="item">
							  <img src="assets/images/cropped-Banner1.jpg" alt="Flower">
							</div>

							<div class="item">
							  <img src="assets/images/cropped-Banner1.jpg" alt="Flower">
							</div>
						</div>

						<!-- Left and right controls -->
						<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			<?php }?>
			<?php if($_SESSION['levelID']==2){ ?>
				<div class="container">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
							<li data-target="#myCarousel" data-slide-to="3"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
							  <img src="assets/images/cropped-Banner1.jpg" alt="Chania">
							</div>

							<div class="item">
							  <img src="assets/images/cropped-Banner1.jpg" alt="Chania">
							</div>

							<div class="item">
							  <img src="assets/images/cropped-Banner1.jpg" alt="Flower">
							</div>

							<div class="item">
							  <img src="assets/images/cropped-Banner1.jpg" alt="Flower">
							</div>
						</div>

						<!-- Left and right controls -->
						<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			<?php }?>
			<?php if($_SESSION['levelID']==1){ ?>
				<div class="container">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
							<li data-target="#myCarousel" data-slide-to="3"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
							  <img src="assets/images/cropped-Banner1.jpg" alt="Chania">
							</div>

							<div class="item">
							  <img src="assets/images/cropped-Banner1.jpg" alt="Chania">
							</div>

							<div class="item">
							  <img src="assets/images/cropped-Banner1.jpg" alt="Flower">
							</div>

							<div class="item">
							  <img src="assets/images/cropped-Banner1.jpg" alt="Flower">
							</div>
						</div>

						<!-- Left and right controls -->
						<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
						</a>
					</div>
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
