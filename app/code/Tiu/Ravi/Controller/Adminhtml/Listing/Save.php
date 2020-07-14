<?php

namespace Tiu\Ravi\Controller\Adminhtml\Listing;
use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Tiu\Ravi\Model\TiuRaviTopicsFactory;
class Save extends Action
{
    
    var $gridFactory;

    public function __construct(
        Context $context,
        TiuRaviTopicsFactory $TiuRaviTopicsFactory
    ) {
        parent::__construct($context);
        $this->gridFactory = $TiuRaviTopicsFactory;
    }

    /**
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     * @SuppressWarnings(PHPMD.NPathComplexity)
     */
    public function execute()
    {
        $data = $this->getRequest()->getPostValue();
        //print_r($data); exit;
        if (!$data) {
            $this->_redirect('ravi/listing/addrow');
            return;
        }
        try {
            $rowData = $this->gridFactory->create();
            $rowData->setData($data);
            if (isset($data['id'])) {
                $rowData->setEntityId($data['id']);
            }
            $rowData->save();
            $this->messageManager->addSuccess(__('Row data has been successfully saved.'));
        } catch (\Exception $e) {
            $this->messageManager->addError(__($e->getMessage()));
        }
        $this->_redirect('ravi/listing/listindex');
    }

    /**
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Tiu_Ravi::save');
    }
}