<?php

namespace Bloodmatch\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BloodmatchUserBundle:Default:index.html.twig');
    }
}
