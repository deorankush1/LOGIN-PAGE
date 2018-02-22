<?php session_start();?>

<?php $error = $_SESSION['error'] ;?>

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
    	
    <h4> <a href ='../admin/admin.html'>Login for Admin</a></h4> 
    <pre style ="text-align: center;"> 
      <h1>  Registration Page </h1>
      <p><span class="error">*  Required field.</span></p>

      
      <form method="Post" action="../user/Registration.php" enctype="multipart/form-data" >  

        firstName:   <input type="text" name ="firstname" placeholder= "ENTER FNAME" value = "<?php echo $error[0]['fname'] ? $error[0]['fname'] : ""; ?>"><span class="error">* </span><br>
        <?php 
         {
         echo $error['firstname'];
         echo '<br>';
         
        }
        ?>


        lastName:     <input type="text" name="lastname"  placeholder= "ENTER LNAME" value = "<?php echo $error[1]['lname'] ? $error[1]['lname'] : ""; ?>" ><span class="error">* </span><br>
        <?php
        { 
         echo $error['lastname'];
         echo '<br>';
         //session_destroy();
        }
        ?>


        email:       <input type="text" name="email"  placeholder= "ENTER E_ID " value = "<?php echo $error[2]['email1'] ? $error[2]['email1'] : ""; ?>" ><span class="error">* </span><br> 
        <?php
        {
        echo $error['email'];
        echo '<bprer>';
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
        age:         <input type = "varchar" name="age"  placeholder= "ENTER AGE" value = "<?php echo $error[3]['age1'] ? $error[3]['age1'] : ""; ?>" ><span class="error">* </span><br> 
        <?php 
        {
          echo $error['age'];

         echo '<br>';
         //session_destroy();
        }
        ?>


        Mobile:         <input type = "varchar" name="mobile"  placeholder= "ENTER MOBILE NUMBER" value = "<?php echo $error[4]['mbno'] ? $error[4]['mbno'] : ""; ?>"><span class="error">* </span><br>
        <?php 
         {
         echo $error['mobile'];
         echo '<br>';
        $_SESSION['error'] = null;
        // session_destroy();
        }
        ?>


        gender:  <select name = gender>
           <option value="Male">Male</option>
           <option value="Female">Female</option>
           <option value="0thers">others</option>
           </select>


         Select image to upload: <input type="file" name="image"/>

        <input type="Submit" value='submit' name='submit' class="btn btn-info" >

        Already I have an account: <a href="../user/loginpage.html" class="btn btn-primary">Login</a>
      </form>
    </pre>

  </body>
</html>
<html oncontextmenu="return false">
</html>
