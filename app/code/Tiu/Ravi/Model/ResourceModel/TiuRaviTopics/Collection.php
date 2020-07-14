<?php
namespace Tiu\Ravi\Model\ResourceModel\TiuRaviTopics;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    public function _construct()
    {
        $this->_init(
            "Tiu\Ravi\Model\TiuRaviTopics",
            "Tiu\Ravi\Model\ResourceModel\TiuRaviTopics"
        );
    }
}
