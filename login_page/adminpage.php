<?php 

include 'config.php';
session_start();

if(isset($_POST['submit']))
{
    $email= $_POST['email'];
    $password = ($_POST['password']);
    $query = "SELECT * from admin";
    $result = $conn1->query($query);
    if(!(isset($result)))
  //echo 'test';
    {
      echo "Error: " . $result . "<br>" . mysqli_error($conn1);
    }
    while ($row = mysqli_fetch_assoc($result))
    {
     $_SESSION['email'] = $row['email'];
       
     $db_email = $row['email'];
     $db_password = $row['password'];
    }
    if($db_email === $email && $db_password === $password)
    {
        header("location:". 'record.php');
    }
    else
    {
     echo 'You are not valid user'; 
    } 
}        

?>



