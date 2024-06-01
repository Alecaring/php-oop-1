<?php

class Genere
{
    private string $nome;
    private string $descrizione;

    public function __construct(string $nome, string $descrizione)
    {
        $this->descrizione = $descrizione;
        $this->setGenere($nome);
    }

    public function setGenere(string $nome)
    {
        if (strlen($nome) <= 30) 
        {
            $this->nome = $nome;
        } 
        else 
        {
            throw new Exception("IL NOME DEL GENERE E` TROPPO LUNGO. DEVE ESSERE MENO DI 30 CARATTERI.");
        }
    }
    public function getNome(): string 
    {
        return $this->nome;
    }
    public function setDescrizione($descrizione)
    {
        $this->descrizione = $descrizione;
    }
    public function getDescrizione()
    {
        return $this->descrizione;
    }
}
