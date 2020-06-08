<?php 

include_once __DIR__.'/classes/Magazzinieri.php';


$dipendente = new Magazzinieri("Oronzo", "Fumagalli", 88, "Magazziniere", 1245, "A-13");

try {
  echo $dipendente->controlloEta($dipendente->eta);
} catch (Exception $e) {
  echo "Errore età <br>" . $e->getMessage();
}

var_dump($dipendente);

?>