<?php
namespace Tiu\Ravi\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class TiuRaviTopics extends AbstractDb
{
    public function _construct()
    {
        $this->_init("tiu_ravi_topics", "id");
    }
}
