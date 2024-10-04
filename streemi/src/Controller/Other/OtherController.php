<?php

namespace App\Controller\Other;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;


class OtherController extends AbstractController
{
    #[Route(path: '/other/abonnements', name: 'page_abonnements')]
    public function abonnements()
    {
        return $this->render('other/abonnements.html.twig');
    }

    #[Route(path:'/other/upload', name:'page_upload')]
    public function upload()    
    {
        return $this->render('other/upload.html.twig');
    }

}