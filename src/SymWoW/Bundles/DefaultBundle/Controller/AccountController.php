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

            $registration->getAccount()->setShapasshash(SHA1(strtoupper($registration->getAccount()->getUsername()).':'.strtoupper($registration->getAccount()->getShapasshash())));
            $registration->getAccount()->setSessionkey(false);
            $registration->getAccount()->setTokenkey("");
            $registration->getAccount()->setJoindate(new \DateTime("now"));
            $registration->getAccount()->setLastip($_SERVER['REMOTE_ADDR']);
            $registration->getAccount()->setFailedlogins(0);
            $registration->getAccount()->setLocked(false);
            $registration->getAccount()->setLockcountry(false);
            $registration->getAccount()->setLastlogin(new \DateTime("now"));
            $registration->getAccount()->setOnline(false);
            $registration->getAccount()->setExpansion(1);
            $registration->getAccount()->setMutetime(0);
            $registration->getAccount()->setMutereason("");
            $registration->getAccount()->setMuteby("");
            $registration->getAccount()->setLocale("");
            $registration->getAccount()->setOs("");
            $registration->getAccount()->setRecruiter("");
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