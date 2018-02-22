<?php
class Ambab_Pincode_Block_Adminhtml_Container extends Mage_Adminhtml_Block_Widget_Grid_Container{
public function __construct(){
$this->_controller = 'adminhtml_container';
$this->_blockGroup = 'pincode'; // should be named after the extension
$this->_headerText = 'Grid Header'; // defines the text for the header of the grid container
$this->_addButtonLabel = 'Add'; // lets you change the label of the button used to add a
record.
parent::__construct();
}
}
?>