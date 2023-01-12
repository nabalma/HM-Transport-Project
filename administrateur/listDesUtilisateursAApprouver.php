<?php session_start(); ?>
<?php include "includes/administrateur_header.php"; ?>
<?php include "includes/fonctionsAdministrateur.php"; ?>
<!-------------------------------------------------------------------->
<div class="container">

<!--Titre de la page -->
<div class="row text-center mt-2 w-25 mx-auto card">
<div class="py-2">
    <h5 class="h4 card-title"><?php echo($_SESSION['sess_profil']) ?></h5>
</div>
</div>
<hr>

    <div class="mt-1 w-75 mx-auto"><button type="button" class="btn btn-light  w-100 fw-bold fs-5">SELECTION PROFIL EN ATTENTE D'APPROBATION</button></div>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">Ref</th>
        <th scope="col">Noms</th>
        <th scope="col">Prenoms</th>
        <th scope="col">Emails</th>
        <th scope="col">Profils</th>
        <th scope="col">Designations Profil</th>
        <th scope="col">Statut Approbation</th>
       
        <th scope="col" class="text-primary">Edition</th>

        </tr>
    </thead>

    <tbody>
    
        <?php 
        listeDesUtilisateursAApprouver();       
        ?>
    </tbody>
    </table>



</div>

<!-------------------------------------------------------------------->
<?php include "includes/footer.php"; ?>