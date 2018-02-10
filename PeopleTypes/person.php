<?php
namespace person;
include_once '/var/www/html/AnkushDeora/Book_Industry/address.php';
include_once '/var/www/html/AnkushDeora/Book_Industry/db.php';
use db\DB;
 use address\Address;
  class Person{

	 private $fname;
   private $lname;
   private $address;
   private $mobile;
   private $person_type;
  

   function __construct($details)
    {
    
      $this->fname    =  $details['fname'];
       $this->lname    = $details['lname'];
      
      $this->mobile  = $details['mobile'];
      $this->person_type = $details['person_type'];
      $this->address = new Address(['state'=>$details['state'], 'country'=>$details['country'], 'postcode' => $details['postcode'], 'city' => $details['city']]);
       $addr = $this->address->addressdetails();
      
      $this->address = $addr;
    }


   function persondetails($last_id)
   {
      global $conn1;
      echo "<br>";
      echo $this->address;
      
            echo "<br>";
            echo $query  = "INSERT into person (fname,lname,mobile,a_id) Values('{$this->fname}','{$this->lname}','{$this->mobile}','{$this->address}')";
                  
            
            $result = mysqli_query($conn1, $query);
        
        if(!$result){
            echo 'here1';
            echo "Error1: " . $result . "<br>" . mysqli_error($conn1);
        }
        else{
           $last_id1 = $conn1->insert_person_id;
        }
           
   } 
   function getdetails()
    {
      return[$this->fname,$this->lname,$this->address,$this->mobile, $this->person_type];
      
    } 
  }

  // $p1 =new person(['fname' => 'clinton', 'lname' => 'parth' ],['city'=>'mumbai','state' =>'Maharastra', 'country' => 'india', 'postcode' =>'410101'],9660066889);
  //  print_r($p1->getdetails());
?>