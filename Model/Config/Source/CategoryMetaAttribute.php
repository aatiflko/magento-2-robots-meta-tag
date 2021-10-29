<?php

/**
 * @copyright (c) 2021, Neosoft Technologies
 *
 */

namespace Neo\RobotsMetaTag\Model\Config\Source;

class CategoryMetaAttribute extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource {

    protected $_helper;

    /**
     * 
     * @param \Neo\RobotsMetaTag\Helper\Data $helper
     */
    public function __construct(\Neo\RobotsMetaTag\Helper\Data $helper) {
        $this->_helper = $helper;
    }

    /**
     * Return category meta options
     *
     * @return array
     */
    public function getAllOptions() {
        $categoryMetaOptions = $this->_helper->categoryMetaOPtions();
        $categoryMetaOptions = explode(',', $categoryMetaOptions);

        $categoryAttribute = [];
        $dropdown = array();
        if (count($categoryMetaOptions) > 0) {
            foreach ($categoryMetaOptions as $option) {
                $categoryAttribute['label'] = $option;
                $categoryAttribute['value'] = $option;
                $dropdown[] = $categoryAttribute;
            }
        }
        return $dropdown;
    }

}
