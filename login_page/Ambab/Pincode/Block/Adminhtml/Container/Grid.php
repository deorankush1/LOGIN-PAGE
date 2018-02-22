<?php

class Ambab_Pincode_Block_Adminhtml_Container_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
	public function __construct()
		{
			parent::__construct();
			$this->setId('containerGrid');
			$this->setDefaultSort('id');
			$this->setDefaultDir('ASC');
		}

	protected function _prepareCollection()
		{
			$collection = Mage::getModel('pincode/pincode')->getCollection();
			$this->setCollection($collection);
			return parent::_prepareCollection();
		}

	protected function _prepareColumns()
		{
			$this->addColumn('id', array(
			'header' => 'ID',
			'align' => 'right',
			'width' => '50px',
			'index' => 'id'
			));
			$this->addColumn('pincode', array(
			'header' => 'Pincode',
			'align' => 'right',
			'width' => '150px',
			'index' => 'pincode'
			));
			$this->addColumn('status', array(
			'header' => 'Status',
			'align' => 'right',
			'width' => '100px',
			'index' => 'status'
			));
			$this->addColumn('enabled', array(
			'header' => 'Enabled',
			'align' => 'left',
			'sortable' => false,
			'type' => 'options',
			'options' => array('No','Yes'),
			'index' => 'enabled'
			));
// Add additional columns
			return parent::_prepareColumns();
		}
	public function getRowUrl($row){
		return $this->getUrl('*/*/edit', array('id' => $row->getId()));
		}
}

?>