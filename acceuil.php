<?php include "includes/header.php"; ?>


  <!----------------------------------------------------------------------------------------------------------------->
<div container>
    <?php 

        if(isset($_POST['creerCompte'])){

          $nom = $_POST["inputNom"];
          $prenom = $_POST["inputPrenom"];
          $email = $_POST["inputEmail"];
          $passwd = $_POST["inputPassword"];
          /* il faut harsher ce password  */
          $profil = $_POST["gridRadios"];

          /*Ajouter le profil a la base de donnees des users*/
          
          
        }

    ?>


<!--Pour faire de la hauteur dans la page -->
<div class="mt-5 mb-5 card mx-auto w-75"></div>


      <!--Message de confirmation de creation de compte. -->
    <div class="mt-5 card mx-auto w-75">
      <div class="card-header">
          Création de compte
      </div>
      <div class="card-body">
            <h5 class="card-title">Message de confirmation</h5>
            <p class="card-text">

                  <div class="mt-1 alert alert-success d-flex align-items-center" role="alert">
                      <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                      </svg>
                      <div class="h6 mx-5">            
                        
                        <?php echo('Bienvenu '.$nom .' - '. $prenom . ''. '.  Votre compte a bien été crée avec succès.'); ?>
                        
                                      
                      </div>          
                  </div>

            </p>
        
      </div>
       
  </div>
  
  
  <!--Message d'instruction de connexion -->
  
   <div class="mt-1 card mx-auto w-75">
      
      <div class="card-body">
            <h6 class="card-title">Vous pouvez désormais vous connecter en utilisant votre Email et votre mot de passe. </h6>
            <p class="card-text">

                 

            </p>
          <div class="d-flex justify-content-center">
          <a href="login.php" class="btn btn-primary">Se connecter</a>
        </div>
      </div>
  </div>

  <!--Pour faire de la hauteur dans la page -->
  <div class="mt-5 mb-5 card mx-auto w-75"></div>


</div>

  
  <!----------------------------------------------------------------------------------------------------------------->
<?php include "includes/footer.php"; ?>

