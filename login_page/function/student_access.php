<?php
include '../function/config.php';
 session_start();
if(isset($_SESSION['email']))
{ 
 echo "<a href ='../function/logout.php'>Logout</a>";
 echo "<h4> Welcome </h4>".$_SESSION['email']."<br>";

  

if (isset($_GET['student_id'])) 
{
 $s_id = $_GET['student_id'];
 $sql =  "select * from Registration where id ='{$s_id}'";
 $result = $conn1->query($sql);
 
 
 if ($result->num_rows > 0)
 {
  
    while($row = $result->fetch_assoc())
    {
      $id = $row['id'];
     echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]."<a href = '../function/student_record.php?student_id={$s_id}'>View</a>". "<br>";
    }
  }

  else 
  {
    echo "0 results";
   }
}
}
else
{
header("Location:". "../indexpage.html");
}


?>
