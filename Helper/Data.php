<?php

/**
 * @copyright (c) 2021, Neosoft Technologies
 *
 */

namespace Neo\RobotsMetaTag\Helper;

use Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper {

    const IS_CATEGORY_META_OPTIONS = 'robotsmetatag/general/cat_metaoption';
    const PRODUCT_META_OPTIONS = 'robotsmetatag/general/pro_metaoption';
    const DEFAULT_PRODUCT_META = 'robotsmetatag/default/pro_metaoption';
    const DEFAULT_CATEGORY_META = 'robotsmetatag/default/pro_metaoption';

    protected $scopeConfig;
    
    /**
     * 
     * @param \Magento\Framework\App\Helper\Context $context
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     */

    public function __construct(
            \Magento\Framework\App\Helper\Context $context,
            \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
        parent::__construct($context);
    }
    /**
     * Return robot meta tag options of product.
     * @return type string
     */

    public function productMetaOPtions() {
        $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
        return $this->scopeConfig->getValue(self::PRODUCT_META_OPTIONS, $storeScope);
    }
    
    /**
     * Return robot meta tag options of category.
     * @return type string
     */

    public function categoryMetaOPtions() {
        $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
        return $this->scopeConfig->getValue(self::IS_CATEGORY_META_OPTIONS, $storeScope);
    }
    
    /**
     * Return defaul robot meta option of product.
     * @return type string
     */

    public function defaultProductRobotMeta() {
        $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
        return $this->scopeConfig->getValue(self::DEFAULT_PRODUCT_META, $storeScope);
    }
    
    /**
     * Return defaul robot meta option of category.
     * @return type string
     */

    public function defaultCategoryRobotMeta() {
        $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
        return $this->scopeConfig->getValue(self::DEFAULT_CATEGORY_META, $storeScope);
    }

}
