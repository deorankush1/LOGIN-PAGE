<?php 
  date_default_timezone_set('Asia/Kolkata');
  include 'config.php';
  if(isset($_POST['submit']))
  {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email= $_POST['email'];
    //$password =$_POST['password'];
    $dateofbirth =$_POST['dateofbirth'];
    $gender=$_POST['gender'];
    $age = $_POST['age'];
    $re_password = md5($_POST['re_password']);
    $date1 = date('d-M-y');
    $password = md5($_POST['password']);
    $sql1 = "SELECT 1 FROM Registration WHERE email='{$email}'";
    $result = $conn1->query($sql1);
    if(mysqli_num_rows($result) > 0)
    {
        echo  $msg = 'email already exists';
    }
     elseif($password != $re_password)
     {
         echo $msg = "passwords doesn't match";
      }
     else
    {
     $query = "INSERT INTO Registration (firstname, lastname,email,password,dateofbirth,gender,age,date1) VALUES ('{$firstname}','{$lastname}','{$email}','{$password}','{$dateofbirth}','{$gender}','{$age}','{$date1}')";
    }

     if(mysqli_query($conn1, $query))
     {
      //echo "New record created successfully";
      header('Location: loginpage.html');
 
     } 
     else
    {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn1);
    }
     }
  
  

?>



