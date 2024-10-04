<?php

namespace App\Controller\Movie;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

class MovieController extends AbstractController
{
    #[Route(path: '/movie/category', name: 'page_category')]
    public function category()
    {
        return $this->render('movie/category.html.twig');
    }
    #[Route(path: '/movie/detail_serie', name: 'page_detail_serie')]
    public function detail_serie()  
    {
        return $this->render('movie/detail_serie.html.twig');
    }
    #[Route(path: '/movie/discover', name: 'page_discover')]
    public function discover()  
    {
        return $this->render('movie/discover.html.twig');
    }   
    #[Route(path: '/movie/lists', name: 'page_lists')]
    public function lists() 
    {
        return $this->render('movie/lists.html.twig');
    }
    #[Route(path: '/movie/detail', name: 'page_detail')]
    public function detail()  
    {
        return $this->render('movie/detail.html.twig');
    }
}