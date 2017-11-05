<?php

namespace Kolomiets\MyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;

class NewController extends Controller
{
    public function someAction()
    {
        return new Response('Some page with prefix in URL');
    }

    public function redirectAction()
    {
        return new RedirectResponse(
            $this->generateUrl(
            'kolomiets_my_default_string',
            [
                'number1' => 5,
                'number2' => 5,
            ]
            ),
            302
        );
    }
}
