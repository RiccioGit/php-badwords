<!-- GOAL: Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre *. -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title>PHP Badwords</title>

  </head>

  <body>

    <?php

    $text = "Si sta come d'autunno sugli alberi le foglie (Ungaretti)";

    $censored = $_GET["badword"];

    $newText = str_replace( $censored, "banane",  $text);


     ?>

     <h1>LA FRASE DEL GIORNO:</h1>

     <h3>

       <?php echo $text ?>

     </h3>

     <p>
       (La stringa è lunga <?php echo strlen($text) ?> caratteri.)
     </p>

     <h2>La tua nuova frase:</h4>

     <h3>
       <?php echo $newText ?>
     </h3>

  </body>

</html>
