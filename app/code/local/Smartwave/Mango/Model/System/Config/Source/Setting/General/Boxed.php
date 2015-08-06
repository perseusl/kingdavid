<?php

class Smartwave_Mango_Model_System_Config_Source_Setting_General_Boxed
{
    public function toOptionArray()
    {
		return array(
			array('value' => 'wide', 'label' => Mage::helper('mango')->__('Wide (Default)')),
			array('value' => 'boxed', 'label' => Mage::helper('mango')->__('Boxed'))
        );
    }
}