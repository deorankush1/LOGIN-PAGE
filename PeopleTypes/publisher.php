<?php
namespace person\publisher;
include_once '/var/www/html/AnkushDeora/Book_Industry/PeopleTypes/person.php';
use person\Person;
class Publisher extends Person
{
  private $books_count;
  private $person;
  private $publisher_house;


   function __construct($person,$books_count,$publisher_house)
    {
      $this->person = new Person($person);
      $per = $this->person->getdetails();
      $this->person = $per;
      $this->books_count = $books_count;
      $this->publisher_house = $publisher_house;
      //print_r($this->person);
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