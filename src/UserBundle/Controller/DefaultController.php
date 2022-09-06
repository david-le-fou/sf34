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
            return $this->redirectToRoute('liste_usr');
        }

        $formView = $form->createView();
        return $this->render('@User/adduser.html.twig',array('form'=>$formView));
    }
    public function showAction(){
        $doctrine = $this->getDoctrine()->getManager();
        $repository = $doctrine->getRepository('UserBundle:User');
        $data = $repository->findAll();
        return $this->render('@User/listeuser.html.twig',array('data'=>$data));
    }
    public function deleteAction($id){
        $doctrine = $this->getDoctrine();
        $manager = $doctrine->getManager();
        $repository = $manager->getRepository('UserBundle:User');
        $id = $repository->find($id);
        $manager->remove($id);
        $manager->flush($id);
            return $this->redirectToRoute('liste_usr');
    }
    public function updateAction($id){
        return new Response('mise à jour ');
    }
}
