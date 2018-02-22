<?php
namespace person\publisher;
include_once '/var/www/html/AnkushDeora/Book_Industry/PeopleTypes/person.php';
include_once '/var/www/html/AnkushDeora/Book_Industry/db.php';
use db\DB;
use person\Person;
class Publisher extends Person
{
  private $books_count;
  private $person;
  private $publisher_house;
  private $person_type = "Publisher";


   function __construct($details)
    {
      $this->person = new Person(['fname' => $details['fname'], 'lname' => $details['lname'], 'mobile' => $details['mobile'], 'state'=>$details['state'], 'country'=>$details['country'], 'postcode' => $details['postcode'], 'city' => $details['city'],'person_type'=>$this->person_type]);
      $per = $this->person->persondetails();
      echo $this->person = $per;
     $this->books_count = $details['books_count'];
      $this->publisher_house = $details['publisher_house'];
      //print_r($this->person);
    }

    
    function publisherdetails()
    {
      //echo "here";
      echo $this->person;
     global $conn1;
     echo "<br>";
     echo $this->person;
      
     echo    $query  = "INSERT into publisher (books_count,p_id,publisher_house) Values('{$this->books_count}','{$this->person}','{$this->publisher_house}')";         
            
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
      return[$this->person,$this->books_count,$this->publisher_house];
    } 
  }
   // $publish_details = new publisher(['fname' => 'clinton', 'lname' => 'parth','city'=>'mumbai','state' =>'Maharastra', 'country' => 'india', 'postcode' =>'410101','mobile' => 9660066889],10,navneet);
   // print_r($publish_details ->getdetails());
   //  echo "<br>";
?>