<?php
namespace Page\AdminNoticeText\Block;

use Magento\Framework\View\Element\Template\Context;

class NoticeBlock extends \Magento\Framework\View\Element\Template
{
	protected $helperData;
	
	public function __construct(
	    Context $context,
		\Page\AdminNoticeText\Helper\Data $helperData)
	{
	    $this->helperData = $helperData;
	    parent::__construct($context);
	}

	public function getNoticeText(){
	    return $this->helperData->getGeneralConfig('display_text');
	}
	
}
?>
