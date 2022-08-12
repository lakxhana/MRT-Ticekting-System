
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
      var x= document.forms["bookingform"]["ticketAmount"].value;
      var y= document.forms["bookingform"]["stationDepart"].value;
      var z= document.forms["bookingform"]["stationArrive"].value;

      if(x<=0){
        alert("Please enter your ticket amount!");
        return false;
      }

      if(y==z){
        alert("Same destination! Please change destinations!");
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
  <a class="nav-link " href="profile.php">Profile</a>
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


<div class= "wallpaper"> 
<div class= "container2">
  
<h3> Book Tickets</h3>
</br>
</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src= "img/putrajayaline.jpg" alt="Putrajaya Line"> 
</div>
<div class= "container">
<div class= "inner2">
<form name="bookingform" method="POST" action="bookinginput.php"  onSubmit = "return validateForm()">                  
                  
</br>
                   
                   <span class="text">Station From</span>
                   <select class="form-control"  name="stationDepart">
                                            <option>Kwasa Damansara</option>
											<option>Kampung Selamat</option>
						                  	<option>Sungai Buloh</option>
                                            <option>Damansara Damai</option>
                                            <option>Sri Damansara Barat</option>
                                            <option>Sri Damansara Sentral</option>
                                            <option>Sri Damansara Timur</option>
                                            <option>Metro Prima</option>
                                            <option>Kepong Baru</option>
                                            <option>Jinjang</option>
                                            <option>Sri Delima</option>
                                            <option>Kampung Batu</option>
                                            <option>Kentonmen</option>
                                            <option>Jalan Ipoh</option>
                                            <option>Sentul Barat</option>
                                            <option>Titiwangsa</option>
                                            <option>Hospital Kuala Lumpur</option>
                                            <option>Raja Uda</option>
                                            <option>Ampang Park</option>
                                            <option>Persiaran KLCC</option>
                                            <option>Conlay</option>
                                            <option>Tun Razak Exchange (TRX)</option>
                                            <option>Chan Sow Lin</option>
                                            <option>Kuchai</option>
                                            <option>Taman Naga Besi</option>
                                            <option>Sungai Besi</option>
                                            <option>Serdang Raya Utara</option>
                                            <option>Serdang Raya Selatan</option>
                                            <option>Serdang Jaya</option>
                                            <option>UPM</option>
                                            <option>Taman Equine</option>
                                            <option>Putra Permai</option>
                                            <option>16 Sierra</option>
                                            <option>Cyberjaya Utara</option>
                                            <option>Cyberjaya City Centre</option>
                                            <option>Putrajaya Sentral</option>
                      </select>

                      <span class="text" >Station To</span>
                   <select class="form-control" name="stationArrive">
                                            <option>Kwasa Damansara</option>
										                        <option>Kampung Selamat</option>
					                      	          <option>Sungai Buloh</option>
                                            <option>Damansara Damai</option>
                                            <option>Sri Damansara Barat</option>
                                            <option>Sri Damansara Sentral</option>
                                            <option>Sri Damansara Timur</option>
                                            <option>Metro Prima</option>
                                            <option>Kepong Baru</option>
                                            <option>Jinjang</option>
                                            <option>Sri Delima</option>
                                            <option>Kampung Batu</option>
                                            <option>Kentonmen</option>
                                            <option>Jalan Ipoh</option>
                                            <option>Sentul Barat</option>
                                            <option>Titiwangsa</option>
                                            <option>Hospital Kuala Lumpur</option>
                                            <option>Raja Uda</option>
                                            <option>Ampang Park</option>
                                            <option>Persiaran KLCC</option>
                                            <option>Conlay</option>
                                            <option>Tun Razak Exchange (TRX)</option>
                                            <option>Chan Sow Lin</option>
                                            <option>Kuchai</option>
                                            <option>Taman Naga Besi</option>
                                            <option>Sungai Besi</option>
                                            <option>Serdang Raya Utara</option>
                                            <option>Serdang Raya Selatan</option>
                                            <option>Serdang Jaya</option>
                                            <option>UPM</option>
                                            <option>Taman Equine</option>
                                            <option>Putra Permai</option>
                                            <option>16 Sierra</option>
                                            <option>Cyberjaya Utara</option>
                                            <option>Cyberjaya City Centre</option>
                                            <option>Putrajaya Sentral</option>
                      </select>

                      <span class="text"> Ticket Amount</span>
                      <input type= "number" name="ticketAmount" placeholder= "Ticket Amount">
                   <div class= "slider-btn4">
                <a href=""> <button class= "btn btn-2"  type= "submit" name= "book">Book Now </button> </a>
                    </div> 
     
                 
                    </div>        
</form>
</div>
</div>


 </body>
</html>