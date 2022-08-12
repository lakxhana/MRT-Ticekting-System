<?php

include("databaseMRTTicketingSystem.php");
extract ($_POST);
session_start();



if($conn===false)
{
	die("connection error");
}

if(isset($_POST['adminsignin']))
{   

	$adminEmail=$_POST["adminEmail"];
	$adminPassword=$_POST["adminPassword"];

	$result=mysqli_query($conn,"SELECT * FROM `admin` WHERE `adminEmail`='$adminEmail' AND `adminPassword`= '$adminPassword'");
	$row=mysqli_fetch_array($result);

    

    if (is_array($row)){
     $_SESSION["adminEmail"] = $row ['adminEmail'];
     $_SESSION["adminPassword"] = $row ['adminPassword'];
    
        header("Location:adminhomepage.php?adminEmail=<?php echo $adminEmail ?>");


    }else{
        echo '<script language="javascript">';
        echo 'alert("Invalid username or password!")';
        echo '</script>';
        echo "<script type='text/javascript'>window.location='adminsignin.php";
        echo "'</script>";
    } 
}



?>