<?php
session_start();
include("databaseMRTTicketingSystem.php");
$userEmail = $_SESSION["userEmail"];
extract ($_POST);
$ticketID= $_POST['ticketID'];


$query= "DELETE FROM `ticket` where `ticketID`='$ticketID'";

if (mysqli_query($conn, $query)){
    echo '<script language="javascript">';
    echo 'alert("Successfully Deleted!")';
    echo '</script>';
	echo "<script type='text/javascript'>window.location='bookingdetails.php?";
	echo "'</script>";	

}else{
	echo"Error:" . $query . "<br>" . mysqli_error($conn);
}


?>