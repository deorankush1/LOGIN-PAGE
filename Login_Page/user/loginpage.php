<?php 

include '../function/config.php';
session_start();


if(isset($_POST['submit']))
{
    $email= $_POST['email'];
    $password =md5($_POST['password']);
    $query1 = "SELECT * FROM Registration WHERE email='{$email}'";
    $Registration=mysqli_query($conn1, $query1);
    if(!(isset($Registration)))
  {
    echo "Error: " . $query1 . "<br>" . mysqli_error($conn1);
  }
   while ($row = mysqli_fetch_assoc($Registration))
   {
     $_SESSION['email'] = $row['email'];
     $s_id = $row['id'];
     $db_email = $row['email'];
     $db_password = $row['password'];
     }
    // echo '<br>';
    // echo $password;     
      if($db_email !== $email)
    {
      echo 'Your email does not exit'; 
      echo '<br>';
      echo '<a href = "../user/Register.php">'. signup . '</a>'; 
      echo '<br>';
      echo  '<a href = "../user/loginpage.html">'. LoginAgain . '</a>'; 
    }
    elseif($password !== $db_password)
    {
      echo 'Invalid password';
      echo '<br>';
      echo '<a href = "../user/loginpage.html">'. LoginAgain . '</a>';  
    }
    else
     {

      echo $db_email;
      echo $email;
       header("Location:". "../function/student_access.php?student_id={$s_id}");
      }
      // else
      // {
      //  echo 'You are not valid user'; 
      // }
}
?>
