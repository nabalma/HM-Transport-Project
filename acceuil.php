<?php include "includes/header.php"; ?>

  <!----------------------------------------------------------------------------------------------------------------->
<div container>


  <?php 

    if(isset($_POST['creerCompte']))
    
      {

        $nom_utilisateur = $_POST["inputNom"];
        $prenom_utilisateur = $_POST["inputPrenom"];
        $email_utilisateur = $_POST["inputEmail"];
        $password_utilisateur = $_POST["inputPassword"];
        $profil_utilisateur = $_POST["gridRadios"];

        /* Hashage du mot de passe */

        $hashFormat="$2a$07$";
        $salt="iamthebeautifullestprogrammerofmyclass";
        $hash_Format_and_Salt=$hashFormat.$salt;
        $encrypted_password=crypt($password_utilisateur,$hash_Format_and_Salt);
        
        /* se connecter a la base de donnees en root*/

        // The connexion variable  is created.
        $connection = mysqli_connect("localhost","root","","db_transport");
        // If The connexion is established or not.
          if (!$connection)
              {
                        die("Echec de la connection à la base de données : " . mysqli_connect_error());
              }
              else
              {

                // 1--- Verification si le email existe deja dans la base de données
                  // The query to be executed.   /*Compter le nombre doccurrence de lemail saisi
                  $queryCompte = "SELECT COUNT(email) AS nombre FROM tblutilisateurs WHERE email = '$email_utilisateur';";
                  //Execution of the query. 
                  $resultCompte= mysqli_query($connection,$queryCompte);

                     if (!$resultCompte) 
                        {
                            die("Impossible d'executer la requête de vérification avant création du compte : " . mysqli_error($connection));    
                        }
                        else
                        {
                         
                          // the loop to return data
                          while($row = mysqli_fetch_assoc($resultCompte)) 
                          {
                              $nombre_abonnes_existants =($row['nombre']);           
                          };
                          
                          // Ajout de l'utilisateur s'il nest pas deja dans la base de données.
                          if ($nombre_abonnes_existants==0)  // Si le compte n'est pas encore dans la base, nombre_abonnes_existants=0
                             {
                                  // The query to be executed.   
                                  $queryInsert = "INSERT INTO tblutilisateurs VALUES ('$nom_utilisateur','$prenom_utilisateur','$email_utilisateur','$encrypted_password',$profil_utilisateur);";           
                                                      
                                  //Execution of the query. 
                                  $resultInsert= mysqli_query($connection,$queryInsert);

                                    if (!$resultInsert) 
                                    {
                                      die("Impossible d'executer la requête de creation du compte : " . mysqli_error($connection));    
                                    }
                                  
                                    else
                                    {
                                      /* Pour se faire de la hauteur de la page, en Haut */
                                      echo('<div class="mt-5 mb-5 card mx-auto w-75"></div>');

                                     /* Mot de bienvenue et instruction de connection */

                                        echo('<div class="card mt-5 mx-auto w-75">
                                              <h5 class="card-header">Création de compte</h5>
                                              <div class="card-body">
                                                  <h5 class="card-title">Message de confirmation</h5>
                                                    <p class="card-text">
                                                        <div class="alert alert-success d-flex align-items-center" role="alert">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                                          </svg>
                                                            <div class="h6 mx-5">');
                                                            echo("Bienvenu ".$prenom_utilisateur ." - ". $nom_utilisateur . "". ".  Votre compte a bien été crée avec succès.");
                                                            echo('</div>
                                                        </div>
                                                      
                                                    </p>
                                              
                                              </div>
                                      </div>


                                      <div class="card mt-1 mx-auto w-75">
                                      <div class="card-body">
                                          <h6 class="card-title">Vous pouvez désormais vous connecter en utilisant votre Email et votre mot de passe.</h6>
                                            <p class="card-text">         
                                            </p>
                                        <div class="d-flex justify-content-center">
                                            <a href="login.php" class="btn btn-primary">Se connecter</a>
                                        </div>
                                      </div>
                                      </div>');

                                      /* Pour se faire de la hauteur de la page, en Bas */
                                      echo('<div class="mt-5 mb-5 card mx-auto w-75"></div>');

                                    }
                             }
                             else
                             {

                              /* Pour se faire de la hauteur de la page, en Haut */
                              echo('<div class="mt-5 mb-5 card mx-auto w-75"></div>');

                               /* Pour se faire de la hauteur de la page, en Haut */
                               echo('<div class="mt-4 mb-5 card mx-auto w-75"></div>');

                              /* Mot de bienvenue et instruction de connection */

                                 echo('<div class="card mt-5 mx-auto w-75">
                                       <h5 class="card-header">Création de compte</h5>
                                       <div class="card-body">
                                           <h5 class="card-title">Message de négation</h5>
                                             <p class="card-text">
                                                 <div class="alert alert-danger d-flex align-items-center" role="alert">
                                                 <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" fill="currentColor" class="bi bi-x-octagon-fill" viewBox="0 0 16 16">
                                                 <path d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zm-6.106 4.5L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"/>
                                                 </svg>           
                                                     <div class="h6 mx-5">');
                                                     echo("Cet Email est déja enregistré pour un utilisateur ");
                                                     echo('</div>
                                                 </div>
                                               
                                             </p>
                                       
                                       </div>
                               </div>


                               <div class="card mt-1 mx-auto w-75">
                               <div class="card-body">
                                   <h6 class="card-title"></h6>
                                     <p class="card-text">         
                                     </p>
                                     <div class="d-flex justify-content-center">');
                                            echo('<a href="mailto:').$email_utilisateur;echo('">Mot de passe oublié ? </a>');
                                        echo('</div>
                                </div>
                               </div>');

                               /* Pour se faire de la hauteur de la page, en Bas */
                               echo('<div class="mt-4 mb-5 card mx-auto w-75"></div>');

                                /* Pour se faire de la hauteur de la page, en Haut */
                              echo('<div class="mt-4 mb-5 card mx-auto w-75"></div>');

                             }

                          

                        }







              
              }

      }
                                   
  

  ?>
  
  
</div>

  
  <!----------------------------------------------------------------------------------------------------------------->
<?php include "includes/footer.php"; ?>

