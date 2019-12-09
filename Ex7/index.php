<?php
$page = "Exercice 7"; // Définir la variable pour changer le titre !
$number = 1;
include '../header.php';
 ?>
 <h2 class="text-primary text-center pt-5 pb-5 font-weight-bold">Exercice 7</h2>
 <h3 class="text-center pb-5">En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout.</h3>
<?php
for ($number=0; $number <100 ; $number +=15) {
  echo 'On tient le bon bout <br/>';
}
?>
<p><?= $number ?></p>
<?php
include '../footer.php';
?>
