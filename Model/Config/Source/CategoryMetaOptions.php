<?php

/**
 * @copyright (c) 2021, Neosoft Technologies
 *
 */

namespace Neo\RobotsMetaTag\Model\Config\Source;

class CategoryMetaOptions extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource {

    /**
     * Return category meta options for configuration field
     *
     * @return array
     */
    public function getAllOptions() {
        $this->_options = [
            ['label' => __('NOINDEX'), 'value' => 'NOINDEX'],
            ['label' => __('NOFOLLOW / NOINDEX'), 'value' => 'NOFOLLOW / NOINDEX'],
            ['label' => __('FOLLOW / INDEX'), 'value' => 'FOLLOW / INDEX'],
            ['label' => __('NOFOLLOW / INDEX'), 'value' => 'NOFOLLOW / INDEX'],
            ['label' => __('FOLLOW'), 'value' => 'FOLLOW']
        ];

        return $this->_options;
    }

}
