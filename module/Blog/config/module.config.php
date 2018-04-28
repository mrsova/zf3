<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Blog;

use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'doctrine' => [
        'driver' => [
            // defines an annotation driver with two paths, and names it `my_annotation_driver`
            'blog_entity' => [
                'class' => \Doctrine\ORM\Mapping\Driver\AnnotationDriver::class,
                'cache' => 'array',
                'paths' => [
                     __DIR__. '/../src/Blog/Entity',
                ],
            ],

            // default metadata driver, aggregates all other drivers into a single one.
            // Override `orm_default` only if you know what you're doing
            'orm_default' => [
                'drivers' => [
                    // register `my_annotation_driver` for any entity under namespace `My\Namespace`
                    'Blog\Entity' => 'blog_entity',
                ],
            ],
        ],
    ],

    'router' => [
        'routes' => [
            'blog' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/[:action/][:id/]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id' => '[0-9]+'
                    ],
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action'     => 'index'
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\IndexController::class => InvokableFactory::class,
        ],
    ],

    'view_manager' => [
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];
