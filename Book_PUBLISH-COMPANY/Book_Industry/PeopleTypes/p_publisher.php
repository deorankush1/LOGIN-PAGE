<?php

 include_once '/var/www/html/AnkushDeora/Book_Industry/PeopleTypes/publisher.php';
 use person\publisher\Publisher;
 if (isset($_POST['submit']))
 {
    
    $details = array(
    'fname' => $_POST['fname'],
    'lname' => $_POST['lname'],
    'mobile'    => $_POST['mobile'],
    'city'      => $_POST['city'],
    'state'     => $_POST['state'],
    'country'   => $_POST['country'],
    'postcode'  => $_POST['postcode'],
    'books_count'=>$_POST['books_count'],
    'publisher_house'=>$_POST['publisher_house']
    
    );
    
    $publisher = new Publisher($details);
    $publisher->publisherdetails();  
  }
?>