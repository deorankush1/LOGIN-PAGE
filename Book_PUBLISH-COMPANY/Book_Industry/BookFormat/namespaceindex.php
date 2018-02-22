<?php
namespace second;
Class A
{  
	function __construct()
	{
	 echo $a=12;
	}
}
?>
<?php
namespace first;
class A
{
	function __construct()
	{
	  echo 'b';	
	}
	
}

?>


<?php
include 'audio.php';
include 'digital.php';

$obj = new second\A;

$obj = new first\A;

?>