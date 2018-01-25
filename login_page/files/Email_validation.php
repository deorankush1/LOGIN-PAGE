<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color:red;}
</style>
<title> Email_validate </title>
</head>  
<body>
<?php
include 'config.php';
// define variable and set to empty value
 $Email ="";
 if ($_SERVER["REQUEST_METHOD"] == "POST")
  {
	 if (empty($_POST["Email"]))
    {
     $EmailErr = "Email is required";
    } 
  else
   {
	  if(isset($_POST['submit']))
    {
   	 echo 'works';
   	 $Email = $_POST['Email'];
     if (filter_var($Email, FILTER_VALIDATE_EMAIL))
     {
      $query = "INSERT INTO xyz (Email) VALUES ('{$Email}')";
      $xyz = mysqli_query($conn, $query);
      if (!$xyz)
       {
        die("QUERY FAILED ".mysqli_error($conn));
       } 
       if($Email === $Email)
       {
        header("Location:".'dashboard.php');
        } 
      }
       else
      { 
       $EmailErr = "Email is incorrect";
      }
    }
  }
}
function test_input($data)
 {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
  }
?>


    <h1> Email Validation </h1>
      <form method="Post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
      E-mail: <input type="text" name="Email">  <span class="error">* <?php echo $EmailErr;?></span>
      <br><br>
      <input type="Submit" value='submit' name='submit'>
      </form>
  </body>
</html>