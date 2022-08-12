<?php
session_start();
include("databaseMRTTicketingSystem.php");
$adminEmail = $_SESSION["adminEmail"];
extract ($_POST);
 $ticketID= $_POST['ticketID'];


$query= "DELETE FROM `ticket` where `ticketID`='$ticketID'";

if (mysqli_query($conn, $query)){
    echo '<script language="javascript">';
    echo 'alert("Successfully Deleted!")';
    echo '</script>';
	echo "<script type='text/javascript'>window.location='userbookingdetails.php?userEmail=";
	echo "'</script>";	

}else{
	echo"Error:" . $query . "<br>" . mysqli_error($conn);
}


?>