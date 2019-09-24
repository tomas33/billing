<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class LuckyController extends AbstractController
{
    public function __invoke()
    {

        return $this->render('base.html.twig');
    }
}