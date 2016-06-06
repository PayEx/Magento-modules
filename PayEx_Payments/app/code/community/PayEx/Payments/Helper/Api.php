<?php

require_once(Mage::getBaseDir('lib') . '/PayEx.Ecommerce.Php/src/PayEx/Px.php');

class PayEx_Payments_Helper_Api extends Mage_Core_Helper_Abstract
{
    protected static $_px = null;

    /**
     * Get PayEx Api Handler
     * @static
     * @return Px
     */
    public static function getPx()
    {
        // Use Singleton
        if (is_null(self::$_px)) {
            self::$_px = new PayEx\Px();
        }
        return self::$_px;
    }
}