<?php
namespace Admin\System\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class TaskController extends AbstractActionController
{
	public function indexAction()
	{
		echo 'Task';exit();
		return new ViewModel();
	}
}