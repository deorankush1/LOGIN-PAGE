<?php
	include '../function/config.php';
?>
<?php
	session_start();
?>
<?php
 if (isset($_GET['student_id'])){
      $s_id = $_GET['student_id'];
      $_SESSION['s_id'] = $s_id;
    }
      $sql = "UPDATE firstname from Registration where id ='{$s_id}'"
 	  $result = $conn1->query($sql);
 	  echo "success";
 	  echo "<a href = '../function/student_access.php?student_id={$s_id}'>Back</a>";
    
  else
   {
     echo "Fail";
   }
?>