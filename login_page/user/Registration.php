
<?php session_start();
      include '../function/fnctions.php';
?>

<?php 

  
   $file_ext  = strtolower(end(explode('.',$_FILES['image']['name'])));
   $img = uniqid().".".$file_ext;

 mvimage($img);
 date_default_timezone_set('Asia/Kolkata');
 include '../function/config.php';


 if(isset($_POST['submit']))
 {

   $error = array(
    array('firstname' => '', 'fname' => ''),
    array('lastname'  => '', 'lname' => ''),
    array('email'     => '', 'email1' => ''),
    array('age'       => '', 'age1' => ''),
    array('mobile'    => '', 'mbno' => '')
   );

   $errorStatus = array();
   $errorStatus['status'] = FALSE;

   $firstname = $_POST['firstname'];
   $error[0]['fname'] =$firstname;
   $error = FirstnameValidation($firstname, $error[0]['firstname'],$errorStatus['status']);
  
   // if(is_numeric($firstname))
   //  {
   //    $error['firstname'] = "numeric value does not exit";
   //    $errorStatus['status'] = TRUE;
   //  }
   // if((empty($firstname)) || (strlen($firstname)<=3))
   // {
   //   $error['firstname'] = "fname could not be empty and min 3 letter";
     
   //   $errorStatus['status'] = TRUE;
   //  }



   $lastname = $_POST['lastname'];
   $error[1]['lname'] =$lastname;
   if((empty($lastname)) ||(strlen($lastname)<=3))
   {
     $error['lastname'] = 'last name have more then 3 letters';
     $errorStatus['status'] = TRUE;
    }



   $email= $_POST['email'];
   $error[2]['email1'] =$email;
   if  (!(filter_var($email, FILTER_VALIDATE_EMAIL))) 
   {
     $error['email'] = "Invalid email format";
     $errorStatus['status'] = TRUE;
    }




   $gender=$_POST['gender'];
   
   $age = $_POST['age'];
   $error[3]['age1'] =$age;  
   if(empty($age) || ($age <=18))
   {
     $error['age'] = 'Age Must be filled and greter18';
     $errorStatus['status'] = TRUE;
    }
   

   $re_password = md5($_POST['re_password']);
   
   $mobile =$_POST['mobile'];
   $error[4]['mbno'] =$mobile;
   $regex ='/^[6-9][0-9]{9}$/';
   if(!preg_match($regex,$mobile))
    {
     $error['mobile'] ='mobile number invalid';
     $errorStatus['status'] = TRUE;
    }
   

    $date1 = date('d-m-y');
   
    $password = MD5($_POST['password']);
   
    $_SESSION['error']= $error;
   
    if($errorStatus['status'])
    {
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
      $query = "INSERT INTO Registration (firstname,lastname,email,password,mobile,gender,age,date1,Image) VALUES ('{$firstname}','{$lastname}','{$email}','{$password}','{$mobile}','{$gender}','{$age}','{$date1}','{$img}')";
    }

   if(mysqli_query($conn1, $query))
   {
     header('Location: ../user/loginpage.html');
    } 
   
   else
   {
     echo "Error: " . $sql . "<br>" . mysqli_error($conn1);
    }
  }

// FUNCTION resize($source, $destination,$width, $height)
//  {

//     $list($w,$h) =getimagesize($image);
//     $ratio = max($width/$w, $height/$h);
//     $height = ceil($height/$ratio);
//     $x = ($w - $width / $ratio) / 2;
//     $width = ceil($w-$width/$ratio);


//     $virtual_image = imagecreatetruecolor($width,$height);
//     imagecopyresampled($virtual_image, $source_image, 0, 0, 0, 0, $desired_width, $desired_height, $width, $height);
//   }


// function make_thumb($src, $dest, $desired_width) {

    
//     /* read the source image */
//     $source_image = imagecreatefrompng($src);
//     $width = imagesx($source_image);
//     $height = imagesy($source_image);
    
//     /* find the "desired height" of this thumbnail, relative to the desired width  */
//     $desired_height = floor($height * ($desired_width / $width));
    
//      create a new, "virtual" image 
//     $virtual_image = imagecreatetruecolor($desired_width, $desired_height);
    
//     /* copy source image at a resized size */
//     imagecopyresampled($virtual_image, $source_image, 0, 0, 0, 0, $desired_width, $desired_height, $width, $height);
    
//     /* create the physical thumbnail image to its destination */
//     imagepng($virtual_image, $dest);
// }


?>



