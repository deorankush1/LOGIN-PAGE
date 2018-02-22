<?php session_start();?>

<!DOCTYPE html>
<html>
<head>
	<title>test</title>
</head>
<body>
<form  method="Post" action="../user/Registration.php">
	Mobile:         <input type = "varchar" name="mobile"  placeholder= "ENTER MOBILE NUMBER" ><span class="error">* </span><br>
<?php 
if (isset($_SESSION['mnErr'])) {
 $error = $_SESSION['mnErr'];
 echo "<span>$error</span>";
 echo '<br>';
 session_destroy();
}
?>

<input type="Submit" value='submit' name='submit' >

</form>
</body>
</html>