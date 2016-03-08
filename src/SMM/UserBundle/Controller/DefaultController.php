<?php

namespace SMM\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SMMUserBundle:Default:index.html.twig');
    }
}
