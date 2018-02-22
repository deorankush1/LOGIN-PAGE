<?php session_start();?>
<?php require('config.php');?>
<?php

  if (isset($_GET['page'])) {
    $page = $_GET['page'];
  }
  ?>
<?php
 
if (isset($_GET['student_id']))
 {
   $s_id = $_GET['student_id'];
   $page = $_GET['page'];
   $_SESSION['s_id'] = $s_id;
   $_SESSION['page'] = $page;
  }
  //echo $s_id;
  echo "<left><a href = '../function/back.php?student_id={$s_id}&page={$page}'>Back</a></left>";

  $sql =  "SELECT * from Registration where id ='{$s_id}'";
  $result = $conn1->query($sql);
 if ($result->num_rows > 0)
  {
	   while($row = $result->fetch_assoc()) {
       $image = $row['Image'];
       //echo "<left><img src='../Class/images/$image'/width =100 height=150></left><br>";
        echo "<center><img src='../Class/images/original/$image'/width =300 height=200></center><br>";
        //echo "<left><img src='../Class/images/original/$image'/width =100 height=50></left><br><br>";
        //echo "<left><img src='../Class/images/$image'/width =100 height=80></left><br><br>"; 

        $arr =( "Id: = " . $row["id"].  ",Name=: " . $row["firstname"]. " " . $row["lastname"]. ", email id =".$row["email"].  ", Gender =" .$row["gender"]. ", age =" .$row["age"]);
        echo "<center> $arr </center>";

        
  ?>

      </tr>   
    </thead>
</table>
 <?php  
echo "<center><a href = '../function/editpage.php?student_id={$s_id}&page={$page}'>Edit</a></center>";
    
      }

  }
  else
  {
    echo "0 results";
  }

?>

 
        
