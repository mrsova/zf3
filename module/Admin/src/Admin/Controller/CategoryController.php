<?php
/**
 * Created by PhpStorm.
 * User: webmaster
 * Date: 28.04.2018
 * Time: 15:29
 */

namespace Admin\Controller;


use Zend\Mvc\Controller\AbstractActionController;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\ServiceManager\ServiceManager;
use Zend\View\Model\ViewModel;

class CategoryController extends AbstractActionController
{
    private $_objectManager;

    public function __construct(\Doctrine\ORM\EntityManager $object)
    {
        $this->_objectManager = $object;
    }

    public function indexAction()
    {
        print_r($this->_objectManager);

    }
}