<?php

namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HelloController extends Controller {
	
public function indexAction()
    {
        return $this->render (
                'AcmeHelloBundle:Hello:index.html.twig');
    }

}


?>