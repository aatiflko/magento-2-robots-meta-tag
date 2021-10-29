<?php

namespace Neo\RobotsMetaTag\Setup;

use Magento\Eav\Setup\EavSetup;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface {

    /**
     * EAV setup factory
     *
     * @var EavSetupFactory
     */
    private $eavSetupFactory;

    /**
     * Init
     *
     * @param EavSetupFactory $eavSetupFactory
     */
    public function __construct(EavSetupFactory $eavSetupFactory) {
        $this->eavSetupFactory = $eavSetupFactory;
    }

    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context) {
        $eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
        /* @var EavSetup $eavSetup /

        /**
         * Add attributes to the eav/attribute
         */
        $eavSetup->addAttribute(
                \Magento\Catalog\Model\Product::ENTITY, 'pro_search_engine_robots',
                [
                    'type' => 'varchar',
                    'group' => 'Search Engine Optimization',
                    'backend' => '',
                    'frontend' => '',
                    'label' => 'Search Engine Robots',
                    'input' => 'select',
                    'class' => '',
                    'source' => 'Neo\RobotsMetaTag\Model\Config\Source\ProductMetaAttribute',
                    'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
                    'visible' => true,
                    'required' => false,
                    'user_defined' => false,
                    'default' => 0,
                    'searchable' => false,
                    'filterable' => false,
                    'comparable' => false,
                    'visible_on_front' => false,
                    'used_in_product_listing' => true,
                    'unique' => false
                ]
        );
        
        /**
         * Add attributes to the eav/attribute
         */

        $eavSetup->addAttribute(
                \Magento\Catalog\Model\Category::ENTITY,
                'cat_search_engine_robots',
                [
                    'type' => 'varchar',
                    'group' => 'Search Engine Optimization',
                    'label' => 'Search Engine Robots',
                    'input' => 'select',
                    'sort_order' => 100,
                    'source' => 'Neo\RobotsMetaTag\Model\Config\Source\CategoryMetaAttribute',
                    'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
                    'visible' => true,
                    'required' => false,
                    'user_defined' => false,
                    'default' => null,
                    'backend' => ''
                ]
        );
    }

}
