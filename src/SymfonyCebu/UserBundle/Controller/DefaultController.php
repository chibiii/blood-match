<?php

namespace SymfonyCebu\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SymfonyCebuUserBundle:Default:index.html.twig');
    }
}
