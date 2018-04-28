<?php
/**
 * Created by PhpStorm.
 * User: webmaster
 * Date: 28.04.2018
 * Time: 16:17
 */

namespace Admin\Controller;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class IndexControllerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new CategoryController(
            $container->get(\Doctrine\ORM\EntityManager::class)
        );
    }
}