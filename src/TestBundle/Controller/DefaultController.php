<?php

namespace TestBundle\Controller;
use TestBundle\Entity\table1;
use TestBundle\Entity\table2;
use TestBundle\Entity\table3;
use TestBundle\Entity\table4;
use TestBundle\Entity\table5;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $t1 = new table1();
        $t1 ->setNom('enjana');
        $t1 ->setNom2('test');

        $t2 = new table2();
        $t2 ->setNom('xxxx');
        $t2 ->setT1('ssss');
        $t2 ->setNom2('ssss');
        $t2 ->setIdT1($t1);
        dump($t2);

        $em = $this->getDoctrine()->getManager();
        $em->persist($t2);
        $em->flush();
        return $this->render('@Test/Default/index.html.twig');
    }
    
    public function ManytooneAction()
    {
        $t1 = new table1();
        $t1->setNom('testmanyone');
        $t1->setNom2('test test');

        $t3 = new table3();
        $t3->setNom('ito e');
        $t3->setIdT1($t1);

        $t3_ = new table3();
        $t3_->setNom('xxxxxx');
        $t3_->setIdT1($t1);

        $em = $this->getDoctrine()->getManager();

        $em->persist($t1);
        $em->persist($t3);
        $em->persist($t3_);

        $em->flush();
        return $this->render('@Test/Default/index.html.twig');
    }
   
    public function Manytoone2Action()
    {
        $em = $this->getDoctrine()->getManager()->getRepository('TestBundle:table3');
        $t3 = $em->findOneBy(['id' => 1]);
        $t4 = new table4();
        $t4->setNom('test');
        $t4->setIdT3($t3);

        $em = $this->getDoctrine()->getManager();
        
        $em->persist($t4);
        $em->flush();

        return $this->render('@Test/Default/index.html.twig');
    }
   
    public function Manytoone3Action()
    {
        $em = $this->getDoctrine()->getManager();
        $reapro = $em->getRepository('TestBundle:table1');
        $t1 = $reapro->findOneBy(['id' => 9]);

        $t5 = new table5();
        $t5->setNom('test');
        $t5->setIdT1($t1);


        $em->persist($t5);
        $em->flush();

        return $this->render('@Test/Default/index.html.twig');
    }
}
