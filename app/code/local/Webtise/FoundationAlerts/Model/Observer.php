<?php
class Webtise_FoundationAlerts_Model_Observer
{
    /*
     * Only re-write on frontend
     * @credit to VinaiKopp - https://github.com/Vinai/VinaiKopp_JsMessages
     */
    public function controllerActionPredispatch(Varien_Event_Observer $event)
    {
        $helper = Mage::helper('webtise_foundationalerts');
        if (! $helper->isAdmin()) {
            Mage::getConfig()->setNode('global/blocks/core/rewrite/messages', 'Webtise_FoundationAlerts_Block_Core_Messages');
        }
    }
}