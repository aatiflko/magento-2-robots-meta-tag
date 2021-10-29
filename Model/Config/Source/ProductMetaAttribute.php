<?php

/**
 * @copyright (c) 2021, Neosoft Technologies
 *
 */

namespace Neo\RobotsMetaTag\Model\Config\Source;

class ProductMetaAttribute extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource {

    protected $_helper;
    
    /**
     * 
     * @param \Neo\RobotsMetaTag\Helper\Data $helper
     */

    public function __construct(\Neo\RobotsMetaTag\Helper\Data $helper) {
        $this->_helper = $helper;
    }

    /**
     * Return product meta options
     *
     * @return array
     */
    public function getAllOptions() {
        $productMetaOptions = $this->_helper->ProductMetaOptions();
        $productMetaOptions = explode(',', $productMetaOptions);

        $productAttribute = [];
        $dropdown = array();
        if (count($productMetaOptions) > 0) {
            foreach ($productMetaOptions as $option) {
                $productAttribute['label'] = $option;
                $productAttribute['value'] = $option;
                $dropdown[] = $productAttribute;
            }
        }
        return $dropdown;
    }

}
