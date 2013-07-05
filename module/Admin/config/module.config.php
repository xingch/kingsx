<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return array(
    'router' => array(
        'routes' => array(
            'login' => array(
                'type'    => 'Segment',
                'options' => array(
                    'route'    => '/admin[/login[/:controller[/:action]]][/]',
                	'constraints' => array(
                		'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                		'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                	),
                    'defaults' => array(
                        '__NAMESPACE__' => 'Admin\Login\Controller',
                        'controller'    => 'Index',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(

                ),
            ),//end Login
            
            'system' => array(
            	'type'    => 'Segment',
            	'options' => array(
            		'route'    => '/admin/system[/:controller[/:action]][/]',
            		'constraints' => array(
            			'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            			'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
            		),
            		'defaults' => array(
            			'__NAMESPACE__' => 'Admin\System\Controller',
            			'controller'    => 'Task',
            			'action'        => 'index',
            		),
            	),
            	'may_terminate' => true,
            	'child_routes' => array(
					
            	),
            ),//end System
        ),
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ),
        'aliases' => array(
            'translator' => 'MvcTranslator',
        ),
    ),
    'translator' => array(
        'locale' => 'zh_CN',
        'translation_file_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Admin\System\Controller\Task' => 'Admin\System\Controller\TaskController',
            'Admin\Login\Controller\Index' => 'Admin\Login\Controller\IndexController',
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);
