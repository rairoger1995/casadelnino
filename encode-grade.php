<?php require_once('Connections/conn.php');
include('inc_security.php');
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php include('assets/includes/inc_title.php');?></title>

   	<!-- Bootstrap CSS -->
  	<link rel="stylesheet" href="assets/css/bootstrap.css">
  	<!-- Bootstrap JS -->
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.js"></script>  

  	<script>
		$(document).ready(function() {
			$(function(){
				$('.pix_diapo').diapo();
			});
		});
	</script>	
	<noscript>
		<style>
			.da-thumbs li a div {
				top: 0px;
				left: -100%;
				-webkit-transition: all 0.3s ease;
				-moz-transition: all 0.3s ease-in-out;
				-o-transition: all 0.3s ease-in-out;
				-ms-transition: all 0.3s ease-in-out;
				transition: all 0.3s ease-in-out;
			}
			.da-thumbs li a:hover div{
				left: 0px;
			}
		</style>
	</noscript>	

  	<link rel="stylesheet" href="assets/css/DT_bootstrap.css">
  	<link rel="stylesheet" href="assets/css/print.css">
	<!-- FAVICON ICON-->
    <link rel="shortcut icon" href="images/favicon.ico"/>

	<style>
		body{
			background: url(assets/images/grid_noise.png);
    		position: relative;
		}
		.carousel-inner > .item > img, .carousel-inner > .item > a > img {
			width: 100%;
			margin: auto;
		}
	</style>

	

	<script>
		$(document).ready(function(){
			$('#product-table a:first').tab('show');
		});
	</script>

	<script type="text/javascript" charset="utf-8" language="javascript" src="assets/js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf-8" language="javascript" src="assets/js/DT_bootstrap.js"></script>

</head>
<body>
	<div class="gridContainer clear">
		<?php include("assets/includes/inc_navigation.php");?>

		<div class="container">
			<ul class="nav nav-tabs" id="product-table">
			<li><a href="#1" data-toggle="tab">Section</a>

			</li>
			<li><a href="#2" data-toggle="tab">Subject</a>

			</li>
			<li><a href="#3" data-toggle="tab">Grade 3</a>

			</li>
			</ul>

			<div class="tab-content">
			<div class="tab-pane" id="1">
				<div class="col-md-2">			     
					
					
				</div>

				<table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                    <div class="alert alert-info">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Add Subject</button>	 
					    <!-- Modal add user -->
						<?php include('modal_add_course.php');?>
                    </div>
                    <thead>
                    	<tr>
							<th>Grade</th>
							<th>Section Title</th>
							<th>Action</th>
						</tr>
                    </thead>

                    <tbody>
					 
						<?php $query = "select * from tbl_sections";
						$result = mysqli_query($conn,$query);
						while($row = mysqli_fetch_assoc($result)){
						$id=$row['section_id']; ?>
						<tr>
							<td><?php echo $row['code-section']; ?></td>
							<td><?php echo $row['title-section']; ?></td>
							<td>
								<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal"><span class="glyphicon glyphicon-trash"></span> Delete</button>	 
								<!-- Modal add user -->
								<?php include('delete_subject.php');?>
								<button type="button" class="btn btn-info" data-toggle="modal" data-target="#editModal"><span class="glyphicon glyphicon-edit"></span> Edit</button>	 
								<!-- Modal add user -->
								<?php include('edit_subject.php');?>
							</td>
						</tr>
						<?php } ?>
               
                    </tbody>
                </table>

			</div>


			<div class="tab-pane" id="2">
				<table class="table table-condensed table-bordered table-striped volumes">
					<thead>
						<tr>
						<th>Warehouse</th>
						<th>Grain Volume</th>
						<th>Trade Volume</th>
						<th>Direction</th>
						</tr>
					</thead>
					
					<tbody>
						<tr>
						<td>National Food Reserve Agency_Manyoni</td>
						<td>172</td>
						<td>172.00</td>
						<td>IN</td>
						</tr>
						<tr>
						<td>Sodea GBC</td>
						<td>471</td>
						<td>20.00</td>
						<td>OUT</td>
						</tr>
						<tr>
						<td>Kivu Maize Factory</td>
						<td>389</td>
						<td>389.00</td>
						<td>IN</td>
						</tr>
						<tr>
						<td>Mombasa Bulk Grain Handlers</td>
						<td>200</td>
						<td>200.00</td>
						<td>IN</td>
						</tr>
						<tr>
						<td>Zwii Enterprises-Muloza</td>
						<td>-47</td>
						<td>47.00</td>
						<td>OUT</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="tab-pane" id="3">
				<table class="table table-condensed table-bordered table-striped volumes">
					<thead>
						<tr>
						<th>Warehouse</th>
						<th>Grain Volume</th>
						<th>Trade Volume</th>
						<th>Direction</th>
						</tr>
					</thead>

					<tbody>
						<tr>
						<td>COTCORI Cooperative</td>
						<td>93</td>
						<td>93.00</td>
						<td>IN</td>
						</tr>
						<tr>
						<td>SOSOMA GBC KICUKIRO</td>
						<td>-23</td>
						<td>23.00</td>
						<td>OUT</td>
						</tr>
						<tr>
						<td>Shabiby_Indivisual</td>
						<td>270</td>
						<td>270.00</td>
						<td>IN</td>
						</tr>
						<tr>
						<td>Silayo_Union Service Stores</td>
						<td>-38</td>
						<td>38.00</td>
						<td>OUT</td>
						</tr>
						<tr>
						<td>SGR/NFRA VWAWA</td>
						<td>-39</td>
						<td>39.00</td>
						<td>OUT</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>



	
</body>
</html>
