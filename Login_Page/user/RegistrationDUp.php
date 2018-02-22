
<?php session_start();?>

<?php 
 date_default_timezone_set('Asia/Kolkata');
 include '../function/config.php';


 if(isset($_POST['submit']))
 {

      
   $firstname = $_POST['firstname'];
   
   if(is_numeric($firstname))
    {
       $_SESSION['error'] = "numeric value does not exit";
     header('Location: ../user/Register.php');
     exit;
    }
   if((empty($firstname)) || (strlen($firstname)<=3))
   {
     $_SESSION['error'] = "fname could not be empty and min 3 letter";
     header('Location: ../user/Register.php');
     exit;
    }

   // elseif(strlen($firstname)<=3)
   //  {
   //    $_SESSION['error'] = 'First name have more then 3 letters';
   //    header('Location: ../user/Register.php');
   //    exit;
   //   }
   $lastname = $_POST['lastname'];
   if((empty($lastname)) ||(strlen($lastname)<=3))
   {
     $_SESSION['error1'] = 'last name have more then 3 letters';
     header('Location: ../user/Register.php');
     exit;
    }

      

   $email= $_POST['email'];
   if  (!(filter_var($email, FILTER_VALIDATE_EMAIL))) 
   {
     $_SESSION['emailErr'] = "Invalid email format";
     header('Location: ../user/Register.php'); 
     exit;
    }
      
   //$password =$_POST['password'];
   $gender=$_POST['gender'];
        

   $age = $_POST['age'];
   if(empty($age) || ($age <=18))
   {
     $_SESSION['ageErr'] = 'Age Must be filled and greter18';
     header('Location: ../user/Register.php');
     exit;
    }
        
  $re_password = md5($_POST['re_password']);
   $mobile =$_POST['mobile'];
   $regex ='/^[6-9][0-9]{9}$/';

   if(!preg_match($regex,$mobile))
    {
     $_SESSION['mnErr'] ='mobile number invalid';
     header('Location: ../user/Register.php');
     exit;
    }
    $date1 = date('d-m-y');
   $password = MD5($_POST['password']);

     

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


   function getData(){ 
    global $firstname;
    $data = $firstname;
    return $data;
}
?>



