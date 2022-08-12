
<?php
session_start();
include("databaseMRTTicketingSystem.php");
$userEmail = $_SESSION["userEmail"];
$sql = mysqli_query($conn, "SELECT * FROM user where userEmail='$userEmail' ");
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
          <a class="nav-link" href="userhomepage.php">Home</a>
        </li>

        <li class="nav-item">
  <a class="nav-link" href="profile.php">Profile</a>
</li>

<li class="nav-item">
  <a class="nav-link active" href="booktickets.php">Book Tickets</a>
</li>

<li class="nav-item">
  <a class="nav-link" href="feedback.php">Feedback</a>
</li>

<li class="nav-item">
  <a class="nav-link" href="bookingdetails.php">Booking Details</a>
</li>


<li class="nav-item">
  <a class="nav-link" href="#">Log Out</a>
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

 <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
    Booking Confirmation</h2> 
<div class= "inner2">

                  
</br>
              
<div class= "bookinglabel"> 
              
                   Name: <?php echo $row["userName"]; ?>
</br>
</br>
                   Email: <?php echo $row["userEmail"]; ?>
</br>
</br>
                   Contact Number: +60<?php echo $row["userContactNumber"]; ?>
</br>
</br>

<?php
            $query= "SELECT * FROM `ticket` where `userID`= (SELECT `userID` FROM `user` WHERE  `userEmail`='$userEmail')  ORDER BY `ticketID` DESC LIMIT 1";
            $result= mysqli_query ($conn,$query);
            $row2=mysqli_fetch_assoc($result)
            
            ?>
        
          
            Ticket ID:  <?php echo $row2 ["ticketID"]; ?>
</br>
</br>
            Station Depart:<?php echo $row2["stationDepart"]; ?> 
</br>
</br>
            Station Arrive:<?php echo $row2["stationArrive"]; ?> 
</br>
</br>
            Ticket Amount:<?php echo $row2["ticketAmount"]; ?> 
</br>
</br>
            Ticket Price:<?php echo $row2["ticketPrice"]; ?> 
          
        


                   
</br>
</br>

            
       
                   <div class= "slider-btn4">
                <a href="bookingdetails.php"> <button class= "btn btn-2"  type= "submit" >Book Now </button> </a>
                    </div> 
                    <div class= "slider-btn4">
                    <a href="cancelbooking.php"> <button class= "btn btn deletebtn"  type= "button" > Cancel Now </button></a>
                    </div>
                 
                    </div>        
                 
                   
</div>
</div>

 </body>
</html>