<?php session_start(); ?>
<?php include "includes/superviseur_header.php"; ?>
<!-------------------------------------------------------------------->
<div class="container">



<!--Titre de la page -->
<div class="row text-center mt-2 w-25 mx-auto card">
<div class="py-2">
    <h5 class="h4 card-title"><?php echo($_SESSION['sess_profil']) ?></h5>
</div>
</div>
<hr>

<div class="row"> <!--Ligne 1 --> </div> <!--Fin de le Ligne 1 -->

<hr>

<div class="row">
  <div class="col"></div>
  <div class="col"></div>
  <div class="col"></div>
  <div class="col">
  <button type="button" class="btn btn-primary active w-100">XXXXX</button>
  </div>
</div>

</div>









<!-------------------------------------------------------------------->
<?php include "includes/footer.php"; ?>