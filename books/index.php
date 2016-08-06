<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
		<title>books</title>
	</head>
	<body>
		<?php
			$yr = $_GET['yr'];
			$sem = $_GET['sem'];
		?>

		<div class="jumbotron">
			<div class="container">
				<h2 align="center"><strong>CSE</strong> Study Assistant <small>Books</small></h2>
				<h4 align="center">
					<?php
					
					echo $yr." Year, ".$sem." Semester";
					include "../recesorces/connect.php";
					$sql = "SELECT * FROM books WHERE year = '$yr' AND sem = '$sem'";
					$s = mysql_query($sql);

					?>
				</h4>
			</div>
		</div>
		<?php include "../recesorces/menu.php";?>
		<div class="container">
			<div class="row">
				<?php
					if($s){
						?>

						<table class="table table-striped table-bordered table-responsive">
							<tr>
								<th>Sl.</th>
								<th>Subject Name</th>
								<th>Books Name</th>
								<th>Download <span class="glyphicon glyphicon-download-alt"></span></th>
							</tr>
							<?php
							while($data = mysql_fetch_array($s)){
									$subs = $data[4];
									$finalsubs = explode(',', $subs);
									$r = count($finalsubs);
									$links = $data[5];
									$finallinks = explode(',', $links);

								?>

								<tr>
									<td rowspan="<?php echo $r;?>"><?php echo $data[0];?></td>
									<td rowspan="<?php echo $r;?>"><?php echo $data[3];?></td>
									<td><?php echo $finalsubs[0];?></td>
									<td><a href="<?php echo $finallinks[0]?>">Download</a></td>
									
									
								</tr>
								
									
									<?php
										
										for($i = 1; $i < $r ; $i++){
											?>
												<tr>
													<td><?php echo $finalsubs[$i];?></td>
													<td><a href="<?php echo $finallinks[$i]?>">Download</a></td>
												</tr>
											<?php
										}

									?>
									
								

								<?php
							}


							?>
						</table>

						<?php
					}
				?>
			</div>	
		</div><!--end container div-->



		<?php




		?>

		<script type="text/javascript" src="../jquery/dist/jquery.min.js"></script>
		<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>