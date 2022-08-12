<?php

include("databaseMRTTicketingSystem.php");
extract ($_POST);
session_start();



if($conn===false)
{
	die("connection error");
}

if(isset($_POST['signin']))
{   

	$userEmail=$_POST["userEmail"];
	$userPassword=$_POST["userPassword"];

	$result=mysqli_query($conn,"SELECT * FROM `user` WHERE `userEmail`='$userEmail' AND `userPassword`= '$userPassword'");
	$row=mysqli_fetch_array($result);

    
	 if (is_array($row)){
     $_SESSION["userEmail"] = $row ['userEmail'];
     $_SESSION["userPassword"] = $row ['userPassword'];
    
        header("Location:userhomepage.php?userEmail=<?php echo $userEmail?>");


    }else{
        echo '<script language="javascript">';
        echo 'alert("Invalid username or password!")';
        echo '</script>';
        echo "<script type='text/javascript'>window.location='signin.php";
        echo "'</script>";
    } 
}



?>