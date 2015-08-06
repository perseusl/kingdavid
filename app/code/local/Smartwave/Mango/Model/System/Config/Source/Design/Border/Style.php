<?php

class Smartwave_Mango_Model_System_Config_Source_Design_Border_Style
{
    public function toOptionArray()
    {
		return array(
			array('value' => 'none', 'label' => Mage::helper('mango')->__('none')),
			array('value' => 'hidden', 'label' => Mage::helper('mango')->__('hidden')),
            array('value' => 'dotted', 'label' => Mage::helper('mango')->__('dotted')),
            array('value' => 'dashed', 'label' => Mage::helper('mango')->__('dashed')),
            array('value' => 'solid', 'label' => Mage::helper('mango')->__('solid')),
            array('value' => 'double', 'label' => Mage::helper('mango')->__('double')),
            array('value' => 'groove', 'label' => Mage::helper('mango')->__('groove')),
            array('value' => 'ridge', 'label' => Mage::helper('mango')->__('ridge')),
            array('value' => 'inset', 'label' => Mage::helper('mango')->__('inset')),
            array('value' => 'outset', 'label' => Mage::helper('mango')->__('outset')),
            array('value' => 'initial', 'label' => Mage::helper('mango')->__('initial')),
            array('value' => 'inherit', 'label' => Mage::helper('mango')->__('inherit'))
        );
    }
}