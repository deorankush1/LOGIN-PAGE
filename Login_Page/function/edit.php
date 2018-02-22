<?php
  include '../function/config.php';
  include '../function/fnctions.php';
  session_start();
?> 

<?php
    
  if (isset($_GET['student_id'])){
		$s_id = $_GET['student_id'];
		$page = $_GET['page'];
		$_SESSION['s_id'] = $s_id;
    $_SESSION['page'] = $page;
  }

   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $mobile = $_POST['mobile'];
   $age = $_POST['age'];
   
   $image = $_FILES['image']['name'];
   $db_image = $_POST['image'];
   $firstname_error =FirstnameValidation($firstname);
            
  if (!empty($firstname_error)){
    header("Location: ../function/editpage.php?student_id={$s_id}&page={$page}&error={$firstname_error}");
  }
    
 else 
  {
    if (empty($image)) {
   	  
      $image = $db_image;
      $sql = "UPDATE Registration set firstname ='{$firstname}', lastname = '{$lastname}', mobile ='{$mobile}', age ='{$age}', Image ='{$image}' where id =$s_id";
      	$result = $conn1->query($sql);
      echo "<a href = '../function/back.php?student_id=$s_id&page={$page}'>Back</a>"; 
    }
    else 
    {
      unlink ("../Class/images/original/".$db_image);
      unlink("../class/images/original/".$db_image);
      $img = uniqid().".jpeg";
      mvimage($img);

      $sql = "UPDATE Registration set firstname ='{$firstname}', lastname = '{$lastname}', mobile ='{$mobile}', age ='{$age}', Image ='{$img}' where id =$s_id";
      	$result = $conn1->query($sql);
      echo "<a href = '../function/back.php?student_id=$s_id&page={$page}'>Back</a>";
	  }	
  }
?>
