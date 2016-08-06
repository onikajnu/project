<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
		<title>Lectures</title>
	</head>
	<body>
		<div class="jumbotron">
			<div class="container">
				<h2 align="center"><strong>CSE</strong> Study Assistant <small>Lectures</small></h2>
				<h4 align="center">
					<?php
					$yr = $_GET['yr'];
					$sem = $_GET['sem'];
					echo $yr." Year, ".$sem." Semester";

					?>
				</h4>
			</div>
		</div>
		<?php include "../recesorces/menu.php";?>
		<div class="container">
			<div class="row">
				
			</div>
		</div><!--end container div-->


		<script type="text/javascript" src="../jquery/dist/jquery.min.js"></script>
		<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>