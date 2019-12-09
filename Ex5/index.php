<?php
$page = "Exercice 5"; // Définir la variable pour changer le titre !
$number = 1;
include '../header.php';
 ?>
 <h2 class="text-primary text-center pt-5 pb-5 font-weight-bold">Exercice 5</h2>
 <h3 class="text-center pb-5">En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque.</h3>
<?php
  for ($number=1; $number <15 ; $number++) {
    echo 'On y arrive presque <br/>';
  }
?>
<p><?= $number ?></p>
<?php
include '../footer.php';
?>
