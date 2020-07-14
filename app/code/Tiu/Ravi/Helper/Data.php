<?php
namespace Tiu\Ravi\Helper;
use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;
class Data extends AbstractHelper
{
    public function getConfig($config_path)
    {
        $data =  $this->scopeConfig->getValue(
            $config_path,
            ScopeInterface::SCOPE_STORE
        );
        //print_r($data); exit;
        return $data;
    }

    function logit($log_file_name ='logit', $data=''){
        
       

        $ext = ".log";
        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/'.$log_file_name.$ext);
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);

         if(is_object($data)){
            $object = $data;
            ob_start();                    // start buffer capture
            var_dump( $object);           // dump the values
            $contents = ob_get_contents(); // put the buffer into a variable
            ob_end_clean();
        }elseif(is_array($data)){
            $contents = print_r($data, true);
        }else{
            $contents = $data;
        }

        $logger->info($contents);
    }
}