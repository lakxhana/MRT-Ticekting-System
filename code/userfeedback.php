
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
  <a class="nav-link " href="adminprofile.php?adminEmail=<?php echo $adminEmail?>">Profile</a>
</li>

<li class="nav-item">
  <a class="nav-link" href="stationinformation.php">Station Information</a>
</li>

<li class="nav-item">
  <a class="nav-link active" href="userfeedback.php">User Feedback</a>
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
<div class= "wallpaper"> 
    <div class= "container4"> 
    <h3> User Feedback</h3>
</br>
</br>
    <table class="table table-bordered table">
           <tr>
               <th>Feedback ID</th>
               <th>Feedback Description</th>
           </tr>
            <?php
            $query= "SELECT * FROM `feedback`";
            $result= mysqli_query ($conn,$query);
            while ($row2=mysqli_fetch_assoc($result))
            {
            ?>
            
         <tr>
             <td> <?php echo $row2["feedbackID"]; ?></td>
            <td> <?php echo $row2["feedbackDescription"]; ?> </td>
           
        </tr>
        <?php
            }
        ?>
    </table> 
    </div>
</div>
</body>
</html>