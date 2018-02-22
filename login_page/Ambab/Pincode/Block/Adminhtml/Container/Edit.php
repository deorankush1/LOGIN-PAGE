<?php 

class Ambab_Pincode_Block_Adminhtml_Container_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
public function __construct()
{
	parent::__construct();
	$this->_objectId = 'id';
	$this->_blockGroup = 'pincode';
	$this->_controller = 'adminhtml_container';
	$this->_updateButton('save', 'label', 'Save');
	$this->_formScripts[] = "";
}
public function getHeaderText()
{
	if(Mage::registry('data') && Mage::registry('data')->getId())
	{
		return 'Edit';
	} 
	else 		
	{
		return 'New';
	}
}
}

?>