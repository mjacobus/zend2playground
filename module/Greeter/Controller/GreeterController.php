<?php

namespace Greeter\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * @author Marcelo Jacobus <marcelo.jacobus@gmail.com>
 */
class GreeterController extends AbstractActionController
{
    public function indexAction()
    {

    }

    public function personalGreetingAction()
    {
        $name = $this->params()->fromRoute('name', 'there');

        return new ViewModel(array(
            'name' => $name
        ));
    }

    public function sayMyNameAction()
    {
        $name = $this->params()->fromPost('name');

        $this->redirect()->toRoute('personal_greeting', array(
            'name' => $name
        ));
    }
}
