<?php
$page = "Exercice 8"; // Définir la variable pour changer le titre !
$number = 200;
$message = '';
include '../header.php';
for ($number=200; $number >0 ; --$number) {
  $message = 'Enfin !!!!';
}
 ?>
 <h2 class="text-primary text-center pt-5 pb-5 font-weight-bold">Exercice 8</h2>
 <h3 class="text-center pb-5">En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!.</h3>
<p><?= $message ?></p>
<?php
include '../footer.php';
?>
