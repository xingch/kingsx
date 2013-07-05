<?php
/**
 * 自定义控制器类
 * @author wg
 * @version 2013.07.03
 */
namespace Dw\Mvc\Controller;

class AbstractActionController extends \Zend\Mvc\Controller\AbstractActionController{
	protected $templatePath	= '';
	public function __construct(){
		$this->getTempatePath();
	}
	
	public function getTempatePath(){
		if($this->templatePath == ''){

		}
		return $this->templatePath;
	}
}
