<?php

	class Ambab_Pincode_IndexController extends Mage_Core_Controller_Front_Action
	{
		public function getPincodesAction()
		{
			echo "test";
			$pincode = Mage::getModel('pincode/pincode')->getCollection()->getData();
			echo "<pre>";
			print_r($pincode);
			echo "</pre>";
		}

		public	function getPincodeByParamAction()
		{
			 $pincode= $this->getRequest()->getParams(); // pincode entered by the user
				
	       	$result = Mage::getModel('pincode/pincode')->load($pincode['pincode'], 'pincode');
		
	       	$this->getResponse()->clearHeaders()->setHeader('Content-type','application/json');
		
		    $this->getResponse()->setBody(Mage::helper('core')->jsonEncode($result));
		}
	}

?>