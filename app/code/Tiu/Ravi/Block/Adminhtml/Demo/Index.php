<?php
namespace Vendor\Module\Block\Adminhtml\demo;
use Magento\Backend\Block\Template;

class Index extends Template
{

    public function greet()
    {
        return 'Hello world';
    }

}