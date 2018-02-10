<?php
namespace person\illustrator;
 include_once '/var/www/html/AnkushDeora/Book_Industry/PeopleTypes/person.php';
use person\Person;
class Illustrator extends Person
{
  private $books_count;
  private $person;
  private $illus_tools;


   function __construct($person,$books_count,$illus_tools)
    {
      $this->person = new Person($person);
      $per = $this->person->getdetails();
      $this->person = $per;
      $this->books_count = $books_count;
      $this->illus_tools = $illus_tools;
      //print_r($this->person);
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