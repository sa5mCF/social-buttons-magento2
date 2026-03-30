<?php

namespace Core\SocialButtons\Model\ResourceModel\UrlShort;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            'Core\SocialButtons\Model\UrlShort',
            'Core\SocialButtons\Model\ResourceModel\UrlShort'
        );
    }
}