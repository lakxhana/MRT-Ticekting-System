<?php

include("databaseMRTTicketingSystem.php");

extract ($_POST);

$query = "INSERT INTO `user` SET `userName`='$userName',`userEmail`='$userEmail',`userContactNumber`='$userContactNumber',`userPassword`='$userPassword'";

if (mysqli_query($conn, $query)){
    echo '<script language="javascript">';
    echo 'alert("Success!")';
    echo '</script>';
	echo "<script type='text/javascript'>window.location='signin.php?";
	echo $userName;
	echo "'</script>";	

}else{
	echo"Error:" . $query . "<br>" . mysqli_error($conn);
}

?>