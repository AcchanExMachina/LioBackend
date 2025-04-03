<?php
namespace App\Controller;

use App\Repository\ArtworkRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/artwork')]
class ArtworkController extends AbstractController
{
    #[Route('/list')]
    public function list(ArtworkRepository $artworkRepository): Response
    {
        var_dump($artworkRepository->findAll());

        return new Response();
    }
}
