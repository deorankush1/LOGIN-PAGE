<?php

class Ankush_Pincode_IndexController extends Mage_Core_Controller_Front_Action
{
	public function getsPincodesAction()
	{
		$pincode = Mage::getModel('pincode/pincode')->getCollection()->getdata();
		echo "<pre>";
		print_r($pincode);
		echo "<pre>";
	}
}
?>