
<?php
session_start();
include("databaseMRTTicketingSystem.php");
$userEmail = $_SESSION["userEmail"];
$sql = mysqli_query($conn, "SELECT * FROM user where userEmail='$userEmail' ");
$row  = mysqli_fetch_array($sql);
?>

<html>
 <head>
 <script type="text/javascript">
function validateForm(){
  var a= document.forms["profileform"]["userName"].value;
  var c= document.forms["profileform"]["userContactNumber"].value;
  var d= document.forms["profileform"]["userPassword"].value;

  if(a== ""){
    alert("Please enter your name");
    return false;
  }
  if(c== ""){
    alert("Please enter your contact number");
    return false;
  }
  if(!/^[0-9]+$/.test(c)){
    alert("Please only enter numeric characters only for your Contact Number! (Allowed input:0-9)")
  }

  if(d== ""){
    alert("Please enter your password");
    return false;
  }

  if(d.length <= 6 ){
    alert("Password must be longer than 6 characters");
    return false;
  }


}

</script>

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
  <a class="nav-link active" href="profile.php">Profile</a>
</li>

<li class="nav-item">
  <a class="nav-link " href="booktickets.php">Book Tickets</a>
</li>

<li class="nav-item">
  <a class="nav-link" href="feedback.php">Feedback</a>
</li>

<li class="nav-item">
  <a class="nav-link" href="bookingdetails.php">Booking Details</a>
</li>


<li class="nav-item">
  <a class="nav-link" href="userlogout.php">Log Out</a>
</li>

</ul>
<form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-dark" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<form name="profileform" method="POST" action="profileinput.php" onSubmit = "return validateForm()">  
<div class= "wallpaper"> 
<div class= "card3">
       <input type="checkbox" id="chk" aria-hidden="true" name="">
       <div class="content">
           <div class="front">
               <div class="inner">
                   <h2> Profile </h2>
                  <div class= "profilelabel"> 
                   Name: <?php echo $row["userName"]; ?>
                   <br>
                   Email: <?php echo $row["userEmail"]; ?>
                   <br>
                   Contact Number: +60<?php echo $row["userContactNumber"]; ?>
                   <br>
                   </div>
                   <div class= "profileinput"> 
                   <input type= "text" name="userName" placeholder= "Name">
                   <input type= "text" name="userContactNumber" placeholder= "Contact Number">
                   <input type= "password" name="userPassword" placeholder= "Password">
                   <div class= "slider-btn5">
                <a href=""> <button class= "btn btn-5" type= "submit">Update</button> </a>
                </div>
                
                    </div> 
                 
                </div>
                
            </div>


        </div>
    </div>
</div>
</form>


 </body>
</html>