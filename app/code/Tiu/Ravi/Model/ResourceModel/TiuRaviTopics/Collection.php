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

    protected function _initSelect()
    {
        parent::_initSelect();

        $object = $this->getSelect()->joinLeft(
                ['au' => $this->getTable('admin_user')],
                'au.user_id = 1',
                ['firstname' => 'firstname']
            )->group('main_table.id');
            
        $this->addFilterToMap('firstname', 'au.firstname');
            

//var_dump($this->getSelect()->__toString()); exit;
        //$this->addFilterToMap('name', 'au.firstname');
        //$this->addFilterToMap('name2', 'au.lastname');
        return $this;
    }

    protected function _renderFiltersBefore() {
        $this->getSelect()->joinLeft(
            ['au' => $this->getTable('admin_user')],
            'au.user_id = 1',
            ['firstname' => 'firstname']
        );
        parent::_renderFiltersBefore();
        return $this;
    }
    
}
