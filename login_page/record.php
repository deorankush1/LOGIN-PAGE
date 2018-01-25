<?php
 session_start();
 echo "<h4> Welcome </h4>".$_SESSION['email']."<br>";
  include 'config.php';
  $sql =  "select * from Registration";
  $result = $conn1->query($sql);
  if ($result->num_rows > 0)
  {
    while($row = $result->fetch_assoc())
    {
    	$s_id = $row['id'];
     echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]."<a href = 'student_record.php?student_id={$s_id}'>View</a>". "<br>";
    }
   }
  else 
  {
    echo "0 results";
   }

       
?>

 
        
