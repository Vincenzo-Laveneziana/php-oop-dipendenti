<?php 

include_once __DIR__.'/classes/Cassieri.php';
include_once __DIR__.'/classes/Magazzinieri.php';


$magazzinieri = [
  new Magazzinieri("Oronzo", "Fumagalli", 43, "Magazziniere", rand(100, 5000), "A-13"),
  new Magazzinieri("Giorgio", "Rossi", "88", "Magazziniere", rand(100, 5000), "A-14"),
  new Magazzinieri("Oronzo", "Bianchi", 88, "Magazziniere", rand(100, 5000), "A-15"),
];

$cassieri = [
  new Cassieri("Vincenzo", "Laveneziana", 26, "Cassiere", rand(100, 5000), 13),
  new Cassieri("Giangi", "Inps", "43", "Cassiere", rand(100, 5000), "15"),
];


