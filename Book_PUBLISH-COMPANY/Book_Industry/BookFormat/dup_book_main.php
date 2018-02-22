<?php
namespace bookmain;
include '/var/www/html/AnkushDeora/Book_Industry/PeopleTypes/peopletype.php';
use bookmain\PeopleType\TypesOfPeople;
class Book_Main
{
	private $b_name;
	private $b_publicationyear;
	private $p_type;
	function __construct($name)
	{
		$this->b_name = $name['b_name'];
		$this ->p_type =new TypesOfPeople();
		$p_details=$this->p_type ->getdetails();
        $this->p_type =$p_details;
		$this->b_publicationyear =$name['b_publicationyear'];
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