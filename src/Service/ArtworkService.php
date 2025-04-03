<?php

namespace App\Service;

use App\Repository\ArtworkRepository;

class ArtworkService
{
    public function __construct(private readonly ArtworkRepository $artworkRepository) 
    {}

    public function getAll(): array
    {
        return $this->artworkRepository->findAll();
    }    
}