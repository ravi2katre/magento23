<?php
/**
 * Tiu Ravi
 */
namespace Tiu\Ravi\Controller\Adminhtml\Demo;
use Magento\Backend\App\Action\Context;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;
use Magento\Backend\App\Action;
use Tiu\Ravi\Model\TiuRaviTopicsFactory;
use Magento\Framework\Controller\ResultFactory;
/**
 * Class Index
 */
class Index extends Action implements HttpGetActionInterface
{
    const MENU_ID = 'Tiu_Ravi::greetings_helloworld';
    protected $TiuRaviTopicsFactory;
    protected $resultRedirect;

    /**
     * @var PageFactory
     */
    protected $resultPageFactory;

    /**
     * Index constructor.
     *
     * @param Context $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
        TiuRaviTopicsFactory  $TiuRaviTopicsFactory,
        ResultFactory $result
    ) {
        parent::__construct($context);

        $this->resultPageFactory = $resultPageFactory;
        $this->TiuRaviTopicsFactory = $TiuRaviTopicsFactory;
        $this->resultRedirect = $result;
    }

    /**
     * Load the page defined in view/adminhtml/layout/exampleadminnewpage_helloworld_index.xml
     *
     * @return Page
     */
    public function execute()
    {
       
        
        $model = $this->TiuRaviTopicsFactory->create();
        
		$model->addData([
			"title" => 'Title 01',
			"content" => 'Content 01',
			"status" => true,
			"sort_order" => 1
			]);
        $saveData = $model->save();
        if($saveData){
            $this->messageManager->addSuccess( __('Insert Record Successfully !') );
        }

        $topicCollection = $model->getCollection(); 
        //echo "<pre>"; print_r($topicCollection->getdata());
		//return $resultRedirect;
	
        $resultPage = $this->resultPageFactory->create();
        //Set the menu which will be active for this page
        $resultPage->setActiveMenu('Tiu_Ravi::demo');
                
        //Set the header title of grid
        $resultPage->getConfig()->getTitle()->prepend(__('Manage Demo'));
        //Add bread crumb
        $resultPage->addBreadcrumb(__('Tiu'), __('Tiu'));
        $resultPage->addBreadcrumb(__('Demo'), __('Manage Demo'));

        
       
        return $resultPage;
    }
}
