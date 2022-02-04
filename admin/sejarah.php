<?php
  session_start();

  if( !isset($_SESSION["login_admin"])){
    header("Location: login_admin.php");
    exit;
  }
  
	require 'include/header.php';
	require 'include/navbar.php';
?>

	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
	        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
       	<div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/background_2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              	<h1 class="display-4" style="font-size:65px">SEJARAH<br> 
              		<span class="font-weight-bold">GKI PENGINJIL SUKABUMI </h1></center>
              	<hr class="my-4" style="color:white">
              	<br><br><br>
              </div>
        </div>
        <div class="carousel-item">
	        <img src="img/background_2.jpg" class="d-block w-100" alt="...">
	        <div class="carousel-caption d-none d-md-block">
              	<h1 class="display-4"  style="font-size:60px">AWAL SEJARAH BERDIRINYA<br> 
                  <span class="font-weight-bold">GKI PENGINJIL SUKABUMI</h1></center>
              	<hr class="my-4" style="color:white">
            	<center>
            		<p class="lead" style="font-size: 22px"> 
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              	</p>
              </center> 
              <center><a class="btn btn-primary btn-lg font-weight-bold" href="#" role="button" style="text-align: right">EDIT</a></center>  
            </div>
        </div>
        <div class="carousel-item">
          <img src="img/background_2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
                <h1 class="display-4"  style="font-size:60px">PENDETA YANG MELAYANI DI<br> 
                  <span class="font-weight-bold">GKI PENGINJIL SUKABUMI</h1></center>
                <hr class="my-4" style="color:white">
              <center>
                <p class="lead" style="font-size: 22px"> 
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
              </center> 
              <center><a class="btn btn-primary btn-lg font-weight-bold" href="#" role="button" style="text-align: right">EDIT</a></center>  
            </div>
        </div>
        <div class="carousel-item">
          <img src="img/background_2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
                <h1 class="display-4"  style="font-size:60px">RENOVASI GEDUNG<br> 
                  <span class="font-weight-bold">GKI PENGINJIL SUKABUMI</h1></center>
                <hr class="my-4" style="color:white">
              <center>
                <p class="lead" style="font-size: 22px"> 
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
              </center> 
              <center><a class="btn btn-primary btn-lg font-weight-bold" href="#" role="button" style="text-align: right">EDIT</a></center>  
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

</body>
</html> 
