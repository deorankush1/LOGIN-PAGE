<?php
namespace person\editor;
include_once '/var/www/html/AnkushDeora/Book_Industry/PeopleTypes/person.php';
use person\Person;
class Editor extends Person
{
  private $no_of_books_edited;
  private $person;


   function __construct($person,$no_of_books_edited)
    {
      $this->person = new Person($person);
      $per = $this->person->getdetails();
      $this->person = $per;
      $this->no_of_books_edited = $no_of_books_edited;
      //print_r($this->person);
    }

    function getdetails()
    {
      return[$this->person,$this->no_of_books_edited];
      
    } 
  }
   // $editor_details = new editor(['fname' => 'clinton', 'lname' => 'parth','city'=>'mumbai','state' =>'Maharastra', 'country' => 'india', 'postcode' =>'410101','mobile' => 9660066889],10);
   // print_r($editor_details ->getdetails());
   //  echo "<br>";
?>