<!DOCTYPE html>
<html>

  <head>
    <title> Admin Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../templete-style.css">
  </head>
  
  <body>
    <?php
    
      include '../function/config.php';
      session_start();
    
      $rpp =8;
      $query = "SELECT * from Registration";
      $result1 = mysqli_query($conn1, $query);
      $nor =mysqli_num_rows($result1);
      $nop = ceil($nor/$rpp); 
    
      if(!isset($_GET['page']))
      {
      	$page =1;
      }
      else 
      {
       $page = $_GET['page'];
      }
    
      $offset = ($page - 1)*$rpp;
      echo" <div class ='header'>";
    
      if (isset($_SESSION['email'])){
        echo "<a href ='../function/logout.php'>Logout</a>";
        echo "<h4><center> Welcome Back </h4></center>";
        echo $_SESSION['email']."<br>"."<br>";
        echo"  </div>";
      
        $sql= "SELECT * from Registration Limit $offset , $rpp";
        $result = mysqli_query($conn1,$sql);
        
        if ($result->num_rows > 0){
          echo "<div class='container'>
          <ul class='floating-box'>";
        
          while ($row = mysqli_fetch_array($result))
          {   
            $image = $row['Image'];
            $s_id = $row['id'];
            $arr=("Name: " . $row["firstname"].'<br>'."<a href = 'student_record.php?student_id={$s_id}&page={$page}'>View</a>". "<br>");
        
            echo " <li>
            <img src='../Class/images/original/$image' width =100 height=100><br>
            $arr<br>
            </li>";
          }
        }
        echo"</ul>
        </div>
        <ul class="flex-container footer">";
        
        for($page =1; $page<=$nop; $page++){
    	    echo '<li><a href = "../function/pagination.php?page=' . $page. '">'. $page . '</a>
          </li>';
        }
      }
      else
      {
        header("location:". '../indexpage.html'); 
      }
      echo "</ul>"; 
    ?>
  </body>
</html>
