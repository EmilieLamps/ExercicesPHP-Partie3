<?php
$page = "Exercice 4"; // Définir la variable pour changer le titre !

for ($firstVar=1; $firstVar <10; $firstVar+=($firstVar/2)) {
  $message = $firstVar;
}
include '../header.php';
 ?>
 <h2 class="text-primary text-center pt-5 pb-5 font-weight-bold">Exercice 4</h2>
 <h3 class="text-center pb-5">Créer une variable et l'initialiser à 1.
Tant que cette variable n'atteint pas 10, il faut :

    l'afficher
    l'incrementer de la moitié de sa valeur
</h3>
<p>La variable contient <?= $message ?></p>
<?php
include '../footer.php';
?>
