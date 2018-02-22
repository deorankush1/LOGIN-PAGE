<?php include '../function/config.php';?>

<?php
function checkFirstname($firstname){

if(is_numeric($firstname))
    {
      
       $error['firstname'] = "numeric value does not exit";

     	
    }
    return $error['firstname'];
    header('Location: ../user/Register.php');
}



?>