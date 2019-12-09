<?php
$page = "Exercice 6"; // Définir la variable pour changer le titre !
$number = 20;
include '../header.php';
 ?>
 <h2 class="text-primary text-center pt-5 pb-5 font-weight-bold">Exercice 6</h2>
 <h3 class="text-center pb-5">En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon.</h3>
<?php
for ($number=20; $number >0 ; --$number) {
  echo 'C\'est presque bon <br/>';
}
?>
<p><?= $number ?></p>
<?php
include '../footer.php';
?>
