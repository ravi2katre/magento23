<?php
namespace Tiu\Ravi\Plugin;

/**
 * Class AddDataToOrdersGrid
 */
class AddDataToGrid
{
    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;

    /**
     * AddDataToOrdersGrid constructor.
     *
     * @param \Psr\Log\LoggerInterface $customLogger
     * @param array $data
     */
    public function __construct(
        \Psr\Log\LoggerInterface $customLogger,
        array $data = []
    ) {
        $this->logger   = $customLogger;
    }

    /**
     * @param \Magento\Framework\View\Element\UiComponent\DataProvider\CollectionFactory $subject
     * @param \Tiu\Ravi\Model\ResourceModel\TiuRaviTopics\Collection\Collection $collection
     * @param $requestName
     * @return mixed
     */
    public function afterGetReport($subject, $collection, $requestName)
    {
        if ($requestName == 'ravi_listing_listindex_data_source') {
            
        //echo $collection->getMainTable(); exit;
        //if ($collection->getMainTable() === $collection->getResource()->getTable('sales_order_grid')) {
            try {
                $secondTable = $collection->getResource()->getTable('admin_user');
                //$directoryCountryRegionTableName = $collection->getResource()->getTable('directory_country_region');
                $collection->getSelect()->joinLeft(
                    ['au' => $secondTable],
                    'au.user_id = 1',
                    '*'
                    
                );
                /*$collection->getSelect()->joinLeft(
                    ['dcrt' => $directoryCountryRegionTableName],
                    'soa.region_id = dcrt.region_id',
                    ['code']
                );*/
            } catch (\Zend_Db_Select_Exception $selectException) {
                // Do nothing in that case
                $this->logger->log(100, $selectException);
            }
        //}

            return $collection;
        }else{
            return $collection;
        }
    }
}