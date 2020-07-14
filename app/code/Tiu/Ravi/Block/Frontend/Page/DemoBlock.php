<?php
namespace Tiu\Ravi\Block\Frontend\Page;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\Variable\Model\VariableFactory;

class DemoBlock extends Template
{
    public function __construct(
        VariableFactory $varFactory,
        Context $context)
    {
        $this->_varFactory = $varFactory;
        parent::__construct($context);
        //print_r($this->getData()); exit;
    }

    public function getVariableValue($code =null) {
        $var = $this->_varFactory->create();
        $var->loadByCode($code);
        return $var->getValue('html');
    }


}