<?php 

  include '../function/config.php';
  session_start();

 if(isset($_POST['submit']))
 {
    $email= $_POST['email'];
     $password = ($_POST['password']);
echo '<br>';
    $query = "SELECT * from admin where email = '{$email}' ";
    // $result = $conn1->query($query);
    $result = mysqli_query($conn1, $query);
    if(!$result)
  //echo 'test';
    {
      echo 'here';
      echo "Error: " . $result . "<br>" . mysqli_error($conn1);
    }

   //   while($row = mysqli_fetch_assoc($result)){
    
     
   //   echo $db_email = $row['email'];
   //   echo $db_password = $row['password'];
   // }

    $row = mysqli_fetch_assoc($result);
    
     
     echo $db_email = $row['email'];
     echo $db_password = $row['password'];
   
    if($db_email === $email && $db_password === $password)
    {
      $_SESSION['email'] = $db_email;
     header("location:". '../function/pagination.php');
    }
    else
    {
     echo 'You are not valid user'; 
    } 
   //header("location:". '../function/record.php');
  }        
?>



