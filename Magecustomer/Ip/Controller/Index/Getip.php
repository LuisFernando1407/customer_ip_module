<?php

namespace Magecustomer\Ip\Controller\Index;

class Getip extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory){
        
        $this->_pageFactory = $pageFactory;
		return parent::__construct($context);
	}

	public function execute(){
        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/debug.log');
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->debug($this->getIpAddress() == "::1" ? "localhost" : $this->getIpAddress());
    }
    
    protected function getIpAddress(){
        $om = \Magento\Framework\App\ObjectManager::getInstance();
        $obj = $om->get('Magento\Framework\HTTP\PhpEnvironment\RemoteAddress');
        return $obj->getRemoteAddress();
    }
}