<?php

namespace Kolomiets\MyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('KolomietsMyBundle:Default:index.html.twig');
    }

    public function helloAction()
    {
        return new Response('Hello!');
    }

    public function textAction($text)
    {
        if ($text == 'default') {
            return $this->forward('KolomietsMyBundle:Default:index');
        }

        return new Response($text);
    }

    public function summAction($number1, $number2)
    {
        return new Response($number1+$number2);
    }

    public function personalAction($name, $age)
    {
        $personalData = [
            'name' => $name,
            'age' => $age,
        ];

        return new JsonResponse($personalData);
    }
}
