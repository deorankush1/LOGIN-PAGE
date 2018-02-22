<?php
  namespace bookmain\paperback;
  use bookmain\book_main;
  include_once '/var/www/html/AnkushDeora/Book_Industry/BookFormat/book_main.php';
  
  class PaperBack extends Book_Main
 {
    private $b_weight;
    private $b_price;
    private $b_page;
    private $book_main;

    function __construct($b_weight,$b_cost,$b_page,$name)
    {
    	$this->b_weight = $b_weight;
    	$this->b_price = $b_cost;
      $this->b_page = $b_page;
      $this->book_main = new Book_Main();
      $a = $this->book_main->getbook_main();
      $this->book_main = $a;
    }

   function getbook_main()
    {
      return[$this->b_weight, $this->b_price,$this->book_main,$this->b_page];
    }
  }
  $p1= new paperback('101','250','250',['b_name'=>'2 states', 'b_author'=>'chetan Bhagat', 'b_publisher'=>'rupa']);
  print_r($p1->getbook_main());
  
?>