<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;   
use Symfony\Component\Routing\Attribute\Route;
class AdminController extends AbstractController{

    //templates: admin/admin_add_film.html.twig, admin/admin_users.html.twig, admin/admin_films.html.twig, admin/admin.html.twig
    
    #[Route(path: '/admin/add', name:'page_admin_add')]
    public function admin_add(){    
        return $this->render('admin/admin_add_films.html.twig');
    }
    #[Route(path:'/admin/users', name:'page_admin_users')]
    public function admin_users(){
        return $this->render('admin/admin_users.html.twig');
    }
    #[Route(path:'/admin/admin', name:'page_admin')]
    public function admin(){
        return $this->render('admin/admin.html.twig');
    }
    #[Route(path:'/admin/films', name:'page_admin_films')]
    public function admin_films(){  
        return $this->render('admin/admin_films.html.twig');
    }   
}