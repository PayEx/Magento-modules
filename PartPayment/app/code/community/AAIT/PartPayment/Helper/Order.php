<?php

/**
 * PayEx Helper: Order
 * Created by AAIT Team.
 */
class AAIT_PartPayment_Helper_Order extends AAIT_Shared_Helper_Order
{
    /**
     * @return AAIT_PartPayment_Helper_Data
     */
    public function getHelper(){
        return Mage::helper("partpayment");
    }

    /**
     * @return AAIT_PartPayment_Helper_Tools
     */
    public function getTools(){
        return Mage::helper("partpayment/tools");
    }

    /**
     * @return AAIT_PartPayment_Helper_Api
     */
    public function getApi(){
        return Mage::helper("partpayment/api");
    }

}