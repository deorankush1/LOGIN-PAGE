<?php session_start();?>

<?php $error = $_SESSION['error'] ;
?>

<!DOCTYPE HTML>
<html>

<head>
<style>
.error {color:brown;}
</style>
<title> Signup </title>

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>  
<body>
	
	<h5> <a href ='../admin/admin.html'>Login for Admin</a></h4> 
<pre style ="text-align: center;"> 
<h1>  Registration Page </h1>
<p><span class="error">*  Required field.</span></p>

<form method="Post" action="../user/Registration.php" >  

firstName:   <input type="text" name ="firstname" placeholder= "ENTER FNAME"><span class="error">* </span><br>
<?php 
 {
 echo $error['firstname'];
 echo '<br>';
 
}
?>
lastName:     <input type="text" name="lastname"  placeholder= "ENTER LNAME" ><span class="error">* </span><br>
<?php
{ 
 echo $error['lastname'];
 echo '<br>';
 //session_destroy();
}
?>
email:       <input type="text" name="email"  placeholder= "ENTER E_ID " ><span class="error">* </span><br> 
<?php
{
echo $error['email'];
echo '<br>';
//session_destroy();
}?>

password:    <input type="password" name="password"  placeholder= "ENTER PASSWORD" ><span class="error">* </span><br> 
<?php
{
$error = $_SESSION['error'];
 echo $error['password'];
echo '<br>';
//session_destroy();
}?>
re_password: <input type="password" name="re_password"  placeholder= "ENTER RE-PASSWORD" ><span class="error">* </span><br> 
age:         <input type = "varchar" name="age"  placeholder= "ENTER AGE" ><span class="error">* </span><br> 
<?php 
{
  echo $error['age'];

 echo '<br>';
 //session_destroy();
}
?>
Mobile:         <input type = "varchar" name="mobile"  placeholder= "ENTER MOBILE NUMBER" ><span class="error">* </span><br>
<?php 
 {
 echo $error['mobile'];
 echo '<br>';
 session_destroy();
}
?>
gender:  <select name = gender>
   <option value="Male">Male</option>
   <option value="Female">Female</option>
   <option value="0thers">others</option>
   </select>

<input type="Submit" value='submit' name='submit' class="btn btn-info" >
Already I have an account: <a href="../user/loginpage.html" class="btn btn-primary">Login</a>
            </form>
</pre>

</body>
</html>
    <html oncontextmenu="return false">
    </html>
