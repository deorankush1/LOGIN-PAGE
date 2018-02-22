 <?php
   
   // elseif(strlen($firstname)<=3)
   //  {
   //    $_SESSION['error'] = 'First name have more then 3 letters';
   //    header('Location: ../user/Register.php');
   //    exit;
   //   }
   
   if((empty($lastname)) ||(strlen($lastname)<=3))
   {
      $_SESSION[$error['lastname']] = 'last name have more then 3 letters';
     header('Location: ../user/Register.php');
     exit;
    }
    exit;

      

   
   if  (!(filter_var($email, FILTER_VALIDATE_EMAIL))) 
   {
     $_SESSION['emailErr'] = "Invalid email format";
     header('Location: ../user/Register.php'); 
     exit;
    }
      
   //$password =$_POST['password'];
  
        

   
   if(empty($age) || ($age <=18))
   {
     $_SESSION['ageErr'] = 'Age Must be filled and greter18';
     header('Location: ../user/Register.php');
     exit;
    }
        
  

   if(!preg_match($regex,$mobile))
    {
     $_SESSION['mnErr'] ='mobile number invalid';
     header('Location: ../user/Register.php');
     exit;
    }
    
     

   $sql1 = "SELECT 1 FROM Registration WHERE email='{$email}'";
   $result = $conn1->query($sql1);
   if(mysqli_num_rows($result) > 0)
   {
     echo  $msg = 'email already exists';
    }
   elseif($password != $re_password)
    {
     echo $msg = "passwords doesn't match";
      echo '<a href = "../user/Register.php">'. signupAgain .'</a>';  
    }
   else
   {
     $query = "INSERT INTO Registration (firstname,lastname,email,password,mobile,gender,age,date1) VALUES ('{$firstname}','{$lastname}','{$email}','{$password}','{$mobile}','{$gender}','{$age}','{$date1}')";
    }

    if(mysqli_query($conn1, $query))
    {
     //echo "New record created successfully";
      header('Location: ../user/loginpage.html');
    } 
   else
   {
     echo "Error: " . $sql . "<br>" . mysqli_error($conn1);
    }
  }
?>