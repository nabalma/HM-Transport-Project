<?php session_start(); ?>
<?php include "includes/administrateur_header.php"; ?>
<?php include "includes/fonctionsAdministrateur.php"; ?>
<!-------------------------------------------------------------------->
<div class="mt-3 container">

<?php 
$refUtilisateur= $_GET["refUtil"];
approuverUtilisateur($refUtilisateur);
?>

</div>

<!-------------------------------------------------------------------->
<?php include "includes/footer.php"; ?>