<?php
$page = "Exercice 2"; // Définir la variable pour changer le titre !
$firstVar = 0;
$secondVar = 1;
$multiplyResult = '';
$message = '';
include '../header.php';
 ?>
 <h2 class="text-primary text-center pt-5 pb-5 font-weight-bold">Exercice 2</h2>
 <h3 class="text-center pb-5">Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.
Tant que la première variable n'est pas supérieure à 20 :

    multiplier la première variable avec la deuxième
    afficher le résultat
    incrementer la première variable
</h3>
<?php
// utiliser la boucle do/while
  do {
    $multiplyResult = $firstVar * $secondVar;
    echo $multiplyResult. '<br/>';
    $message = $multiplyResult;
    $firstVar++;
  } while ($firstVar <= 20);
?>
<p>La première variable contient <?= $message ?></p>
<?php
include '../footer.php';
?>
