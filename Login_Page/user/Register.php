<?php session_start();
//error_reporting(0); //disable all errors and notices
?>

<?php $error = $_SESSION['error'] ;?>

<!DOCTYPE HTML>
<html>

  <head>
    <style>
    .error {color:red;}
    </style>
    <title> Signup </title>

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>  
  <body>
    <h4> <a href ='../admin/admin.html'>Login for Admin</a></h4><br><br>
     
    <h3 style ="text-align: center;">  Registration Page </h3><br>
      <form style ="text-align: center;" method="Post" action="../user/Registration.php" enctype="multipart/form-data">      First Name: <input type="text" name ="firstname" placeholder= "Enter First Name" value = "<?php echo $error[0]['fname'] ? $error[0]['fname'] : ""; ?>"><span class="error">* </span>
        <?php 
         {
          echo "<span class='error'>";
         echo $error['firstname'];  
         echo "</span>";
        }
        ?><br><br>
        
       Last Name: <input type="text" name="lastname"  placeholder= "Enter Last Name" value = "<?php echo $error[1]['lname'] ? $error[1]['lname'] : ""; ?>" ><span class="error">* </span>
        <?php
        { 
        echo "<span class='error'>";
         echo $error['lastname'];
         echo "</span>";
        }
        ?><br><br>
        
        E-mail Id: <input type="text" name="email" id="email" onblur="checkMailStatus()" placeholder= "Enter Your Email_Id "  ><span class="error">* </span> <span id="emailstatus" name="estatus"></span>&nbsp;
        <p id="demo"></p>
        <?php
        {
        echo "<span class='error'>";
        echo $error['email'];
        echo "</span>";
        //session_destroy();
        }?><br><br>
        
        
        Password: <input type="password" name="password"  placeholder= "Enter Password" value = "<?php echo $error[5]['PWD'] ? $error[5]['PWD'] : ""; ?>"><span class="error">* </span>
        <?php
        {
        //$error = $_SESSION['error'];
        echo "<span class='error'>";
        echo $error['password'];
        echo "</span>";
        //echo '<br><br>';
        //session_destroy();
        }?><br><br>

        Re-Enter-Password: <input type="password" name="re_password"  placeholder= "Enter Re-Enter-Password" ><span class="error">* </span><br><br>
        
        Age: <input type = "varchar" name="age"  placeholder= "Enter Age" value = "<?php echo $error[3]['age1'] ? $error[3]['age1'] : ""; ?>" ><span class="error">* </span> 
        <?php 
        { 
          echo "<span class='error'>";
          echo $error['age'];
          echo "</span>";
         //session_destroy();
        }
        ?><br><br>

      MobileNumber: <input type = "varchar" name="mobile"  placeholder= "Enter Mobile Number" value = "<?php echo $error[4]['mbno'] ? $error[4]['mbno'] : ""; ?>"><span class="error">* </span>
        <?php 
         {
         echo "<span class='error'>";
         echo $error['mobile'];
         echo "</span>";
        $_SESSION['error'] = null;
        // session_destroy();
        }
        ?><br><br>

      Gender: <select name = gender>
      <option value="select">Select</option>
       <option value="Male">Male</option>
       <option value="Female">Female</option>
       <option value="0thers">others</option>
      </select><span class="error">* </span>
      <?php 
        { 
          echo "<span class='error'>";
          echo $error['gender'];
          echo "</span>";
         //session_destroy();
        }
        ?><br><br>
      
      <input type="file" name="image">
      <?php 
        { 
          echo "<span class='error'>";
          echo $error['image'];
          echo "</span>";
         //session_destroy();
        }
        ?><br><br>

        <input type="Submit" value='submit' name='submit' class="btn btn-info" ><br><br>
         <b>Already Registered</b>
         <a href="../user/loginpage.html" class="btn btn-primary">Login</a>
      </form>
    </pre>

  </body>
</html>
<script type="text/javascript">
  function checkMailStatus(){
    var email=$("#email").val();// value in field email
    var emaildata = localStorage.getItem(email);
    console.log(email);
    //console.log('emaildata');
     if (emaildata == null)
     {

       $.ajax({
        url:'../user/checkemail.php', // put your real file name 
        type : 'POST',
        dataType: 'json',
        data:{user_email:email},
        success:function(msg){         
        //var obj = JSON.parse(msg);
        //console.log(msg);
      //   window.test=JSON.stringify(msg);
         console.log(msg.email);
         //alert(msg.msg);
         $("#demo").html(msg.msg);
        localStorage.setItem(email,(msg.msg));
      //console.log(localStorage.getItem(email));
      }
    });
    }else{
     $("#demo").html(emaildata,'---');      
     console.log(emaildata,'-----');
  }
  }
</script>


<!-- <script type="text/javascript">
  var flag=1;
function checkMailStatus(){
//alert("came");
var email=$("#email").val();// value in field email
var emaildata = localStorage.getItem("emailcheck");
var emailparsedata = JSON.parse(emaildata);
console.log(emaildata.email);
// json_decode(emaildata);
console.log("here");
 //console.log(e.email);
 console.log("here");
//  if (emaildata)
//  {
//    console.log(emaildata);
//  }
//  else{
$.ajax({
  url:'../user/checkmail.php', // put your real file name 
    type : 'POST',
    data:'user_email='+email,
    success:function(msg){
         
         var obj = JSON.parse(msg);
         console.log(obj.email);
         window.test=JSON.stringify(msg);
         
          console.log(obj);
        localStorage.setItem('emailcheck',JSON.stringify(obj));
       
        }

 });
 // console.log(localStorage.getItem("emailcheck"));
 console.log( "emailcheck = " + localStorage.getItem("emailcheck"));
 console.log("x");
 
 console.log("x");
//}
}

</script> -->

