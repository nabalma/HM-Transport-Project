<?php ob_start();?> 
<?php session_start();?> 
<?php include "includes/header.php"; ?>
<?php include "includes/db.php"; ?>
<?php include "includes/harsh.php"; ?>




  <!----------------------------------------------------------------------------------------------------------------->

  <?php

if(isset($_POST['login'])){
  global $connection;

  $user_email = $_POST["email"];
  $user_password = $_POST["password"];


 $user_email = mysqli_real_escape_string($connection,$user_email);
 $user_password = mysqli_real_escape_string($connection,$user_password);

  // EXTRACTION DES DONNEES UTILISATEURS
  if (!$connection)
              {
                  die("Echec de la connection à la base de données : " . mysqli_connect_error());
              }
              else
              {
                  // The query to be executed. /*Extraction des donnees de lutilsateur connecté
                  $user_connected = "SELECT * FROM tblutilisateurs WHERE email = '$user_email' AND statutApprobation=1;";
                  // Execution of the query. 
                  $db_user_connected_query= mysqli_query($connection,$user_connected);

                     if (!$db_user_connected_query) 
                        {
                            die("Impossible d'executer la requête de vérification avant ouverture de votre compte : " . mysqli_error($connection));    
                        }
                        else
                        {

                          // the loop to return data
                          while($row = mysqli_fetch_assoc( $db_user_connected_query)) 
                          {
                              $db_user_nom =($row['nom']);
                              $db_user_prenom =($row['prenom']);
                              $db_user_email =($row['email']);
                              $db_user_password =($row['motdepasse']);
                              $db_user_profil_code =($row['profilutilisateur']);
                              
                              switch ( $db_user_profil_code) {
                                      case 1:
                                      $db_user_profil = "Administrateur";
                                      break;

                                      case 2:
                                      $db_user_profil = "Superviseur";
                                      break;

                                      case 3:
                                      $db_user_profil = "Gestionnaire des Chauffeurs";
                                      break;

                                      case 4:
                                      $db_user_profil = "Gestionnaire des Voyages";
                                      break;

                                      case 5:
                                      $db_user_profil = "Gestionnaire des Camions";
                                      break;

                                      case 6:
                                      $db_user_profil = "Autre";
                                      break;
                                
                                      default:
                                        # code...
                                        break;
                              }
                          };


                        }
              }
 
  // CONNEXIONS ET NON CONNEXION (Conditions et pages a ouvrir)
 // --- SESSIONS A OUVRIR ------


}

if ($user_email !== $db_user_nom &&
harsh($user_password) !== $db_user_password) {
header("Location: ./login.php"); 
 exit;
}
else{

$_SESSION['sess_nom']= $db_user_nom;
$_SESSION['sess_prenom']= $db_user_prenom;
$_SESSION['sess_email']= $db_user_email;
$_SESSION['sess_profil']= $db_user_profil;


  echo'<div class="container">

  <div class="mt-5 mb-5 alert alert-light w-50 mx-auto" role="alert">
    <p class="mt-5"></p>
        <h5 class="h5 fw-bold text-dark alert-heading">Bienvenu !   ';echo($db_user_email);echo'</h5>
        <p><h5 class="alert-heading text-success">Vous êtes connectés avec succés</h5></p>
        <hr>';

  echo' <p class="mb-0 fs-5 h5" ><span class="fw-bold">Nom</span> : '; echo($db_user_nom); echo'</p>
      <hr>';
  
  echo'<p class="mb-0 fs-5 h5" ><span class="fw-bold">Prénom</span> : ';echo($db_user_prenom);echo'</p>
      <hr>';
  echo'<p class="mb-0 fs-5 h5" ><span class="fw-bold">Email</span> : '; echo($db_user_email);echo'</p>
      <hr>';

  echo'<p class="mb-0 fs-5 h5" ><span id = "profils" class="fw-bold">Profil</span> : '; echo($db_user_profil); echo'</p>
      <hr>';

  echo'<form action="acceuil.php" method ="post">';
  echo'<p class="mt-3 mx-auto d-flex justify-content-center"><button name = "acceuil" type="submit" class="btn btn-outline-primary btn-lg">Allez à la page d\'acceuil correspondant à votre profil</button></p>
</form>
</div>
</div>';
  
}

?>



     

      

      

      

  


  <!----------------------------------------------------------------------------------------------------------------->
<?php include "includes/footer.php"; ?>

