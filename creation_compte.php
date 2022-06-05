<?php include "includes/header.php"; ?>
<script type= "text/javascript" src="js/fonctionsJavaScript.js" defer></script>




  <!----------------------------------------------------------------------------------------------------------------->

  

<!--Registration Content-->
 <div class="container">
<h1 class="h3 mt-1 mb-3 fw-normal text-center ">Enregistrez - Vous</h1>
 
<form class="mt-1 border border-3 w-50 mx-auto" method= "post" action = "acceuil.php" onsubmit="return VerifCreationCompte();">
 
    <div class="ms-1 me-1 mt-2 row mb-2 w-100">
          <label for="inputNom" class="col-sm-4 col-form-label">Nom</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="inputNom" name="inputNom" required >
          </div>
    </div>

    <div class="ms-1 me-1 mt-1 row mb-2 w-100">
          <label for="inputPrenom" class="col-sm-4 col-form-label">Prénom</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="inputPrenom" name ="inputPrenom" required>
          </div>
    </div>

    <div class="ms-1 me-1 row mt-1 mb-2 w-100">
          <label for="inputEmail" class="col-sm-4 col-form-label">Email</label>
          <div class="col-sm-8">
            <input type="email" class="form-control" id="inputEmail" name="inputEmail" required >
          </div>
    </div>

    <div class="ms-1 me-1 row mt-1 mb-2 w-100">
          <label for="inputPassword" class="col-sm-4 col-form-label">Password</label>
          <div class="col-sm-8">
            <input type="password" class="form-control" id="inputPassword" name="inputPassword" minlength="8" maxlength="12" required>
          </div>
    </div>

    <div class="ms-1 me-1 row mt-1 mb-2 w-100">
          <label for="confirmPassword" class="col-sm-4 col-form-label">Confirm Password</label>
          <div class="col-sm-8">
            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" minlength="8" maxlength="12" required>
          </div>
    </div>

    <fieldset class="ms-1 me-1 row mt-1 mb-2">
              <legend class="col-form-label col-sm-4 pt-0">Profil d'utilisateur</legend>
                  <div class="col-sm-8">

                          <div class="form-check">
                              <input class="form-check-input" type="radio" name="gridRadios" id="administrateur" value="1" >
                              <label class="form-check-label" for="administrateur">
                              Administrateur
                              </label> 
                          </div>

                          <div class="form-check">
                              <input class="form-check-input" type="radio" name="gridRadios" id="gestionChauffeurs" value="2">
                              <label class="form-check-label" for="gestionChauffeurs">
                              Gestionnaire des chauffeurs
                              </label>
                          </div>

                          <div class="form-check">
                              <input class="form-check-input" type="radio" name="gridRadios" id="gestionVoyages" value="3">
                              <label class="form-check-label" for="gestionVoyages">
                              Gestionnaire des voyages
                              </label>
                          </div>

                          <div class="form-check">
                              <input class="form-check-input" type="radio" name="gridRadios" id="gestionCamions" value="4">
                              <label class="form-check-label" for="gestionCamions">
                              Gestionnaire des camions
                              </label>
                          </div>

                          <div class="form-check">
                              <input class="form-check-input" type="radio" name="gridRadios" id="autre" value="5" checked>
                              <label class="form-check-label" for="autre">
                              Autre
                              </label>
                          </div>
                  
                  
                  </div>
    </fieldset>


    <div class="row ms-2 mt-1 mb-1">
          
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="acceptConditions" name="acceptConditions" required>
              <label class="form-check-label" for="acceptConditions">
                J'accepte les termes et conditions
              </label>
            </div>
          
    </div>

    <div class="row mt-1 mb-1 w-25 mx-auto">
        <button type="submit" class="btn btn-primary" name="creerCompte">S'enregistrer</button>
    </div>

</form>

<!--Password matching alertes-->


<div class="invisible w-50 mx-auto alert alert-danger alert-dismissible fade show" role="alert" id="alertinputpasswd">
<svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
  <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg>
  <strong>Attention !</strong> Les mots de passe fournis de concordent pas. Merci de ressaisir
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>



</div>

  <!----------------------------------------------------------------------------------------------------------------->
<?php include "includes/footer.php"; ?>

