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

<div class="row">

  <div class="col border border-primary rounded-3 me-1"> <!--Col Depot de Chargement -->
        <div class="mt-1 mb-1 mx-auto row btn btn-dark w-100">CREATION DEPOTS DE CHARGEMENTS</div>

       <?php
        if(isset($_GET["action"]) && $_GET["action"]=="ajoutDepotChargement"){
          echo'
          <div class="mb-1 alert alert-success alert-dismissible fade show" role="alert">
          <strong>Félicitations !</strong> Dépot '.$_GET["depot"].' crée.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }
        

        ?>

            <form method="POST" action="../administrateur/depotsChargements/ajoutDepotChargement.php">        
            <div class="mb-1 row d-flex justify-content-center">
          <div class="col-sm-10 w-100">
            <input type="text" class="form-control" id="designation" name="designationDepotChargement" placeholder="Désignation Dépot Chargement">
          </div>
        </div>

        <div class="mb-1 row d-flex justify-content-center">
          <div class="col-sm-10 w-100">
            <input type="text" class="form-control" id="dureeTrajetAlleeChargementTarget" name="dureeTrajetAlleeChargementTarget" placeholder="Durée Trajet Allée (Target)">
          </div>
        </div>

        <div class="mb-1 row d-flex justify-content-center">
          <div class="col-sm-10 w-100">
            <input type="text" class="form-control" id="dureeAvantChargementTarget" name="dureeAvantChargementTarget" placeholder="Durée Avt Chargement (Target)">
          </div>
        </div>

        <div class="mb-1 row d-flex justify-content-center">
          <div class="col-sm-10 w-100">
            <input type="text" class="form-control" id="dureeChargementTarget" name="dureeChargementTarget" placeholder="Durée Chargement (Target)">
          </div>
        </div>

        <div class="mb-1 row d-flex justify-content-center">
          <div class="col-sm-10 w-100">
            <input type="text" class="form-control" id="dureeFormaliteApresChargementTarget" name="dureeFormaliteApresChargementTarget" placeholder="Durée Formalité Apr Chargt (Target)">
          </div>
        </div>

        <div class="mb-1 row d-flex justify-content-center">
          <div class="col-sm-10 w-100">
            <input type="text" class="form-control" id="dureeTrajetRetourVersFrontiereTarget" name="dureeTrajetRetourVersFrontiereTarget" placeholder="Durée Trajet Retour DepotFrontiere (Target)">
          </div>
        </div>

        <div class="mb-1 row d-flex justify-content-center">
          <div class="col-sm-10 w-100">
            <input type="text" class="form-control" id="dureeFormaliteTransitFrontiereTarget" name="dureeFormaliteTransitFrontiereTarget" placeholder="Durée Formalités Transit Frontière (Target)">
          </div>
        </div>

        <div class="mb-1 row d-flex justify-content-center">
          <div class="col-sm-10 w-100">
            <input type="text" class="form-control" id="dureeTrajetRetourFrontiereArriveeTarget" name="dureeTrajetRetourFrontiereArriveeTarget" placeholder="Durée Trajet Retour FrontiereArrivée (Target)">
          </div>
        </div>        

      <div class="row mt-1 mb-1">
        
        <div class="col"></div>
        <div class="col d-flex justify-content-end"><button name="submitDepotChargement" type="submit" class="btn btn-outline-success">Créer</button></div>
      </div>
        
      </form>

  </div> <!--Fin Col Depot de Chargement -->

   
  <div class="col border border-primary rounded-3 me-1">  <!--Col Depot de Livraison -->
        <div class="mt-1 mb-1 mx-auto row btn btn-dark w-100">CREATION DEPOTS DE LIVRAISONS</div>

       <?php
        if(isset($_GET["action"]) && $_GET["action"]=="ajoutDepotLivraison"){
          echo'
          <div class="mb-1 alert alert-success alert-dismissible fade show" role="alert">
          <strong>Félicitations !</strong> Dépot '.$_GET["depot"].' crée.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }
        

        ?>

            <form method="POST" action="../administrateur/depotsLivraisons/ajoutDepotLivraison.php">
        <div class="mb-1 row d-flex justify-content-center">
          <div class="col-sm-10 w-100">
            <input type="text" class="form-control" id="designationDepotLivraison" name="designationDepotLivraison" placeholder="Désignation Dépot Livraison">
          </div>
        </div>

        <div class="mb-1 row d-flex justify-content-center">
          <div class="col-sm-10 w-100">
            <input type="text" class="form-control" id="dureeTrajetAlleeLivraisonTarget" name="dureeTrajetAlleeLivraisonTarget" placeholder="Durée Trajet Allée Livraison (Target)">
          </div>
        </div>

        <div class="mb-1 row d-flex justify-content-center">
          <div class="col-sm-10 w-100">
            <input type="text" class="form-control" id="dureeAvantLivraisonTarget" name="dureeAvantLivraisonTarget" placeholder="Durée Avant Livraison (Target)">
          </div>
        </div>

        <div class="mb-1 row d-flex justify-content-center">
          <div class="col-sm-10 w-100">
            <input type="text" class="form-control" id="dureeLivraisonTarget" name="dureeLivraisonTarget" placeholder="Durée Livraison (Target)">
          </div>
        </div>

        <div class="mb-1 row d-flex justify-content-center">
          <div class="col-sm-10 w-100">
            <input type="text" class="form-control" id="dureeFormaliteApresLivraisonTarget" name="dureeFormaliteApresLivraisonTarget" placeholder="Durée Formalité Apr Livr (Target)">
          </div>
        </div>

        <div class="mb-1 row d-flex justify-content-center">
          <div class="col-sm-10 w-100">
            <input type="text" class="form-control" id="dureeTrajetRetourLivraisonTarget" name="dureeTrajetRetourLivraisonTarget" placeholder="Durée Trajet Retour Livraison (Target)">
          </div>
        </div>

        <div class="mb-1 row d-flex justify-content-center">
          <div class="col-sm-10 w-100">
            <input type="text" class="form-control" id="" name="" placeholder="" style="background-color:lightgray">
          </div>
        </div>

        <div class="mb-1 row d-flex justify-content-center">
          <div class="col-sm-10 w-100">
            <input type="text" class="form-control" id="" name="" placeholder="" style="background-color:lightgray">
          </div>
        </div>

        

      <div class="row mt-1 mb-1">
        
        <div class="col"></div>
        <div class="col d-flex justify-content-end"><button name="submitDepotLivraison" type="submit" class="btn btn-outline-success">Créer</button></div>
      </div>
        
      </form>
  </div> <!--Fin Col Depot de Livraison -->
    
    <div class="col">TRANSITAIRES</div>
   
    <div class="col">MARKETEURS</div>

</div>










<hr>

</div>









<!-------------------------------------------------------------------->
<?php include "includes/footer.php"; ?>