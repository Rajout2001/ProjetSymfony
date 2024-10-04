<?php

namespace App\Controller\Auth;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

class AuthController extends AbstractController{

    #[Route(path: '/login', name:'page_login')]
    public function login(){
        return $this->render('auth/login.html.twig');
    }
    
    #[Route(path:'/forgot',  name:'page_forgot')]
    public function forgot(){     
        return $this->render('auth/forgot.html.twig');
    }
    #[Route(path:'/register',name:'page_register')]
    public function register(){    
        return $this->render('auth/register.html.twig');
    }  
    
    #[Route(path:'/reset', name:'page_reset')]
    public function reset(Request $request){    
        return $this->render('auth/reset.html.twig');
    }   
    #[Route(path:'/confirm', name:'page_confirm')]
    public function confirm(Request $request){  
        return $this->render('auth/confirm.html.twig');
    }   
    
}