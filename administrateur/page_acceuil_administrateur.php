<?php session_start(); ?>
<?php include "includes/administrateur_header.php"; ?>
<!-------------------------------------------------------------------->
<div class="container">

<!--Titre de la page -->
<div class="text-center mt-2 w-25 mx-auto card">
<div class="py-2">
    <h5 class="h4 card-title"><?php echo($_SESSION['sess_profil']) ?></h5>
</div>
</div>

<hr>

<div class="row"></div>
<hr>
<div class="row"></div>
<hr>
<div class="row"></div>
<hr>
<div class="row">

    <div class="col"></div>
    <div class="col"></div>
    <div class="col"></div>


    <div class="col d-flex align-items-end">
        <a class=" btn btn-secondary btn-lg" href="page_administrateurs.php">Opérations Admin
          <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
      <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
      </svg></a>        
    </div>

</div>



</div>



<!-------------------------------------------------------------------->
<?php include "includes/footer.php"; ?>