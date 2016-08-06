<!DOCTYPE html>

<html>
	<head>


	<title>Create an account</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
    <style type="text/css">
      #image-title{
        width: 100%;
        height: 200px;
      }
      body{
        background: #ddd;
      }
      .myJumbo{
        margin-top: -50px;
      }
      .custombody{
        height: 400px;
        background: white;
        margin-top: 100px;
        padding-top: 30px;
      }


    </style>
	</head>

<body>

   

  <div class="container">
		<div class="row">
			 <div class="col-sm-6 col-sm-offset-3 custombody">
           <form class="inline-form" name="mySignupForm" method="POST" action="#" autocomplete="off">
              <h4 align="center" style="text-align:center; padding-bottom:20px;">Sign up Form</h4>
              <div class="form-group has-feedback">
                <input type="text" name="name" class="form-control" placeholder="Full name">
              </div>
              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email Address">
              </div>
              <div class="form-group">
                <input type="text" name="batch" class="form-control" placeholder="Your Batch" autocomplete="off">
              </div>
              <div class="form-group">
                <input type="password" name="pass" class="form-control" placeholder="Password">
              </div>
              <div class="form-group">
                <input type="password" name="rpass" class="form-control" placeholder="Retype Password">
              </div>
              <div class="form-group">
                <input type="submit" name="submit" class="form-control btn btn-danger" value="Create">
              </div>
           </form>
       </div>
    </div><!-- end row class-->
  </div>




		<script type="text/javascript" src="../jquery/dist/jquery.min.js"></script>
		<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
		

    <?php
      include "../recesorces/connect.php";
      $name = $_POST['name'];
      $email  = $_POST['email'];
      $batch = $_POST['batch'];
      $password = $_POST['pass'];
      $rpassword = $_POST['rpass'];

      if(isset($_POST['submit'])){
          if($password === $rpassword){
            $sql = "INSERT INTO user VALUES ('$name','$email','$batch','$password')";
            $s = mysql_query($sql);
            if($s){
              ?>
              <script type="text/javascript">
                window.location.href = "../home/";
              </script>>

              <?php
            }

          }else{
            echo "Password not matched!";
          }      
      }
      


    ?>


	</body>
</html>

