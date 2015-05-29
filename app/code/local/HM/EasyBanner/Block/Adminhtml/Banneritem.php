<?php
class HM_EasyBanner_Block_Adminhtml_Banneritem extends Mage_Adminhtml_Block_Widget_Grid_Container
{
  public function __construct()
  {
    $this->_controller = 'adminhtml_banneritem';
    $this->_blockGroup = 'easybanner';
    $this->_headerText = Mage::helper('easybanner')->__('Block Item Manager');
    $this->_addButton('save', array(
            'label'     => Mage::helper('easybanner')->__('Save Block Item Order'),
            'onclick'   => 'save_order()',
			'id'		=> 'save_cat',
        ));
    $this->_addButtonLabel = Mage::helper('easybanner')->__('Add Block Item');
    parent::__construct();
  }
  
	public function getSaveOrderUrl()
    {
        return $this->getUrl('*/*/setOrder');
    }
}