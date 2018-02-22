<?php

class Ambab_Pincode_Adminhtml_IndexController extends Mage_Adminhtml_Controller_Action {

 /* public function indexAction()
  {
  	$pincode = Mage::getModel('pincode/pincode')->getCollection()->getData();
	echo "<pre>";
	print_r($pincode);
	echo "</pre>";
  }*/

	public function indexAction()
	{
		$this->loadLayout();
		$this->_addContent($this->getLayout()->createBlock('pincode/adminhtml_container'));
		$this->renderLayout();
	}

	public function newAction()
	{
		$this->_forward('edit');
	}

	public function editAction()
	{
		$id = $this->getRequest()->getParam('id', null);
		$model = Mage::getModel('pincode/pincode');
		if($id)
		{
			$model->load((int) $id);
			if($model->getId())
			{
				$data = Mage::getSingleton('adminhtml/session')->getFormData(true);
				if($data)
				{
					$model->setData($data)->setId($id);
				}
		} else {
			Mage::getSingleton('adminhtml/session')->addError('Does not exist');
			$this->_redirect('*/');
	}
	Mage::register('data', $model);
	}
		$this->loadLayout();
		$this->_addContent($this->getLayout()->createBlock('pincode/adminhtml_container_edit'));
		$this->renderLayout();
	}

	public function saveAction()
	{
		if($data = $this->getRequest()->getPost()){
			$model = Mage::getModel('pincode/pincode');
		try 
		{
			$id = $this->getRequest()->getParam('id');
			$model->setData($data);
			Mage::getSingleton('adminhtml/session')->setFormData($data);
			if($id){ 
				$model->setId($id); 
			}
			$model->save();
			if(!$model->getId()){
				Mage::throwException('Error saving record');
			}
			Mage::getSingleton('adminhtml/session')->addSuccess('Record was successfully saved.');
			Mage::getSingleton('adminhtml/session')->setFormData(false);
			$this->_redirect('*/*/');
			} catch(Exception $e){
				Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
				$this->_redirect('*/*/');
			}
		}
		/*Mage::getSingleton('adminhtml/session')->addError('No data found to save');*/
		$this->_redirect('*/*/');	
	}

	public function deleteAction()
	{
		if($id = $this->getRequest()->getParam('id')){
		try{
			$model = Mage::getModel('pincode/pincode');
			$model->setId($id);
			$model->delete();
			Mage::getSingleton('adminhtml/session')->addSuccess('The record has been deleted.');
			$this->_redirect('*/*/');
		} 
		catch(Exception $e){
			Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
			$this->_redirect('*/*/edit', array('id' => $id));
		}
		}
		/*Mage::getSingleton('adminhtml/session')->addError('Unable to find the record to delete.');*/
		$this->_redirect('*/*/');
}


}


?>