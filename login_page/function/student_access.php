<?php
include '../function/config.php';
 session_start();
if(isset($_SESSION['email']))
{ 
 echo "<a href ='../function/logout.php'>Logout</a>";
 echo "<h4 center> Welcome </h4>".$_SESSION['email']."<br>";

  

if (isset($_GET['student_id'])) 
{
 
 $s_id = $_GET['student_id'];
 $page =$_GET['page'];
  $sql =  "SELECT * from Registration where id = $s_id";
 $result = $conn1->query($sql);
 
 
 if ($result->num_rows > 0)
 {
  
    while($row = $result->fetch_assoc())
    {
  
      $image = $row['Image'];
        echo "<center><img src='../Class/images/original/{$image}' width =100 height=100></center><br>";
      $id = $row['id'];
     $arr=("id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]."<a href = '../function/student_record.php?student_id={$s_id}&page={$page}'>View</a>". "<br>");
     echo"<center> $arr </center>";
     //echo "<h4 text-align: right;><a href ='../function/editpage.php'>Edit</a></h4>"; 
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
