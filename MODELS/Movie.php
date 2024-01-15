<?php
class Movie {
    public $name
    public $year
    public $category
    public $actors
    public $director
public $producers

public function getFullInfo(){
    $result = $this->name . "(" . $this->year . ") " . $this->category . ", ". $this->actors . ".";
    return $result;
}

public function __construct($nome, $anno, $genere, $attori, $regista, $produttori) {
    $this->name=$nome;
    $this->year=$anno;
    $this->category=$genere;
    $this->actors=$attori;
    $this->director=$regista;
    $this->producers=$produttori;
}
}