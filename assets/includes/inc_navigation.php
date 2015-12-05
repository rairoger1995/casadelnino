<nav class="navbar navbar-default">
	<div class="container-fluid">

		<!-- super admin -->

		<?php if($_SESSION['levelID']==1){ ?>
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			   <a class="navbar-brand" href="main.php">Casa Del Niño Schools System Inc. </a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav">
				<li><a href="main.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Add Modules <span class="caret"></span></a>
				  <ul class="dropdown-menu">
					<li class="dropdown-header">Add </li>
					<li><a href="#">Add </a></li>
					<li role="separator" class="divider"></li>
					<li class="dropdown-header">Add</li>
					<li><a href="#">ADD</a></li>
					<li><a href="#">ADD</a></li>
					<li><a href="#">ADD</a></li>
					<li><a href="#">ADD</a></li>
				  </ul>
				</li>
			  </ul>
			  <ul class="nav navbar-nav navbar-right">
				<li><a href="#">Link</a></li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['fullname']; ?><span class="caret"></span></a>
				  <ul class="dropdown-menu">
					
					<li><a href="#">Another action</a></li>
					<li><a href="#">Something else here</a></li>
					<li role="separator" class="divider"></li>
					<li><a href="index.php">Logout</a></li>
				  </ul>
				</li>
			  </ul>
			</div><!-- /.navbar-collapse -->
		<?php }?>
		

		<!-- admin -->


		<?php if($_SESSION['levelID']==2){ ?>
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="main.php">Casa Del Niño Schools System Inc. </a>
			</div>
	
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav">
				<li><a href="main.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
				<li><a href="encode-grade.php"><span class="glyphicon glyphicon-tasks"></span> Grade Encoding</a></li>
				<li><a href="dropbox.php"><span class="glyphicon glyphicon-folder-open"></span>  File Manager</a></li>
			  </ul>
			  
			  <ul class="nav navbar-nav navbar-right">
				<li><a href="#"> <?php echo "Today is " . date("m/d/Y"). " " . date("h:i:a"); ?> </a></li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span>  <?php echo $_SESSION['fullname']; ?><span class="caret"></span></a>
				  <ul class="dropdown-menu">
					<li><a href="#">Another action</a></li>
					<li><a href="#">Something else here</a></li>
					<li role="separator" class="divider"></li>
					<li><a href="index.php">Logout</a></li>
				  </ul>
				</li>
			  </ul>
			</div><!-- /.navbar-collapse -->
		<?php }?>
		

		<!-- user student -->


		<?php if($_SESSION['levelID']==3){ ?>
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			   <a class="navbar-brand" href="main.php">Casa Del Niño Schools System Inc. </a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav">
				<li><a href="main.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
				<li><a href="grades.php"><span class="glyphicon glyphicon-flag"></span> Evaluation Grade</a> </li>
			  </ul>
			  <ul class="nav navbar-nav navbar-right">
				<li><a href="#">Link</a></li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['fullname']; ?><span class="caret"></span></a>
				  <ul class="dropdown-menu">
					<li><a href="#">Another action</a></li>
					<li><a href="#">Something else here</a></li>
					<li role="separator" class="divider"></li>
					<li><a href="index.php">Logout</a></li>
				  </ul>
				</li>
			  </ul>
			</div><!-- /.navbar-collapse -->
		<?php }?>
	</div><!-- /.container-fluid -->
</nav>