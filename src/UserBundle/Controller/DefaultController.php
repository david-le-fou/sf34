<?php

namespace UserBundle\Controller;
use UserBundle\Entity\User;
use UserBundle\Form\UserType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@User/Default/index.html.twig');
    }
    public function addAction(Request $request){
        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) { 
           $doct = $this->getDoctrine()->getManager();
            $doct->persist($user);
            $doct->flush();
            return new Response('ok ajouter');
        }
        $formView = $form->createView();
        return $this->render('@User/adduser.html.twig',array('form'=>$formView));
    }
}
