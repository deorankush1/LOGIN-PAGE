<?php
class SIGNUP
{
    private $username;
    private $email;
    private $password;
    private $repassword;
    private $age;
    private $mobile;

  public function __construct()
   {
        $this->username = isset($_POST['username']) ? $_POST['username'] : null;
        $this->email = isset($_POST['email']) ? $_POST['email'] : null;
        $this->password = isset($_POST['password']) ? $_POST['password'] : null ;
        $this->age = isset($_POST['age']) ? $_POST['age'] : null;
        $this->mobile = isset($_POST['mobile']) ? $_POST['mobile'] : null;
        $this->repassword = isset($_POST['repassword']) ? $_POST['repassword'] :null;
    }


  public function UserValidation()
   {
     if(empty($this->username))
       {
          echo 'username could not be empty ';
        }
    
     elseif(strlen($this->username)<=3)
        {
            echo "username length min 4";
         }
        
     else
       {
            echo "registrartion Done";
        }
     echo "<br> username =  "; 
     echo $this->username. "<br>"; 
    }

  public function EmailValidation(){
        if(!(filter_var($this->email, FILTER_VALIDATE_EMAIL))) 
        {
            echo  "Invalid email format";
        }
        else{
            echo "<br>" .'email sucessfull registration'."<br>" ;
        }
    }

  public function AgeValidation(){
       if(($this->age <=18))
       {
         echo "<br>" . 'Age Must be filled and greter 18';
        }
    } 
      //public $regex ='/^[6-9][0-9]{9}$/';

    public function PasswordValidation(){
        if(preg_match('/^.*(?=.{4,10})(?=.*\d)(?=.*[a-zA-Z]).*$/', $this->password)){
            echo 'atleast One small & Capital letter and a number ';
        }
        elseif($this->password != $this->repassword){
            echo "<br>" ."password did not match";
        }
    }

  public function MobileValidation(){
    if(!preg_match('/^[6-9][0-9]{9}$/', $this->mobile)){
        echo 'mobile number invalid';
    }
  } 


 

}
$signup = new SIGNUP();
$signup -> UserValidation();
$signup-> EmailValidation();
$signup->AgeValidation();
$signup ->MobileValidation();
$signup ->PasswordValidation();


 ?>

