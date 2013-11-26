<?php

namespace Symwow\Bundles\DefaultBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symwow\Bundles\DefaultBundle\Form\Type\RegistrationType;
use Symwow\Bundles\DefaultBundle\Form\Model\Registration;

class AccountController extends Controller
{
    public function registerAction()
    {
        $registration = new Registration();
        $form = $this->createForm(new RegistrationType(), $registration, array(
            'action' => $this->generateUrl('symwow_account_create'),
        ));

        return $this->render(
            'SymwowBundlesDefaultBundle:Account:register.html.twig',
            array('form' => $form->createView())
        );
    }

    public function createAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(new RegistrationType(), new Registration());

        $form->handleRequest($request);

        if ($form->isValid()) {
            $registration = $form->getData();

            $registration->getAccount()->setShapasshash(SHA1(strtoupper($registration->getAccount()->getUsername()).':'.strtoupper($registration->getAccount()->getShapasshash())))
                ->setSessionkey(false)
                ->setTokenkey("")
                ->setJoindate(new \DateTime("now"))
                ->setLastip($_SERVER['REMOTE_ADDR'])
                ->setFailedlogins(0)
                ->setLocked(false)
                ->setLockcountry(false)
                ->setLastlogin(new \DateTime("now"))
                ->setOnline(false)
                ->setExpansion(1)
                ->setMutetime(0)
                ->setMutereason("")
                ->setMuteby("")
                ->setLocale("")
                ->setOs("")
                ->setRecruiter("");
            $em->persist($registration->getAccount());
            $em->flush();
            echo "DONE REGI SUCCESFULL";
            //return $this->redirect();
        }

        return $this->render(
            'SymwowBundlesDefaultBundle:Account:register.html.twig',
            array('form' => $form->createView())
        );
    }
}