<?php

class Smartwave_Mango_Model_System_Config_Source_Setting_General_Layout
{
    public function toOptionArray()
    {
        return array(
            array('value' => '0', 'label' => Mage::helper('mango')->__('1170px')),
            array('value' => 'full_width', 'label' => Mage::helper('mango')->__('Full Width'))
        );
    }
}