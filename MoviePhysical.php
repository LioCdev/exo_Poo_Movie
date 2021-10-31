<?php

require __DIR__ . '/Movie.php';

class MoviePhysical extends Movie
{
    private int $price = 0;
    private string $mediaType;
    const VAT = 0.2;

    public function __construct(string $title, int $releaseDate, bool $favorite, int $price, string $mediaType)
    {
        parent::__construct($title, $releaseDate, $favorite);
        $this->price = $price;
        $this->mediaType = $mediaType;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    public function getMediaType(): string
    {
        return $this->mediaType;
    }

    public function setMediaType(string $mediaType): void
    {
        $this->mediaType = $mediaType;
    }
    
    
    public function getPriceWithVAT(): int
    {
        return $this->price * (1 + self::VAT);
    }

}
