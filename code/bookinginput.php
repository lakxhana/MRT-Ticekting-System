<?php
session_start();
include("databaseMRTTicketingSystem.php");
$userEmail = $_SESSION["userEmail"];
extract ($_POST);


$ticketPrice= $ticketAmount * 2;

$query= "INSERT INTO `ticket` SET `stationDepart`='$stationDepart', `stationArrive`='$stationArrive',`ticketAmount`='$ticketAmount', `ticketPrice`='$ticketPrice', `userID`= (SELECT `userID` FROM `user` WHERE  `userEmail`='$userEmail')";

if (mysqli_query($conn, $query)){
    echo '<script language="javascript">';
    echo 'alert("Success!")';
    echo '</script>';
	echo "<script type='text/javascript'>window.location='bookingconfirmationpage.php?userEmail=";
	echo "'</script>";	

}else{
	echo"Error:" . $query . "<br>" . mysqli_error($conn);
}


?>