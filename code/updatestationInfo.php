<?php
session_start();
include("databaseMRTTicketingSystem.php");
$adminEmail = $_SESSION["adminEmail"];



extract ($_POST);
 $stationID = $_POST['stationID'];
 $stationName = $_POST['stationName'];
 $stationLocation = $_POST['stationLocation'];


$query = "UPDATE `station` SET `stationName`='$stationName',`stationLocation`='$stationLocation' WHERE  `stationID`='$stationID'";

if (mysqli_query($conn, $query)){
    echo '<script language="javascript">';
    echo 'alert("Success!")';
    echo '</script>';
	echo "<script type='text/javascript'>window.location='stationInformation.php?adminEmail=<?php echo $adminEmail?>";
	echo "'</script>";	

}else{
	echo"Error:" . $query . "<br>" . mysqli_error($conn);
}

?>