<?php
/**
 * Created by PhpStorm.
 * User: jamesanelay
 * Date: 27/06/2014
 * Time: 22:05
 */ 
class Webtise_FoundationAlerts_Helper_Data extends Mage_Core_Helper_Abstract {

    public function isAdmin()
    {
        if(Mage::app()->getStore()->isAdmin())
        {
            return true;
        }

        if(Mage::getDesign()->getArea() == 'adminhtml')
        {
            return true;
        }

        return false;
    }

}