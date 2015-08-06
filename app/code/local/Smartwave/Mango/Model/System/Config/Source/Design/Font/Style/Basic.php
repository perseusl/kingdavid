<?php

class Smartwave_Mango_Model_System_Config_Source_Design_Font_Style_Basic
{
    public function toOptionArray()
    {
		return array(
            array('value' => '0',    'label' => Mage::helper('mango')->__('Default')),
            array('value' => 'normal',    'label' => Mage::helper('mango')->__('Normal')),
            array('value' => 'italic',    'label' => Mage::helper('mango')->__('Italic'))
        );
    }
}