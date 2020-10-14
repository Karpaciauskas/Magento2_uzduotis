<?php
namespace Page\AdminProductText\Block;

use Magento\Framework\View\Element\Template\Context;

class ProductBlock extends \Magento\Framework\View\Element\Template
{
	protected $helperData;
	
	public function __construct(
	    Context $context,
		\Page\AdminProductText\Helper\Data $helperData)
	{
	    $this->helperData = $helperData;
	    parent::__construct($context);
	}

	public function getProductText(){
	    return $this->helperData->getGeneralConfig('display_text_product');
	}
}
?>
