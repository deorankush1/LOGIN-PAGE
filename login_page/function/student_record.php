<?php session_start();?>
<?php require('config.php');?>
<?php

  if (isset($_GET['page'])) {
    $page = $_GET['page'];
  }



?>

<!DOCTYPE html>
<html>
<head>
	<title>student page</title>
</head>
<body>
  <a href ="back.php?page=<?php echo $page;?>">Back</a>
	<center>
		<h4> Student Record</h4>
</center>
</body>
</html>



<?php
 
if (isset($_GET['student_id']))
 {
   $s_id = $_GET['student_id'];
   $_SESSION['s_id'] = $s_id;
  }
  //echo $s_id;
   $sql =  "select * from Registration where id ='{$s_id}'";
   $result = $conn1->query($sql);
   if ($result->num_rows > 0)
   {
	   while($row = $result->fetch_assoc()) {
     echo "id: = " . $row["id"].  ",Name=: " . $row["firstname"]. " " . $row["lastname"]. ", email id =".$row["email"]. ", dob=" .$row["dateofbirth"]. ", Gender =" .$row["gender"]. ", Age =" .$row["age"].  "<br>";
    }
  }
  else
  {
    echo "0 results";
  }

?>

 
        
