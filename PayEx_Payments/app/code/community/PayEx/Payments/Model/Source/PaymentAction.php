<?php

class PayEx_Payments_Model_Source_PaymentAction
{
    public function toOptionArray()
    {
        return array(
            array(
                'value' => 0,
                'label' => Mage::helper('payex')->__('Authorize')
            ),
            array(
                'value' => 1,
                'label' => Mage::helper('payex')->__('Sale')
            ),
        );
    }
}
