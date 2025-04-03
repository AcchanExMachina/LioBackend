<?php
namespace App\Controller;

use App\Service\ArtworkService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/artwork')]
class ArtworkController extends AbstractController
{
    #[Route('/list')]
    public function list(ArtworkService $artworkService): Response
    {
        var_dump($artworkService->getAll());

        return new Response();
    }
}
