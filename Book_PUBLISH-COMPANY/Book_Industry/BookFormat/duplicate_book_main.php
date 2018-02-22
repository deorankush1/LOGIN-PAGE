<?php
namespace bookmain;
include '/var/www/html/AnkushDeora/Book_Industry/PeopleTypes/author.php';
include '/var/www/html/AnkushDeora/Book_Industry/PeopleTypes/publisher.php';
include '/var/www/html/AnkushDeora/Book_Industry/PeopleTypes/illustrator.php';
include '/var/www/html/AnkushDeora/Book_Industry/PeopleTypes/editor.php';
use person\author\Author;
use person\publisher\Publisher;
use person\illustrator\Illustrator;
use person\editor\Editor;

class Book_Main
{
	private $b_name;
	private $b_publicationyear;
	private $publisher;
    private $author;
    private $illustrator;
    private $editor;

	function __construct($name)
	{
		$this->b_name = $name['b_name'];
		$this ->p_type =new TypesOfPeople();
		$p_details=$this->p_type ->getdetails();
        // $this->p_type =$p_details;
		// $this->b_publicationyear =$name['b_publicationyear'];
		 $this->publisher   = new Publisher(['fname' => 'clinton', 'lname' => 'parth','city'=>'mumbai','state' =>'Maharastra', 'country' => 'india', 'postcode' =>'410101','mobile' => 9660066889],10,navneet);
            $publ_details = $this->publisher->getdetails();
            $this->publisher =$publ_details;


             $this->author   = new Author(['fname' => 'clinton', 'lname' => 'parth','city'=>'mumbai','state' =>'Maharastra', 'country' => 'india', 'postcode' =>'410101','mobile' => 9660066889],10,navneet);
            $aut_details = $this->author->getdetails();
            $this->author =$aut_details;

            $this->illustrator   = new Illustrator(['fname' => 'clinton', 'lname' => 'parth','city'=>'mumbai','state' =>'Maharastra', 'country' => 'india', 'postcode' =>'410101','mobile' => 9660066889],10,coral);
            $ill_details = $this->illustrator->getdetails();
            $this->illustrator =$ill_details;


            $this->editor   = new Editor(['fname' => 'clinton', 'lname' => 'parth','city'=>'mumbai','state' =>'Maharastra', 'country' => 'india', 'postcode' =>'410101','mobile' => 9660066889],10);
            $edit_details = $this->editor->getdetails($editor1);
            $this->editor =$edit_details;

	}

	function getbook_main()
	{
		return[$this->b_name,$this->b_publicationyear, $this->p_type];
	}
}
	$b1=new Book_Main(['b_name' => 'sf','b_publicationyear' => '2016']);
	echo "<pre>";
	 print_r($b1->getbook_main());
	 echo "</pre>";
?>