<?php

namespace Incolab\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('IncolabCoreBundle:Default:index.html.twig');
    }
}
