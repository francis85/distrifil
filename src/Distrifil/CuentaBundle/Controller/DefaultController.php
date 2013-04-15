<?php

namespace Distrifil\CuentaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("distrifil/")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}
