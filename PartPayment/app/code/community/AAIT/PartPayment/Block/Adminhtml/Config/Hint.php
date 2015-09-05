<?php

class AAIT_PartPayment_Block_Adminhtml_Config_Hint extends Mage_Adminhtml_Block_Abstract implements Varien_Data_Form_Element_Renderer_Interface
{

    protected $_template = 'partpayment/hint.phtml';

    /**
     * Render fieldset html
     * @param Varien_Data_Form_Element_Abstract $element element
     * @return string
     */
    public function render(Varien_Data_Form_Element_Abstract $element)
    {
        // Prevent duplicate show
        if (!Mage::getSingleton('adminhtml/session')->getIsPayexHintShowed()) {
            // Show hint message
            $modules = Mage::helper('partpayment/update')->getAvailableVersions();
            $this->assign('modules', $modules);
            Mage::getSingleton('adminhtml/session')->setIsPayexHintShowed(true);
            return $this->toHtml();
        }

        return '';
    }
}
