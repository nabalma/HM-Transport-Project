<?php session_start(); ?>
<?php include "includes/chauffeurs_header.php"; ?>
<!-------------------------------------------------------------------->
<div class="container">



<!--Titre de la page -->
<div class="text-center mt-2 w-25 mx-auto card">
<div class="py-2">
    <h5 class="h4 card-title"><?php echo($_SESSION['sess_profil']) ?></h5>
</div>
</div>






</div>




<!-------------------------------------------------------------------->
<?php include "includes/footer.php"; ?>