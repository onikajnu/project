<nav class="navbar navbar-inverse deg">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNav" aria-expanded="false">
						<span class="sr-only"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
   					</button>
                  </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
     <div class="collapse navbar-collapse" id="myNav">
      <ul class="nav navbar-nav">
     


        <li class="active"><a href="../home/">Home <span class="sr-only">(current)</span></a></li>


        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Syllabus <span class="caret"></span></a>
          <ul class="dropdown-menu">
           <li><a href="../syllabus/?yr=1&sem=1">1st year 1st semester</a></li>
            <li><a href="../syllabus/?yr=1&sem=2">1st year 2nd semester</a></li>
            <li><a href="../syllabus/?yr=2&sem=1">2nd year 1st semester</a></li>
            <li><a href="../syllabus/?yr=2&sem=2">2nd year 2nd semester</a></li>
            <li><a href="../syllabus/?yr=3&sem=1">3rd year 1st semester</a></li>
            <li><a href="../syllabus/?yr=3&sem=2">3rd year 2nd semester</a></li>
            <li><a href="../syllabus/?yr=4&sem=1">4th year 1st semester</a></li>
            <li><a href="../syllabus/?yr=4&sem=2">4th year 2nd semester</a></li>

          </ul>
        </li>


        <li class="dropdown">
          <a href="../Lectures/Lectures.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Lectures<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="../lectures/?yr=1&sem=1">1st year 1st semester</a></li>
            <li><a href="../lectures/?yr=1&sem=2">1st year 2nd semester</a></li>
            <li><a href="../lectures/?yr=2&sem=1">2nd year 1st semester</a></li>
            <li><a href="../lectures/?yr=2&sem=2">2nd year 2nd semester</a></li>
            <li><a href="../lectures/?yr=3&sem=1">3rd year 1st semester</a></li>
            <li><a href="../lectures/?yr=3&sem=2">3rd year 2nd semester</a></li>
            <li><a href="../lectures/?yr=4&sem=1">4th year 1st semester</a></li>
            <li><a href="../lectures/?yr=4&sem=2">4th year 2nd semester</a></li>
          </ul>
        </li>




         <li class="dropdown">
          <a href="../books/books.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Books<span class="caret"></span></a>
          <ul class="dropdown-menu">
           <li><a href="../books/?yr=1&sem=1">1st year 1st semester</a></li>
            <li><a href="../books/?yr=1&sem=2">1st year 2nd semester</a></li>
            <li><a href="../books/?yr=2&sem=1">2nd year 1st semester</a></li>
            <li><a href="../books/?yr=2&sem=2">2nd year 2nd semester</a></li>
            <li><a href="../books/?yr=3&sem=1">3rd year 1st semester</a></li>
            <li><a href="../books/?yr=3&sem=2">3rd year 2nd semester</a></li>
            <li><a href="../books/?yr=4&sem=1">4th year 1st semester</a></li>
            <li><a href="../books/?yr=4&sem=2">4th year 2nd semester</a></li>

          </ul>
        </li>



         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Lab Work<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="../labworks/?yr=1&sem=1">1st year 1st semester</a></li>
            <li><a href="../labworks/?yr=1&sem=2">1st year 2nd semester</a></li>
            <li><a href="../labworks/?yr=2&sem=1">2nd year 1st semester</a></li>
            <li><a href="../labworks/?yr=2&sem=2">2nd year 2nd semester</a></li>
            <li><a href="../labworks/?yr=3&sem=1">3rd year 1st semester</a></li>
            <li><a href="../labworks/?yr=3&sem=2">3rd year 2nd semester</a></li>
            <li><a href="../labworks/?yr=4&sem=1">4th year 1st semester</a></li>
            <li><a href="../labworks/?yr=4&sem=2">4th year 2nd semester</a></li>

          </ul>
        </li>

<li class="dropdown">
 <a href="../Question bank/que.html"
  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Question Bank<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="../Question bank/1b.html">1st batch</a></li>
            <li><a href="../Question bank/2b.html">2nd batch</a></li>
            <li><a href="../Question bank/3b.html">3rd batch</a></li>
            <li><a href="../Question bank/4b.html">4th batch</a></li>
            <li><a href="../Question bank/5b.html">5th batch</a></li>
            <li><a href="../Question bank/6b.html">6th batch</a></li>
            <li><a href="../Question bank/7b.html">7th batch</a></li>
            
          </ul>
        </li>
<li><a href="../others/">Others</a></li>
  <?php
    session_start();
    if(!isset($_SESSION['login'])){
      ?>
        <li><a href="../login/">Login</a></li>
      <?php
    }elseif($_SESSION['login'] == 1){
      ?>
      <li><a class="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['uname']; ?><span class="caret"></span>
      <ul class="dropdown-menu">
        <li><a href="../recesorces/logout.php">Log out</a></li>
      </ul>
      </a></li>

      <?php
    }

  ?>

  
      </ul>

      <form class="navbar-form navbar-right" role="search">
        <div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="Search">
          <span class="glyphicon glyphicon-search form-control-feedback"></span>
        </div>

        <button type="submit" class="btn btn-info invisible"></button>
      </form>

      </div>


      </div>
</nav>

