<?php
/**
 * 自定义视图模型
 * @author wg
 * @version 2013.07.03
 */
namespace Dw\View\Model;
class ViewModel extends \Zend\View\Model\ViewModel{
	public function __construct($template = null, $variables = null, $options = null){
		parent::__construct($variables = null, $options = null);
		
		if ($template) {
			$this->setTemplate($template);
		}else{
			
		}
	}
}
