<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
		<title>Syllabus</title>
		<style type="text/css">
			th,td{
				text-align: center;
			}
			th{
				background: #4CAF50;
				color: #FFF;
				font-weight: bolder;
			}

			
		</style>
	</head>
	<body>
		<div class="jumbotron">
			<div class="container">
				<h2 align="center"><strong>CSE</strong> Study Assistant <small>Syllabus</small></h2>
				<h4 align="center">
					<?php
					$yr = $_GET['yr'];
					$sem = $_GET['sem'];
					echo $yr." Year, ".$sem." Semester";
					$ys = $yr.$sem;

					$conn = mysql_connect("localhost","root","lumas");
					mysql_select_db("oni");

					?>
				</h4>
			</div>
		</div>
		<?php include "../recesorces/menu.php";?>
		<?php

			?>

			<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<table class="table table-striped table-bordered table-responsive">
						<tr class="navbar-inverse">
							<th>Course Code</th>
							<th>Course Title</th>
							<th>Marks</th>
							<th>Credits</th>
						</tr>
						<?php
						$sql = "SELECT * FROM syllabus WHERE ys = '{$ys}'";
						$res = mysql_query($sql);
						$tnum = 0;
						$tcredit = 0;

						while($data = mysql_fetch_array($res)){
							$tnum += $data[3];
							$tcredit += $data[4];

							?>

								<tr>
									<td><?php echo $data[1];?></td>
									<td><?php echo $data[2];?></td>
									<td><?php echo $data[3];?></td>
									<td><?php echo sprintf("%.2f",$data[4]);?></td>
								</tr>

							<?php
						}


						?>
						<tr id="footer">
							<th></th>
							<th >TOTAL</th>
							<th><?php echo $tnum;?></th>
							<th><?php echo sprintf("%.2f",$tcredit);?></th>
						</tr>
					</table>
				</div>
				
			</div>
		</div><!--end container div-->



			<?php



		?>


		<script type="text/javascript" src="../jquery/dist/jquery.min.js"></script>
		<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>