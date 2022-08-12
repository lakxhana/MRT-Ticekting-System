
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="styles.css">
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
  <a class="nav-link " href="booktickets.php">Book Tickets</a>
</li>

<li class="nav-item">
  <a class="nav-link" href="feedback.php">Feedback</a>
</li>

<li class="nav-item">
  <a class="nav-link active" href="bookingdetails.php">Booking Details</a>
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
<div class= "wallpaper2"> 
    <div class= "container5"> 
    
    <h3> Booking Details</h3>
</br>
</br>
</br>
</br>
<form action="bookingdetails.php">
<center>

Enter Ticket ID <input type="" name="bar_code"><br>
<div class= "slider-btn8">
<button  class= "btn btn-8"  type="submit" value="Submit">Enter</button>
</div>


<?php
if(isset($_GET['bar_code'])){
	$bar_code=$_GET['bar_code'];
	include 'barcode128.php';
	echo bar128($bar_code);
}	
?>

</center>
</form>
<table class="table table-bordered table">
           <tr>
               <th>Ticket ID</th>
               <th>Station Depart</th>
               <th>Station Arrive</th>
               <th>Ticket Amount</th>
               <th>Ticket Price</th>
              
               <th>Update</th>
           </tr>
            <?php
            $query= "SELECT * FROM `ticket` where `userID`= (SELECT `userID` FROM `user` WHERE  `userEmail`='$userEmail')  ORDER BY `ticketID` DESC";
            $result= mysqli_query ($conn,$query);
            while ($row2=mysqli_fetch_assoc($result))
            {
            ?>
            
         <tr>
             <td> <?php echo $row2["ticketID"]; ?></td>
            <td> <?php echo $row2["stationDepart"]; ?> </td>
            <td> <?php echo $row2["stationArrive"]; ?> </td>
            <td> <?php echo $row2["ticketAmount"]; ?> </td>
            <td> <?php echo $row2["ticketPrice"]; ?> </td>
           
            <td> <button class= "btn btn-6 deletebtn" type= "button">Delete</button> </td> 
                     
           
        </tr>
        <?php
            }
        ?>
    </table>
    </div>
</div>

<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Delete Ticket Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="cancelbooking.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="ticketID" id="ticketID">

                        <h4> Do you want to delete this data ?</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> No </button>
                        <button type="submit" name="deletedata" class="btn btn-danger">  Delete  </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {

            $('.deletebtn').on('click', function () {

                $('#deletemodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#ticketID').val(data[0]);
                $('#stationDepart').val(data[1]);
                $('#stationArrive').val(data[2]);
                $('#ticketAmount').val(data[3]);
                $('#ticketPrice').val(data[4]);

            });
        });
    </script>
</body>
</html>