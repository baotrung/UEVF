<?php

namespace UEVF\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UEVFCoreBundle:Default:index.html.twig');
    }
}
