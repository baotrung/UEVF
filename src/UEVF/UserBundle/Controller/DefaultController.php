<?php

namespace UEVF\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use UEVF\UserBundle\Entity\User;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UEVFUserBundle:Default:index.html.twig');
    }

    public function createDumpAction(){
        $user = new User();
        $user->setUsername("dump_user");
        $user->setEmail("test@test");
        $user->setSalt("azerty");
        $user->setPassword("qwerty");
        $user->setRoles(array('ROLE_USER'));

        $manager = $this->getDoctrine()->getManager();
        $manager->persist($user);
        $manager->flush();

        return $this->render('UEVFUserBundle:Default:index.html.twig');
    }
}
