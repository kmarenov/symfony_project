<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class LuckyController
{
    /**
     * @Route("/lucky/number", name="lucky")
     */
    public function numberAction()
    {
        $number = rand(1,100);

        return new Response('<html><body>Lucky number: '.$number.'</body></html>');
    }
}
