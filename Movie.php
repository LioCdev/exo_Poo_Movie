<?php

class Movie 
{
    private string $title;
    private int $releaseDate;
    private array $actors;
    private bool $favorite;

    public function __construct(string $title, int $releaseDate, bool $favorite)
    {
        $this->title = $title;  //A quoi ça sert puisque déjà fait plus haut ou quelle différence il y a?
        $this->date = $releaseDate; //idem
        $this->favorite = $favorite; //idem
        $this->actors = [];
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void //pourquoi void et pas string?
    {
        $this->title = $title;
    }

    public function addActor(string $actor): void //pourquoi void et pas string?
    {
        $this->actors[] = $actor;
    }

    public function getActor(): array
    {
        return $this->actors;
    }

    public function setFav(bool $favorite): void
    {
        $this->favorite = $favorite;
    }

    public function getFav(): bool
    {
        return $this->favorite;
    }

    public function toggleFavorite(): bool
    {
        if ($this->favorite === true) {
            return $this->favorite = false;
        } else {
            return $this->favorite = true;
        }
    }

    public function getDate(): int
    {
        return $this->date;
    }
    
    public function setDate(int $releaseDate): void
    {
        $this->date = $releaseDate;
    }

    public function isRecent(): bool
    {
        if ($this->date >= 2000){
            return true;
        } else {
            return false;
        }
    }
}
