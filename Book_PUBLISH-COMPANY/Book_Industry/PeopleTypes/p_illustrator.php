<?php

 include_once '/var/www/html/AnkushDeora/Book_Industry/PeopleTypes/illustrator.php';
 use person\illustrator\Illustrator;
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
    'illus_tools'=>$_POST['illus_tools']
    
    );

    $illustrator = new Illustrator($details);
    $illustrator->illustratordetails();  
  }
?>