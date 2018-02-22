<?php

class Ambab_Pincode_Block_Adminhtml_Container_Edit_Form extends Mage_Adminhtml_Block_Widget_Form{

protected function _prepareForm(){
$form = new Varien_Data_Form(array(
'id' => 'edit_form',
'action' => $this->getUrl('*/*/save', array('id' =>
$this->getRequest()->getParam('id'))),
'method' => 'post'
));
$form->setUseContainer(true);
$this->setForm($form);
$fieldset = $form->addFieldset('form', array('legend' => 'Information'));
/*$fieldset->addField('enabled', 'text', array(
'label' => 'Enabled',
'required' => true,
'name' => 'enable'
));*/
$fieldset->addField('pincode', 'text', array(
'label' => 'Pincode',
'required' => true,
'name' => 'pincode'
));
$fieldset->addField('status', 'text', array(
'label' => 'Status',
'required' => true,
'name' => 'status'
));


// Add additional fields
if(Mage::registry('data')){
$data = Mage::registry('data')->getData();
} else {
$data = array();
}
$form->setValues($data);
parent::_prepareForm();
}
}

?>