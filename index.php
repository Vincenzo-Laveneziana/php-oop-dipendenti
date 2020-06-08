<?php 

include_once __DIR__.'/staff_db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <div class="magazzinieri">
    <h2>Magazzinieri</h2>
    <?php foreach ($magazzinieri as $magazziniere) { ?>

    <ul>
      <li>Nome e cognome: <?php echo $magazziniere->nome ." ". $magazziniere->cognome ?></li>
      <li>Età: <?php
            try{
             echo $magazziniere->controlloEta($magazziniere->eta);
            } catch (Exception $e){
             echo "Errore" . $e->getMessage();
            }
          ?>
      </li>
      <li>Ruolo: <?php echo $magazziniere->ruolo ?></li>
      <li>Id dipendente: <?php echo $magazziniere->id ?></li>
      <li>Piano lavorativo: <?php echo $magazziniere->pianoLavorativo ?></li>
    </ul>

    <?php } ?>
  
  </div>

  <div class="cassieri">
    <h2>Cassieri</h2>
    <?php foreach ($cassieri as $cassiere) { ?>

    <ul>
      <li>Nome e cognome: <?php echo $cassiere->nome ." ". $cassiere->cognome ?></li>
      <li>Età: <?php
            try{
             echo $cassiere->controlloEta($cassiere->eta);
            } catch (Exception $e){
             echo "Errore" . $e->getMessage();
            }
          ?>
      </li>
      <li>Ruolo: <?php echo $cassiere->ruolo ?></li>
      <li>Id dipendente: <?php echo $cassiere->id ?></li>
      <li>Cassa N°: <?php 
                    try{
                      echo $cassiere->controlloCassa($cassiere->numCassa);
                     } catch (Exception $e){
                      echo "Errore" . $e->getMessage();
                     }
                    ?>
      </li>
    </ul>

    <?php } ?>
  
  </div>

</body>
</html>