<?php
session_start();
include("databaseMRTTicketingSystem.php");
$adminEmail = $_SESSION["adminEmail"];


extract ($_POST);

$query = "UPDATE `admin` SET `adminContactNumber`='$adminContactNumber',`adminPassword`='$adminPassword' WHERE  `adminEmail`='$adminEmail'";

if (mysqli_query($conn, $query)){
    echo '<script language="javascript">';
    echo 'alert("Success!")';
    echo '</script>';
	echo "<script type='text/javascript'>window.location='adminprofile.php?adminEmail=<?php echo $adminEmail?>";
	echo "'</script>";	

}else{
	echo"Error:" . $query . "<br>" . mysqli_error($conn);
}

?>