<?php
namespace bookmain\BookType; 
include_once 'audio.php';
include_once 'digital.php';
use bookmain\audio\Audio;
use bookmain\digital\digital;
Class BookType extends Audio
{
    private   $audio;
    protected $digital;
    protected $hardcover;
    protected $paperback;
    
    function __construct($audio,$digital)
    {
      $this->audio = new Audio($audio);
      $audio_page=$this->audio->getbook_main();
      $this->audio = $audio_page; 
       
      $this->digital = new digital($digital);
      $digital_page=$this->digital->getbook_main();
      $this->digital = $digital_page; 
    }
    function getdetails()
    {
      return[$this->audio, $this->digital];
      
    } 

}
$Tbook  = new BookType(['b_size' =>'101','b_font' => 'bold','b_cost' => '500rs', 'b_completion_time' => '3 hrs','b_name'=>'2 states', 'b_author'=>'chetan Bhagat', 'b_publisher'=>'rupa'],['b_size' =>'101','b_font' => 'bold','b_cost' => '500rs', 'b_completion_time' => '3 hrs','b_name'=>'2 states', 'b_author'=>'chetan Bhagat', 'b_publisher'=>'rupa']);
$data = $Tbook->getdetails();
print_r($data);
?>


