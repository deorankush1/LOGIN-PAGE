<?php
namespace person\illustrator;
include_once '/var/www/html/AnkushDeora/Book_Industry/PeopleTypes/person.php';
include_once '/var/www/html/AnkushDeora/Book_Industry/db.php';
use db\DB;
use person\Person;

class Illustrator extends Person
{
  private $books_count;
  private $person;
  private $illus_tools;
  private $person_type = "Illustrator";


   function __construct($details)
    {
      $this->person = new Person(['fname' => $details['fname'], 'lname' => $details['lname'], 'mobile' => $details['mobile'], 'state'=>$details['state'], 'country'=>$details['country'], 'postcode' => $details['postcode'], 'city' => $details['city'],'person_type'=>$this->person_type]);
      $per = $this->person->persondetails();
      $this->person = $per;
      $this->books_count = $details['books_count'];
      $this->illus_tools = $details['illus_tools'];
      //print_r($this->person);
    }

    
    function illustratordetails()
    {
      //echo "here";
      echo $this->person;
     global $conn1;
     echo "<br>";
     echo $this->person;
      
     echo    $query  = "INSERT into illustrator (books_count,p_id,illus_tools) Values('{$this->books_count}','{$this->person}','{$this->illus_tools}')";         
            
     $result = mysqli_query($conn1, $query);
        
      if(!$result){
        echo 'here2';
        echo "Error:2 " . $result . "<br>" . mysqli_error($conn1);
      }
      else{
        echo "successuflly added";
      }
    }

    function getdetails()
    {
      return[$this->person,$this->books_count,$this->illus_tools];
    } 
  }
   // $illus_details = new illustrator(['fname' => 'clinton', 'lname' => 'parth','city'=>'mumbai','state' =>'Maharastra', 'country' => 'india', 'postcode' =>'410101','mobile' => 9660066889],10,coral);
   // print_r($illus_details ->getdetails());
   //  echo "<br>";
?>