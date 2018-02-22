<?php
 session_start();
  include '../function/config.php';
 
  if (isset($_GET['page'])){
    $page = $_GET['page'];
  }
  
 $sql = "SELECT email from admin";
 $result = $conn1->query($sql);
 
 $row = $result->fetch_assoc();
 $A_email = $row['email'];


 if ($A_email == $_SESSION['email']){
  header("Location:". "../function/pagination.php?page={$page}");
  }
  else
  {
   $s_id = $_SESSION['s_id'];
   header("Location:". "../function/student_access.php?student_id={$s_id}");
  }
 ?>