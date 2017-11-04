<?php

namespace Kolomiets\MyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('KolomietsMyBundle:Default:index.html.twig');
    }
}
