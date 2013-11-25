<?php

namespace Symwow\Bundles\DefaultBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SymwowBundlesDefaultBundle:Default:index.html.twig', array('name' => $name));
    }
}
