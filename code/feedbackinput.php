<?php

session_start();
include("databaseMRTTicketingSystem.php");
$userEmail = $_SESSION["userEmail"];
extract ($_POST);

$query = "INSERT INTO `feedback` SET `feedbackDescription`='$feedbackDescription', `userID`= (SELECT `userID` FROM `user` WHERE  `userEmail`='$userEmail')";
if (mysqli_query($conn, $query)){
    echo '<script language="javascript">';
    echo 'alert("Success!")';
    echo '</script>';
	echo "<script type='text/javascript'>window.location='feedback.php?userEmail=";
	echo "'</script>";	

}else{
	echo"Error:" . $query . "<br>" . mysqli_error($conn);
}

?>