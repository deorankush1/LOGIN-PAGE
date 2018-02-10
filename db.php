<?php
namespace db;
	$servername ="local";
	$username = "root";
	$password ="123456";
	$database_name = "bookindustry";

	$conn1 = mysqli_connect($servername, $username, $password, $database_name);
	 
	// Check connection
	if($conn1 === false){
	    die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	else {
		echo "success ";
	}
?>



<!-- <?php
/*namespace db;

class DB {
	public $servername ="localhost";
	public $username = "root";
	public $password ="123456";
	public $db_name = "bookindustry";
	
	public function connect() {
	
		$conn1 = mysqli_connect($this->servername, $this->username, $this->password, $this->db_name);
	 
		// Check connection
		if($conn1 === false){
		    die("ERROR: Could not connect. " . mysqli_connect_error());
		}
		else
		{
			echo "success";
		}

	}
		
}
	$d1 = new DB();*/
	

?> -->



