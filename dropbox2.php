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

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="styles/reset.css" />
	<link rel="stylesheet" type="text/css" href="scripts/jquery.filetree/jqueryFileTree.css" />
	<link rel="stylesheet" type="text/css" href="scripts/jquery.contextmenu/jquery.contextMenu-1.01.css" />
	<link rel="stylesheet" type="text/css" href="scripts/custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" />
<style type="text/css">
	#loading-wrap {
		position:fixed;
		height:100%;
		width:100%;
		overflow:hidden;
		top:0;
		left:0;
		display:block;
		background: white url(./images/wait30trans.gif) no-repeat center center;
		z-index:999;
	}
</style>
</head>

<body>
<div class="gridContainer clearfix">
	<?php include("assets/includes/inc_navigation.php");?>
	<form id="uploader" method="post">
	<h1></h1>
	<div id="uploadresponse"></div>
	<button id="level-up" name="level-up" type="button" value="LevelUp">&nbsp;</button>
	<button id="home" name="home" type="button" value="Home">&nbsp;</button>
	<input id="mode" name="mode" type="hidden" value="add" /> 
	<input id="currentpath" name="currentpath" type="hidden" />
	<div id="file-input-container">
		<div id="alt-fileinput">
			<input id="filepath" name="filepath" type="text" /><button id="browse" name="browse" type="button" value="Browse"></button>
		</div>
		<input	id="newfile" name="newfile" type="file" />
	</div>
	<button id="upload" name="upload" type="submit" value="Upload" class="em"></button>
	<button id="newfolder" name="newfolder" type="button" value="New Folder" class="em"></button>
	<button id="grid" class="ON" type="button">&nbsp;</button>
	<button id="list" type="button">&nbsp;</button>
</form>
<div id="splitter">
<div id="filetree"></div>
	<div id="fileinfo">
	<h1></h1>
	</div>
</div>
<div id="footer">
<form name="search" id="search" method="get">
		<div>
			<input type="text" value="" name="q" id="q" />
			<a id="reset" href="#" class="q-reset"></a>
			<span class="q-inactive"></span>
		</div> 
</form>
<a href="" id="link-to-project"></a>
<div id="folder-info"></div>
</div>

<ul id="itemOptions" class="contextMenu">
	<li class="select"><a href="#select"></a></li>
	<li class="download"><a href="#download"></a></li>
	<li class="rename"><a href="#rename"></a></li>
	<li class="move"><a href="#move"></a></li>
	<li class="replace"><a href="#replace"></a></li>
	<li class="delete separator"><a href="#delete"></a></li>
</ul>

<script type="text/javascript" src="scripts/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="scripts/jquery-browser.js"></script>
<script type="text/javascript" src="scripts/jquery.form-3.24.js"></script>
<script type="text/javascript" src="scripts/jquery.splitter/jquery.splitter-1.5.1.js"></script>
<script type="text/javascript" src="scripts/jquery.filetree/jqueryFileTree.js"></script>
<script type="text/javascript" src="scripts/jquery.contextmenu/jquery.contextMenu-1.01.js"></script>
<script type="text/javascript" src="scripts/jquery.impromptu-3.2.min.js"></script>
<script type="text/javascript" src="scripts/jquery.tablesorter-2.7.2.min.js"></script>
<script type="text/javascript" src="scripts/filemanager.min.js"></script>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>
