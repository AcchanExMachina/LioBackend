<?php
namespace App\Controller;

use App\Entity\Artwork;
use App\Service\ArtworkService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;

#[Route('/artwork')]
class ArtworkController extends AbstractController
{
    #[Route('/list')]
    public function list(SerializerInterface $serializer, ArtworkService $artworkService): Response
    {
        $jsonContent = $serializer->serialize($artworkService->getAll(), 'json');
        
        return JsonResponse::fromJsonString($jsonContent);
    }
}
