<?php
namespace Tiu\Ravi\Observer;

use Tiu\Ravi\Helper\Data;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class CatalogBlockProductListCollection implements ObserverInterface
{
        
    var $dataHelper;
    function __construct(Data $helperData){
        $this->dataHelper = $helperData;
    }
    /**
     * @param Observer $observer
     * @return $this
     */
    public function execute(Observer $observer)
    {

        $collection = $observer->getEvent()->getData('collection');
        foreach ($collection as $k => $product){
            
           //print_r($product->toArray()); exit;
            // Here goes your code to modify product
            // For example:
            $newName = $product->getName().' (HOT SALE)';// just example guys
            $product->setName($newName);
            //$collection->addItem($product);// Add modified item to collection
            //$collection->removeItemByKey($k);// Remove original item from collection 
         }
         

        /*$myfile = fopen("var/log/debug.log", "a+") or die("Unable to open file!");
        fwrite($myfile, "ddddddddddddddd");
        fclose($myfile);*/
        //print_r($observer->getEvent()->getData('collection'));  
        //$comment = $this->getRequest()->getParams();
        /*$this->dataHelper->logit('eventfile',$observer->getEvent()->getData());
        var_dump($comment);
        echo "dfdsfdfdfdsfdsfdsfdsfdsfdsf"; exit;
        //$select = $observer->getSelect();*/
        //return $select->columns('image');
    }
}