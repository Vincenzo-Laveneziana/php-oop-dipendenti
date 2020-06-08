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
    if (!is_int($this->eta)){
      throw new Exception(" Assicurati che l'età sia un numero"); 
    } elseif ( $this->eta > 65) {
      throw new Exception(" Assicurati che l'età sia minore di 65"); 
    }

    return $_eta;
  }

  //Methods
  public function controlloCassa($_numCassa){
    if (!is_int($this->numCassa)) {
      throw new Exception(" Assicurati che la cassa sia un numero"); 
    }

    return $_numCassa;
  }

}