<?php

class Smartwave_Mango_Model_System_Config_Source_Setting_Category_Hovereffect
{
    public function toOptionArray()
    {
        return array(
            array('value' => '0', 'label' => 'None'),
            array('value' => 'gallery', 'label' => 'Product Image Gallery'),
            array('value' => 'alternative', 'label' => 'Alternative Image')
        );
    }
}