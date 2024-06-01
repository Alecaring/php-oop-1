
<?php

require_once "movie.php";

class Film
{
    private string $img;
    private string $titolo;
    private string $descrizioneFilm;
    private string $regista;
    private string $anno;
    private Genere $genere;

    public function __construct(string $img, string $titolo, string $descrizioneFilm, string $regista, string $anno, Genere $genere)
    {
        $this->img = $img;
        $this->titolo = $titolo;
        $this->descrizioneFilm = $descrizioneFilm;
        $this->regista = $regista;
        $this->anno = $anno;
        $this->genere = $genere;
    }
  
    public function setImg($img) {
        $this->img = $img;
    }
    public function getimg() {
        return $this->img;
    }


    public function setTitle($titolo) {
        $this->titolo = $titolo;
    }
    public function getTitle() {
        return $this->titolo;
    }

    
    public function setDesc($descrizioneFilm) {
        $this->descrizioneFilm = $descrizioneFilm;
    }
    public function getDesc() {
        return $this->descrizioneFilm;
    }


    public function setRegista($regista) {
        $this->regista = $regista;
    }
    public function getRegista() {
        return $this->regista;
    }
    

    public function setAnno($anno) {
        $this->anno = $anno;
    }
    public function getAnno() {
        return $this->anno;
    }

    public function getGenere(): Genere {
        return $this->genere;
    }


    // public function setAnno($anno) {
    //     $this->anno = $anno;
    // }
    // public function getAnno() {
    //     return $this->anno;
    // }
}









