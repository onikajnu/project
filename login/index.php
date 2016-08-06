<!DOCTYPE html>

<html>
	<head>


	<title>Home</title>
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
        background: gray;
      }
      .myJumbo{
        margin-top: -50px;
      }
      .custom-panel{
        background: white;
        height: 400px;
        margin-top:5px;

      }
      .custom-panel-2{
        background: white;
        height: 50px;
        margin-top: 60px;
      }
      #myForm{
        margin-top:150px;
      }
      #myForm .custom-div{
        width: 400px;
        margin-left: 80px;
      }
    </style>
	</head>

<body>

  <div class="container">
    <div class="row ">
      <div class="col-sm-6 col-sm-offset-3 custom-panel-2">
        <h4 class="title" align="center"><strong>Login</strong></h4>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3 custom-panel">
          <form name="myLoginForm" method="POST" action="#" id="myForm">
            <div class="form-group has-feedback custom-div">
              <input type="text" name="user" placeholder="User Name" class="form-control">
              <span class="form-control-feedback glyphicon glyphicon-user"></span>  
            </div>
            <div class="form-group has-feedback custom-div">
              <input type="password" name="pass" placeholder="Password" class="form-control">
              <span class="form-control-feedback glyphicon glyphicon-lock"></span>  
            </div>
            <div class="form-group custom-div">
              <input type="submit" name="login" value="Login" class="form-control btn btn-success">
              <h4 style="padding-top:15px;">Don't have an account?  <a href="../signup/">Create here</a></h4>  
            </div>
            
            

          </form>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        
      </div>
    </div>
  </div><!--end container -->


    <?php
      session_start();
      include "../recesorces/connect.php";

      $sql = "SELECT * FROM user WHERE user = '$user' AND pass = '$pass'";
      $s = mysql_query($sql);
      $data = mysql_fetch_array($s);
      if(mysql_num_rows($s) == 1){
        $_SESSION['login'] = 1;
        $_SESSION['uname'] = $data[0];
        ?>
        <script type="text/javascript">
          window.location.href = "../home/";
        </script>

        <?php
      }


    ?>


		<script type="text/javascript" src="../jquery/dist/jquery.min.js"></script>
		<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
		
	</body>
</html>

