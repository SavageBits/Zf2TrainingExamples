<?php
/**
 * Created by PhpStorm.
 * User: mark.savage
 * Date: 2/10/14
 * Time: 10:20 AM
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Models\Helmet;

class HelmetWorldController extends AbstractActionController
{
    public function helmetWorldAction()
    {
        $helmet = new Helmet();

        return array('helmet_size'=>$helmet->size);
    }

    public function helloMyNameIsAction(){
        $name = $this->params()->fromRoute('name');
        return array('name'=>$name);
    }
}