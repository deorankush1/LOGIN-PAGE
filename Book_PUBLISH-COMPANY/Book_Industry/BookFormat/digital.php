<?php
  namespace bookmain\digital;
  use bookmain\book_main;
  include_once '/var/www/html/AnkushDeora/Book_Industry/BookFormat/book_main.php';
  
  class Digital extends Book_Main
   {
	   private $b_size;
	   private $b_cost;
	   private $b_completion_time;
	   private $book_main;
	   
	   function __construct($digital)
	    {
	       $this->b_size = $digital['b_size'];
	       $this->b_font = $digital['b_font'];
	       $this->b_cost = $digital['b_cost'];
	       $this->b_completion_time = $digital['b_completion_time'];
	       $this->book_main = new Book_Main();
	       $a = $this->book_main->getbook_main();
           $this->book_main = $a;
	    }
	   
	   function getbook_main()
		{
			return[$this->b_size, $this->b_font, $this->b_cost,$this->b_completion_time,$this->book_main];
		}
	   
    }
    // $d1= new digital('101','250','3 hrs',['b_name'=>'2 states', 'b_author'=>'chetan Bhagat', 'b_publisher'=>'rupa']);
    // print_r($d1->getbook_main());
  
?>