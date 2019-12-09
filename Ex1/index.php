<?php
$page = "Exercice 1"; // Définir la variable pour changer le titre !
$initialVar = 0;
$message = '';
include '../header.php';
?>
<h2 class="text-primary text-center pt-5 pb-5 font-weight-bold">Exercice 1</h2>
<h3 class="text-center pb-5">Créer une variable et l'initialiser à 0.
  Tant que cette variable n'atteint pas 10, il faut :
  l'afficher
  l'incrementer
</h3>
<?php
  while ($initialVar <= 10) {
    echo 'Ma variable contient la valeur ' .$initialVar. '<br>';
    $initialVar++;
  }
?>
<p><?= $message ?></p>
<?php
include '../footer.php';
?>
