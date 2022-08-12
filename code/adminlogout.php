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
          <a class="nav-link " href="adminhomepage.php">Home</a>
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
  <a class="nav-link active" href="adminlogout.php">Log Out</a>
</li>

</ul>
<form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-dark" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<form action="adminlogout.php" method="POST"> 
<div class= "wallpaper"> 
<div class= "card">
       <input type="checkbox" id="chk" aria-hidden="true" name="">
       <div class="content">
           <div class="front">
               <div class="inner">
</br>
                   <h2> Log Out</h2>
                   <p>Are you sure? Current session will end if you decide to log out.</p>
                   </br>
                   <div class= "slider-btn2">
                   <button type="submit" name="logout" class="btn btn-primary">Logout</button>
                    </div> 
                 
                </div>
                
            </div>
            </form>

            

        </div>
    </div>
</div>


<?php
session_start();

if(isset($_POST['logout']))
{
    session_destroy();
    unset($_SESSION['adminEmail']);
    echo "<script type='text/javascript'>window.location='homepage.php?";
    echo "'</script>";	
}

?>

 </body>
</html>
 </html>