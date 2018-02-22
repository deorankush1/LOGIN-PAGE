<?php
  namespace bookmain\audio;
  include_once '/var/www/html/AnkushDeora/Book_Industry/BookFormat/book_main.php';
  use bookmain\book_main;
  class Audio extends Book_Main
 {
   private $b_size;
   private $b_voice;
   private $b_cost;
   private $b_completion_time;
   private $book_main;

 
   function __construct($audio)
    {
    	$this->b_size = $audio['b_size'];
      $this->b_voice = $audio['b_voice'];
      $this->b_cost = $audio['b_cost'];
      $this->b_completion_time = $audio['b_completion_time'];
      $this->book_main = new Book_Main();
      $a = $this->book_main->getbook_main();
      $this->book_main = $a;
    }
   
   function audio_main()
    {
      return["size" =>$this->b_size, $this->b_voice, $this->b_cost,$this->b_completion_time,$this->book_main];
    }
  }
  // $audio1= new Audio('101','bold','250','3 hrs',[]);
  // print_r($audio1->audio_main());
?>