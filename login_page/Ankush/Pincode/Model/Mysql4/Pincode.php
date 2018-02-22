<?php
class Ankush_Pincode_Model_Mysql4_Pincode extends Mage_Core_Model_Mysql4_Abstract
{
	public function _construct()
	{
		$this-> _init('pincode/pincode', 'id');
	}
}
?>