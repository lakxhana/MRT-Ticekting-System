<?php
session_start();
include("databaseMRTTicketingSystem.php");
$adminEmail = $_SESSION["adminEmail"];
$sql = mysqli_query($conn, "SELECT * FROM `admin` where `adminEmail`='$adminEmail' ");
$row  = mysqli_fetch_array($sql);
?>
<html>
 <head>
 <title>MRT Ticketing System Homepage</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
 </head>
 <body>
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    
    <li class="nav-item">
          <a class="nav-link active" href="adminhomepage.php">Home</a>
        </li>

        <li class="nav-item">
  <a class="nav-link" href="adminprofile.php?adminEmail=<?php echo $adminEmail?>">Profile</a>
</li>

<li class="nav-item">
  <a class="nav-link" href="stationinformation.php">Station Information</a>
</li>

<li class="nav-item">
  <a class="nav-link" href="userfeedback.php">User Feedback</a>
</li>

<li class="nav-item">
  <a class="nav-link" href="userbookingdetails.php">User Booking Details</a>
</li>

<li class="nav-item">
  <a class="nav-link" href="adminlogout.php">Log Out</a>
</li>

</ul>
<form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-dark" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/pic3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>MRT Ticketing System</h5>
        <p1>View Station Information!</p1>
        <div class= "slider-btn">
        <a href="stationinformation.php"> <button class= "btn btn-1"> Station Information </button> </a>
      </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/pic1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>View Users' Booking Details!</h5>
        <p1></p1>
        <div class= "slider-btn">
        <a href="userbookingdetails.php"> <button class= "btn btn-1">Booking Details</button> </a>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/pic4.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>View Users' Feedback!</h5>
        <p1></p1>
        <div class= "slider-btn">
        <a href="userfeedback.php"> <button class= "btn btn-1">View Feedback</button> </a>
        </div>
</div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

 </body>
</html>