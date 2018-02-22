<?php
include '/var/www/html/AnkushDeora/Book_Industry/PeopleTypes/author.php';
Class Book_Details 
{

    private $title;
    private $author;
    private $publisher;
    private $price;
    private $booktype;
    
    function __construct($title,$author1,$publisher,$price,$booktype)
    {
        $this->title     = $title;
        $this->author   = new Author();
        $adetails = $this->author->a_details($author1);
        $this->author =$adetails;
        $this->publisher  = $publisher;
        $this->price = $price;
        $this->booktype = $booktype;
    }
    
    function getdetails()
    {
      return[$this->title,$this->author,$this->publisher,$this->price,$this->booktype];
      
    } 
}
$Tbook  = new Book_details('mr.Bin',array('fname' => 'sachin', 'lname' => 'tendulkar'), 'nsd', 100,'hardcover');
echo "<br>";
print_r($Tbook->getdetails());
?>


