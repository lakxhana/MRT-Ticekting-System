<?php
session_start();
include("databaseMRTTicketingSystem.php");
$userEmail = $_SESSION["userEmail"];
extract ($_POST);


$ticketPrice= $ticketAmount * 2;


$query = "INSERT INTO `contains` SET `stationDepart`='$stationDepart', `stationArrive`='$stationArrive', `ticketID`= (SELECT `ticketID` FROM `ticket`)";


if (mysqli_query($conn, $query)){
    echo '<script language="javascript">';
    echo 'alert("Success!")';
    echo '</script>';
	echo "<script type='text/javascript'>window.location='bookingconfirmationpage.php?userEmail=<?php echo $userEmail?>";
	echo "'</script>";	

}else{
	echo"Error:" . $query2 . "<br>" . mysqli_error($conn);
}



?>