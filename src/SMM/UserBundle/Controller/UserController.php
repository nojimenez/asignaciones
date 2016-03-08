<?php

namespace SMM\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class UserController extends Controller
{
    public function indexAction()
    {
        $sm    = $this->getDoctrine()->getManager();
        $users = $sm->getRepository('SMMUserBundle:User')->findAll();
        
        /* SIN PLANTILLA
        $res   = 'Lista de usuarios: <br />';
        
        foreach($users as $user)
            {
                $res .= 'Usuario: '.$user->getUsername() . ' Email:'.$user-> getEmail().'<br/>';
            }
            
        return new Response($res) ;  */
        
        return $this->render('SMMUserBundle:User:index.html.twig',array('users' => $users));
        
    }
    
    public function viewAction($id)
    {
        $repository = $this->getDoctrine()->getRepository('SMMUserBundle:User');
        $user=$repository->find($id);
        return new Response('Usuario: ' . $user->getUsername().' Con email: '.$user->getEmail()); 
    }
}
