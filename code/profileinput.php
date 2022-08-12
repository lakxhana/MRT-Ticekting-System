<?php
session_start();
include("databaseMRTTicketingSystem.php");
$userEmail = $_SESSION["userEmail"];


extract ($_POST);

$query = "UPDATE `user` SET `userName`='$userName',`userContactNumber`='$userContactNumber',`userPassword`='$userPassword' WHERE  `userEmail`='$userEmail'";

if (mysqli_query($conn, $query)){
    echo '<script language="javascript">';
    echo 'alert("Success!")';
    echo '</script>';
	echo "<script type='text/javascript'>window.location='profile.php?userEmail=<?php echo $userEmail?>";
	echo "'</script>";	

}else{
	echo"Error:" . $query . "<br>" . mysqli_error($conn);
}

?>