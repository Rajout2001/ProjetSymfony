<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController {

    #[Route(path: '/', name:'page_home')]
    public function home() {
        return $this->render('index.html.twig');
    
    }

}
