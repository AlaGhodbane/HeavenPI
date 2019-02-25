<?php

namespace HeavenTNBundle\Controller;

use PubliciteBundle\Entity\Publicite;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use HeavenTNBundle\Repository\ReservationRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityRepository;

class DefaultController extends Controller
{
    public function indexAction()
    {     $em = $this->getDoctrine()->getManager();
        $numbers = range(1, 100);

        shuffle($numbers);
        $random_keys = array_rand($numbers, 4);

        $publicites=$em->getRepository('HeavenTNBundle:Reservation')->Trend();
        $publicites2=$em->getRepository('HeavenTNBundle:Reservation')->Trend2();
        $publicites3=$em->getRepository('HeavenTNBundle:Reservation')->Trend3();
        $publicites4=$em->getRepository('HeavenTNBundle:Reservation')->Trend4();
        $publicites5=$em->getRepository('HeavenTNBundle:Reservation')->Trend5();

//var_dump(shuffle($publicites));
        //$publicites = $em->getRepository('PubliciteBundle:Publicite')->findBy(array('idPub' =>$numbers,'etat' =>1),null,1);

        // $publicites = $em->getRepository('PubliciteBundle:Publicite')->find(2);

        shuffle($publicites);
        shuffle($publicites2);
        shuffle($publicites3);
        shuffle($publicites4);
        shuffle($publicites5);

        $pub=[];
        $pub0= new Publicite();
        $pub0->setImage('e9ebf79c12756cab8f3a5d8607135151.jpeg');
        $pub0->setDescription('Blank');
        $pub0->setNbClick(0);
        $pub0->setIdPub(0);
        $pub0->setText('Blank');
        $pub0->setTags('Tags here');

        array_push($pub,$pub0);

        if($publicites==null){$publicites=$pub;}
        if($publicites2==null){$publicites2=$pub;}
        if($publicites3==null){$publicites3=$pub;}
        if($publicites4==null){$publicites4=$pub;}
        if($publicites5==null){$publicites5=$pub;}
        return $this->render('@HeavenTN/Default/index.html.twig',[
            'publicites' => $publicites[0],
            'publicites2' => $publicites2[0],
            'publicites3' => $publicites3[0],
            'publicites4' => $publicites4[0],
            'publicites5' => $publicites5[0],
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }



}
