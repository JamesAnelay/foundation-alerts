<?php
class Webtise_FoundationAlerts_Block_Core_Messages extends Mage_Core_Block_Messages
{
    public function _prepareLayout()
    {
        $this->addMessages(Mage::getSingleton('core/session')->getMessages(true));
        $this->setTemplate('webtise/foundation/messages.phtml');
        return $this;
    }

    public function getMessageTypes()
    {

        $types = array(
            Mage_Core_Model_Message::ERROR,
            Mage_Core_Model_Message::WARNING,
            Mage_Core_Model_Message::NOTICE,
            Mage_Core_Model_Message::SUCCESS
        );

        return $types;
    }

    /**
     * Render block HTML
     *
     * @return string
     */
    protected function _toHtml()
    {
            //This is just for test/styleing uncomment to generate alerts
            //Mage::getSingleton('core/session')->addNotice('Notice message');
            //Mage::getSingleton('core/session')->addSuccess('Success message');
            //Mage::getSingleton('core/session')->addError('Error message');
        if (!$this->getTemplate()) {
            return '';
        }
        $html = $this->renderView();
        return $html;
    }

    public function getGroupedHtml(){
        return $this->_toHtml();
    }

}

