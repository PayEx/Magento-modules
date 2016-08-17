<?php

class PayEx_Payments_Test_Block_Form_Financing extends EcomDev_PHPUnit_Test_Case
{
    var $object;

    /**
     * setUp
     */
    public function setUp()
    {
        parent::setUp();
        $this->object = self::app()->getLayout()->createBlock('payex/form_financing');
    }

    /**
     * Test Block
     */
    public function testInfoBlock()
    {
        $this->assertAttributeEquals('payex/financing/form.phtml', '_template', $this->object);
    }

    /**
     * tearDown
     */
    public function tearDown()
    {
        unset($this->object);
        parent::tearDown();
    }
}
