<?php
$page = "Exercice 3"; // Définir la variable pour changer le titre !
$firstVar = 100;
$secondVar = 2;
$multiplyResult = '';
$message = '';
include '../header.php';
 ?>
 <h2 class="text-primary text-center pt-5 pb-5 font-weight-bold">Exercice 3</h2>
 <h3 class="text-center pb-5">Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.
Tant que la première variable n'est pas inférieure ou égale à 10 :

    multiplier la première variable avec la deuxième
    afficher le résultat
    décrémenter la première variable
</h3>
<?php

// BOUCLE INFINIE !!

  // do {
  //   $multiplyResult = $firstVar * $secondVar;
  // }
  // while ($a <= 10);
?>
<p>Ma première variable contient <?= $message ?></p>
<?php
include '../footer.php';
?>
