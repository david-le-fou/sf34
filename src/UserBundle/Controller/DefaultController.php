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
        return $this->render('@User/adduser.html.twig',array('edit_form'=>$formView));
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
    public function updateAction(Request $request, $id){
        $doctrine = $this->getDoctrine();
        $manager = $doctrine->getManager();
        $repository = $manager->getRepository('UserBundle:User');
        $data = $repository->findOneBy(array('id'=>$id));

        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) { 
            $post = $_POST['userbundle_user'];
            $data->setNom($post['nom']);
            $data->setLogin($post['login']);
            $data->setPass($post['pass']);
            $data->setAdress($post['adress']);
           
            $manager->flush();
            return $this->redirectToRoute('liste_usr');
        }

        $formView = $form->createView();
        return $this->render('@User/edit.html.twig',array('form'=>$formView,'user'=>$data));
    }
}
