<?php
namespace person\author;
include_once '/var/www/html/AnkushDeora/Book_Industry/PeopleTypes/person.php';
include_once '/var/www/html/AnkushDeora/Book_Industry/db.php';
use person\Person;
use db\DB;
class Author extends Person
{
  private $no_of_books;
  private $person;
  private $person_type = "Author";


   public function __construct($details)
    {

      $this->person = new Person(['fname' => $details['fname'], 'lname' => $details['lname'], 'mobile' => $details['mobile'], 'state'=>$details['state'], 'country'=>$details['country'], 'postcode' => $details['postcode'], 'city' => $details['city'],'person_type'=>$this->person_type]);
      $per= $this->person->persondetails();
      $this->person = $per;

      $this->no_of_books = $details['no_of_books'];
    }

    function insertdetails()
    {
      echo "here";
      echo $this->person;
     global $conn1;
      echo "<br>";
      echo $this->person;
      
            
         echo    $query  = "INSERT into author (no_of_books,p_id) Values('{$this->no_of_books}','{$this->person}')";         
            
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
      return[$this->person,$this->no_of_books_written];
      
    } 
  }
   // $author_details = new author([['fname' => 'clinton', 'lname' => 'parth'],['city'=>'mumbai','state' =>'Maharastra', 'country' => 'india', 'postcode' =>'410101'],9660066889],10);
   // print_r($author_details ->getdetails());
   // echo "<br>";
?>