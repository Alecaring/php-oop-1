<?php

class Genere {
    public string $titolo;
    public string $descrizione;
    public string $pathImg;

    public function __construct(string $titolo, string $descrizione, string $pathImg)
    {
        $this->titolo = $titolo;
        $this->descrizione = $descrizione;
        $this->pathImg = $pathImg;
    }
  
    function setTitle($titolo) {
        $this->titolo = $titolo;
    }
    function getTitle() {
        return $this->titolo;
    }
}