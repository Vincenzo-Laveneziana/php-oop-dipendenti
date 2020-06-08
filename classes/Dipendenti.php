<?php 

class Dipendenti{
  //Property 
  public $nome;
  public $cognome;
  public $eta;

  //Construct
  public function __construct($_nome, $_cognome, $_eta){
    $this->nome = $_nome;
    $this->cognome = $_cognome;
    $this->eta = $_eta;
  }

  //Methods
  public function controlloEta($_eta){
    if ($this->eta = $_eta > 65){
      throw new Exception("Assicurati che l'età sia minore di 65"); 
    } 
  }
 
}