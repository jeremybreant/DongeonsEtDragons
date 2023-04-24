<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SyndicatsController extends AbstractController
{
    #[Route('/syndicats', name: 'app_syndicats_index')]
    public function index(): Response
    {
        return $this->render('pages/syndicats/index.html.twig', [
            'controller_name' => 'SyndicatsController',
        ]);
    }

    #[Route('/syndicats/caster', name: 'app_syndicats_caster')]
    public function caster(): Response
    {
        return $this->render('pages/syndicats/caster.html.twig', [
            'controller_name' => 'SyndicatsController',
        ]);
    }

    #[Route('/syndicats/cac', name: 'app_syndicats_cac')]
    public function cac(): Response
    {
        return $this->render('pages/syndicats/cac.html.twig', [
            'controller_name' => 'SyndicatsController',
        ]);
    }

    #[Route('/syndicats/revendications', name: 'app_syndicats_revendication')]
    public function revendications(): Response
    {
        return $this->render('pages/syndicats/revendication.html.twig', [
            'controller_name' => 'SyndicatsController',
        ]);
    }
}
