<?php
  include '../function/config.php';
?>

<?php
  session_start();

  if (isset($_GET['student_id'])){
    $page=$_GET['page'];
    $s_id = $_GET['student_id'];
    $_SESSION['s_id'] = $s_id;
    $_SESSION['page'] = $page;
  }
    
  $sql =  "SELECT * from Registration where id ='{$s_id}'";
  $result = $conn1->query($sql);
  
  if ($result->num_rows > 0){
	  while($row = $result->fetch_assoc()) {
      $image = $row['Image'];
      $firstname = $row["firstname"];
      $lastname= $row["lastname"];
      $email = $row["email"];
      $mobile = $row["mobile"]; 
      $age = $row["age"];
    }
  }
  else
  {
  	echo "fail retry";
  }
?>
 

<!DOCTYPE html>
<html>
  <head>
  	<title> Edit page</title>
  </head>
  <body>
	  <center>
	  <h2><?php echo"
		
    <form method='Post' action='../function/edit.php?student_id={$s_id}&page={$page}' enctype='multipart/form-data' >";?>
		  firstName:    <input type='text' name ='firstname' value= '<?php echo $firstname;?>' placeholder= 'enter name'><?php 
        if(isset($_GET['error']))
        echo $_GET['error']; 
      ?><br>
		 
     lastname:     <input type='text' name = 'lastname' value= '<?php echo $lastname;?>' placeholder= 'ENTER Last Name'>
     <?php 
        if(isset($_GET['error']))
        echo $_GET['error']; 
       ?><br><br>
		 
     Mobile:       <input type = 'varchar' name='mobile'  placeholder= 'ENTER MOBILE NUMBER' value ='<?php echo $mobile;?>'>
     <?php
       if(isset($_GET['error']))
        echo $_GET['error'];
      ?><br>
		 
     age:           <input type = 'varchar' name='age'  placeholder= 'ENTER AGE' value ='<?php echo $age;?>'>
      <?php
       if(isset($_GET['error']))
        echo $_GET['error'];
      ?><br>
     
      Select image to upload:
      <input type='file' name='image' /><br>  
      <input type='hidden' name='image' value='<?php echo $image;?>'>
      
      <input type='Submit' value='submit' name='submit' class='btn btn-info' >
    
    </form>
    </h2>
    </center>
  </body>
</html>
