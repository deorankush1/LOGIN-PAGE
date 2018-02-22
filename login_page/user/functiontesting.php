<?php header("location: 'Registration.php'")
  function Error($error1)
 {
	echo $error1;
  }
  if((empty($firstname)) || (strlen($firstname)<=3))
   {
     $error1 = ("fname could not be empty and min 3 letter");
    }
      Error($error1);
    //header('Location: ../user/Register.php');
?>