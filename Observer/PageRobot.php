<?php

/**
 * @copyright (c) 2021, Neosoft Technologies
 *
 */

namespace Neo\RobotsMetaTag\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\View\Page\Config as PageConfig;

class PageRobot implements ObserverInterface {

    private $pageConfig;
    protected $_registry;
    protected $_helper;

    /**
     * 
     * @param PageConfig $pageConfig
     * @param \Magento\Framework\Registry $registry
     * @param \Neo\RobotsMetaTag\Helper\Data $helper
     */
    public function __construct(
            PageConfig $pageConfig,
            \Magento\Framework\Registry $registry,
            \Neo\RobotsMetaTag\Helper\Data $helper
    ) {
        $this->pageConfig = $pageConfig;
        $this->_registry = $registry;
        $this->_helper = $helper;
    }

    /**
     * Set dynamic robot meta tag for different product and category.
     * 
     * @param Observer $observer
     */
    public function execute(Observer $observer) {
        $fullActionName = $observer->getEvent()->getData('full_action_name');

        if ($fullActionName === 'catalog_category_view') {
            $category = $this->getCurrentCategory();
            if ($category->getCatSearchEngineRobots() != '') {
                $this->pageConfig->setMetadata('robots', $category->getCatSearchEngineRobots());
            } else {
                $this->pageConfig->setMetadata('robots', $this->_helper->defaultCategoryRobotMeta());
            }
        }

        if ($fullActionName === 'catalog_product_view') {
            $product = $this->getCurrentProduct();
            if ($product->getProSearchEngineRobots() != '') {
                $this->pageConfig->setMetadata('robots', $product->getProSearchEngineRobots());
            } else {
                $this->pageConfig->setMetadata('robots', $this->_helper->defaultProductRobotMeta());
            }
        }
    }

    /**
     * Return catalog current category object
     *
     * @return \Magento\Catalog\Model\Category
     */
    public function getCurrentCategory() {
        return $this->_registry->registry('current_category');
    }

    /**
     * Return catalog product object
     *
     * @return \Magento\Catalog\Model\Product
     */
    public function getCurrentProduct() {
        return $this->_registry->registry('current_product');
    }

}
