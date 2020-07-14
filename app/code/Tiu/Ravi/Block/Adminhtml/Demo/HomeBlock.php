<?php
namespace Tiu\Ravi\Block\Adminhtml\Demo;
use Magento\Backend\Block\Template;

class HomeBlock extends Template
{

    public function greet()
    {
        return 'Hello world';
    }

}