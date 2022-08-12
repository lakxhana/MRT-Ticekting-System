
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
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
  <a class="nav-link active" href="stationinformation.php">Station Information</a>
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


<div class= "wallpaper2"> 
<div class= "container5"> 
    <h3> Station Information</h3>
</br>
</br>
    
    <table class="table table-bordered table">
           <tr>
               <th>Station ID</th>
               <th>Station Name</th>
               <th>Station Location</th>
               <th>Edit</th>
           </tr>
            <?php
            $query= "SELECT * FROM `station`";
            $result= mysqli_query ($conn,$query);
            while ($row2=mysqli_fetch_assoc($result))
            {
            ?>
            
         <tr>
             <td> <?php echo $row2["stationID"]; ?></td>
            <td> <?php echo $row2["stationName"]; ?> </td>
            <td> <?php echo $row2["stationLocation"]; ?> </td>
          
            <td> <button class= "btn btn-6 editbtn" type= "submit">Update</button> </td>
            
        </tr>
        <?php
            }
        ?>
    </table> 
    </div>
</div>

<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Edit Station Information Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="updatestationInfo.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="stationID" id="stationID">
                        

                        <div class="form-group">
                            <label> Station Name </label>
                            <input type="text" name="stationName" id="stationName" class="form-control"
                                placeholder="Enter Station Name">
                        </div>

                        <div class="form-group">
                            <label> Station Location </label>
                            <input type="text" name="stationLocation" id="stationLocation" class="form-control"
                                placeholder="Enter Station Location">
                        </div>
                    </div>
                    <div class="modal-footer">
                    <a href=""><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script>
     $(document).ready(function () {

     $('.editbtn').on('click', function () {

     $('#editmodal').modal('show');

    $tr = $(this).closest('tr');

    var data = $tr.children("td").map(function () {
        return $(this).text();
    }).get();

    console.log(data);
    $('#stationID').val(data[0]);
    $('#stationName').val(data[1]);
    $('#stationLocation').val(data[2]);

});
});
    </script>
</body>
</html>