<?php
namespace address;
include_once '/var/www/html/AnkushDeora/Book_Industry/db.php';
use db\DB;
	class Address
	{
		private $adr_detail =array(
			'city'    => '',
			'state'   => '',
			'country' => '',
		    'postcode' => ''
		);
		private $last_id;
		

		function __construct($address1)
		{
			
			$this->adr_detail['city'] = $address1['city'];
	        $this->adr_detail['state'] = $address1['state'];
            $this->adr_detail['country'] = $address1['country'];
            $this->adr_detail['postcode'] = $address1['postcode'];
	        
		} 
		function addressdetails()
        {
        	global $conn1;
            
            echo $sql  = "INSERT into address (city,state,country,postcode) values('{$this->adr_detail['city']}','{$this->adr_detail['state']}','{$this->adr_detail['country']}','{$this->adr_detail['postcode']}')";         
            
            print_r($result = mysqli_query($conn1,$sql));
            
   			
   			if(!$result){
      			echo 'here';
      			echo "Error: " . $result . "<br>" . mysqli_error($conn1);
    		}
    		else{
    			 
    			 $this->last_id = $conn1->insert_id;
    	
    		     return($this->last_id);
    		}
           

        } 
     
	 }
	// $insert_data = "INSERT into Person (fname,lname,email,mob,address,dob,ptype) values('{$this->fname}','{$this->lname}','{$this->email}','{$this->mob}','{$this->address}','{$this->dob}','{$this->person_type}')";
?>
  



   