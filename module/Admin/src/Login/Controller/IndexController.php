<?php
namespace Admin\Login\Controller;

use Dw\Mvc\Controller\AbstractActionController;
use Dw\View\Model\ViewModel;
use Zend\View\View;

class IndexController extends AbstractActionController
{
	public function indexAction()
	{
		$view		= new ViewModel();
		//$view->setTemplate('admin\login\index\index.phtml');
		return $view;
	}
}