<?php
namespace address;
	class Address
	{
		private $adr_detail =array(
			'city'    => '',
			'state'   => '',
			'country' => '',
		    'postcode' => ''
		);
		

		function getadress($address)
		{
			$this->adr_detail['city'] = $address['city'];
	        $this->adr_detail['state'] = $address['state'];
            $this->adr_detail['country'] = $address['country'];
            $this->adr_detail['postcode'] = $address['postcode'];
	        return $this->adr_detail;

		} 
     
	}