<?php

namespace App\Service;

use App\Entity\Artwork;
use App\Repository\ArtworkRepository;

class ArtworkService
{
    public function __construct(private readonly ArtworkRepository $artworkRepository) 
    {}

    public function getAll(): array
    {
        return $this->artworkRepository->findAll();
    }

    public function getOne(string $id): Artwork
    {
        return $this->artworkRepository->find($id);
    }
}