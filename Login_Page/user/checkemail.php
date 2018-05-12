<?php
include '../function/config.php';

if(isset($_POST['user_email']))
{
	$resultarray=array();
	$emailcheck = $_POST['user_email'];
	$checksql = "SELECT email FROM Registration WHERE email='$emailcheck'";
	$result = $conn1->query($checksql);

	if($result->num_rows > 0)
	{
		$resultarray['email']=$_POST['user_email'];
		$resultarray['msg']="Email Already Exist";
	}
	elseif (!(filter_var($emailcheck, FILTER_VALIDATE_EMAIL)))
	{
	 
		$resultarray['email']=$_POST['user_email'];
		$resultarray['msg']="Invalid email format";

	}
	else
	{
		$resultarray['email']=$_POST['user_email'];
		$resultarray['msg']="Email you can use";	
	}
 
	echo json_encode($resultarray);
    exit();	
}


