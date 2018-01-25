<?php 

include 'config.php'; 

if(isset($_POST['submit']))
{
    $email= $_POST['email'];
    $password =md5($_POST['password']);
    $query1 = "SELECT * from Registration";

$Registration=mysqli_query($conn1, $query1);

if(!(isset($Registration)))
  //echo 'test';
     {
    echo "Error: " . $query1 . "<br>" . mysqli_error($conn1);
}
while ($row = mysqli_fetch_assoc($Registration))
 {
        $db_email = $row['email'];
        $db_password = $row['password'];
    }
    
    
    if($db_email === $email && $db_password === $password)
    {
        header("location:". 'indexpage.html');
    //
    } else {
        echo 'You are not valid user'; 
    }
  }

 //   echo $db_email;
   // echo $email;

   

?>



