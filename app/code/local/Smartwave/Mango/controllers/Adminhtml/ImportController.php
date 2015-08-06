<?php 
    class Smartwave_Mango_Adminhtml_ImportController extends Mage_Adminhtml_Controller_Action{ 
        public function indexAction() {
            $this->getResponse()->setRedirect($this->getUrl("adminhtml/system_config/edit/section/mango_settings/"));
        }
        public function blocksAction() {
            $isoverwrite = Mage::helper('mango')->getCfg('install/overwrite_blocks');
            Mage::getSingleton('mango/import_cms')->importCms('cms/block', 'blocks', $isoverwrite);
            $this->getResponse()->setRedirect($this->getUrl("adminhtml/system_config/edit/section/mango_settings/"));
        }
        public function pagesAction() {
            $isoverwrite = Mage::helper('mango')->getCfg('install/overwrite_pages');
            Mage::getSingleton('mango/import_cms')->importCms('cms/page', 'pages', $isoverwrite);
            $this->getResponse()->setRedirect($this->getUrl("adminhtml/system_config/edit/section/mango_settings/")); 
        }
    }
?>