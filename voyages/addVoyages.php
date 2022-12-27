<?php session_start(); ?>
<?php include "includes/voyages_header.php"; ?>
<?php include "includes/fonctionsVoyages.php"; ?>

<!-------------------------------------------------------------------->

<div class="mt-1 container">

  <div class="row mb-1 d-flex justify-content-around">

    <div class="col"></div> 
    <!--Titre de la page -->
  
    <div class="col text-center mt-0 mx-auto card">
    <div class="py-2">
        <h5 class="h4 card-title"><?php echo($_SESSION['sess_profil']) ?></h5>
    </div>
    </div>

    <!--Titre de la page -->
    <div class="ms-2 col text-center mt-0 mx-auto card">
    <div class="py-2">
        <h5 class="h4 card-title">Voyages et Cyclogrammes</h5>
    </div>
    </div>

    <div class="col"></div> 
  </div>

<div class="row">

<!--Colonne Voyages -->
  <div class="col">
    <form action="traitementAddVoyage.php" method="POST">

            <div class="row">
            <button class="mb-1 col btn btn-light me-2 text-white fs-6" style="background-Color:#150452"><svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" fill="white" class="bi bi-file-earmark-plus-fill" viewBox="0 0 16 16">
      <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM8.5 7v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 1 0z"/>
    </svg>VOYAGES</button> 
            </div>
           

            <div class="row g-0">
              <div class="mb-1 row">
                <div class="col"><label type="text" class="form-control bg-light" id="refVoyage">Ref.Voy</label></div>
                <div class="col"><label type="text" class="form-control bg-light text-danger text-center" id="refVoyage" ><?php echo "&nbsp" ?></label></div> 
              
              
              </div>
              <div class="mb-1 row">
              <div class="col"><label type="text" class="form-control bg-light" id="reqTransporteur">Req.Transporteur</label></div>
                <div class="col"><input type="text" class="form-control bg-light text-primary" id="reqTransporteur" name="reqTransporteur" ></input></div> 
                
            
              </div>
              <div class="mb-1 row">
                <div class="col"><label type="text" class="form-control bg-light" id="depotChargement">Depot de Chargmt</label></div>
                <div class="col">

                <select class="form-select text-primary" aria-label="Default select example" name="depotChargement">
                      <option selected>Choisir Depôt</option>
                    <?php     
                        genererDepotChargementCreationVoyage();                    
                    ?>;


                  </select>
                </div>          
              </div>

              <div class="mb-1 row">
              <div class="col"><label type="text" class="form-control bg-light" id="depotLivraison">Depot de Livraison</label></div>
                <div class="col">
                <select class="form-select text-primary" aria-label="Default select example" name="depotLivraison" >
                      <option selected>Choisir Livraison</option>
                      <?php     
                          genererDepotLivraisonCreationVoyage();                    
                      ?>;                 
                  </select>
                </div>                    
              </div>


              <div class="mb-1 row">
              <div class="col"><label type="text" class="form-control bg-light" id="refChauffeur">Ref.Chauffeur</label></div>
                <div class="col">
                <select class="form-select text-primary" aria-label="Default select example" name="chauffeur">
                      <option selected>Choisir Chauffeur</option>
                      <?php     
                          genererChauffeursCreationVoyage();                    
                      ?>;     
                      
                  </select>
                </div>                    
              </div>
                
            
              <div class="mb-1 row">
              <div class="col"><label type="text" class="form-control bg-light" id="camion">Ref.Camion</label></div>
                <div class="col">
                <select class="form-select text-primary" aria-label="Default select example" name="camion" >
                      <option selected>Choisir Camions</option>
                      <?php     
                          genererCamionsCreationVoyage();                    
                      ?>;  
                  </select>
                </div>                    
              </div>


              <div class="mb-1 row">
              <div class="col"><label type="text" class="form-control bg-light" id="besonabhy">Numéro BE (Sonabhy)</label></div>
                <div class="col">
                <input type="text" class="form-control bg-light text-primary" id="besonabhy" name="besonabhy" ></input>
                </div>                    
              </div>


              <div class="mb-1 row">
              <div class="col"><label type="text" class="form-control bg-light" id="transitaire">Transitaire</label></div>
                <div class="col">
                <select class="form-select text-primary" aria-label="Default select example" name="transitaire">
                      <option selected>Choisir Transitaire</option>
                      <?php     
                          genererTransitairesCreationVoyage();                    
                      ?>;  
                  </select>
                </div>                    
              </div>

              <div class="mb-1 row">
              <div class="col"><label type="text" class="form-control bg-light" id="tournee">Numéro Tournée (Marketer)</label></div>
                <div class="col">
                <input type="text" class="form-control bg-light text-primary" id="tournee" name="tournee" ></input>
                </div>                    
              </div>

              <div class="mb-1 row">
              <div class="col"><label type="text" class="form-control bg-light" id="numoc">Numéro OC (Marketer)</label></div>
                <div class="col">
                <input type="text" class="form-control bg-light text-primary" id="numoc" name="numoc"></input>
                </div>                    
              </div>




              <div class="mb-1 row">
              <div class="col"><label type="text" class="form-control bg-light" id="planvoyage">Numéro Plan de Voyage</label></div>
                <div class="col">
                <input type="text" class="form-control bg-light text-primary" id="planvoyage" name="planvoyage"></input>
                </div>                    
              </div>

              <div class="mb-1 row">
              <div class="col"><label type="text" class="form-control bg-light" id="numbl">Numéro BL (Livraison)</label></div>
                <div class="col">
                <input type="text" class="form-control bg-light text-primary" id="numbl" name="numbl"></input>
                </div>                    
              </div>

              <div class="mb-1 row">
              <div class="col"><label type="text" class="form-control bg-light" id="vollivre">Volume Livré (Litres)</label></div>
                <div class="col">
                <input type="text" class="form-control bg-light text-primary" id="vollivre" name="vollivre"></input>
                </div>                    
              </div>

              <div class="row">
                <div class="col"></div>
                <div class="col"></div>
                <div class="col"> <button class="col btn btn-primary" type="submit" value="creerVoyage" name="creerVoyage">Créer Voyage</button></div>                     
              </div>

          </form>

         

         
          
        </div>

  </div>

 
 
  <!--Colonne Cyclogramme -->

   
  <div class="col">
    <div class="row">
    <button class="mb-1 col btn btn-light ms-2 text-white fs-6" style="background-Color:#150452"><svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" fill="white" class="bi bi-file-earmark-plus-fill" viewBox="0 0 16 16">
  <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM8.5 7v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 1 0z"/>
</svg>CYCLOGRAMMES</button> 
    </div>

<!-- 
    <div class="row ms-2">
      <div class="col">

        <div class="mb-1 row"><label type="text" class="form-control bg-light " id="">Ref Cyclo</label></div>
        <div class="mb-4 row"><label type="text" class="form-control bg-light " id="">Ref Voy Prec.</label></div>
        <hr>
        <div class="mb-1 row"><label type="text" class="form-control bg-light " id="">Date OC</label></div>
        <div class="mb-1 row"><label type="text" class="form-control bg-light " id="">Date Bon Sbhy</label></div>
        <div class="mb-1 row"><label type="text" class="form-control bg-light " id="">Date Départ</label></div>
        <div class="mb-1 row"><label type="text" class="form-control bg-light " id="">Arr Frt Allée</label></div>
        <div class="mb-1 row"><label type="text" class="form-control bg-light " id="">Arr Dpt Charg</label></div>
        <div class="mb-1 row"><label type="text" class="form-control bg-light " id="">Date Chargmt</label></div>
        <div class="mb-1 row"><label type="text" class="form-control bg-light " id="">Déprt Dpt Charg</label></div>
        <div class="mb-1 row"><label type="text" class="form-control bg-light " id="">Arr frt Retour</label></div>
        <div class="mb-1 row"><label type="text" class="form-control bg-light " id="">Date Arr Ouaga</label></div>
        <div class="mt-4 row"></div>

      </div>
      <div class="col">

        <div class="row mb-1"><input type="text" class="me-2 form-control bg-light text-primary text-center" id="tournee" name="tournee" ></input></div>
        <div class="row mb-4"><input type="text" class="me-2 form-control bg-light text-primary text-center" id="tournee" name="tournee"  ></input></div>
        <hr>
        <div class="row mb-1"><input type="Date" class="me-2 form-control bg-light text-primary text-center" id="tournee" name="tournee" ></input></div>
        <div class="row mb-1"><input type="Date" class="me-2 form-control bg-light text-primary text-center" id="tournee" name="tournee" ></input></div>
        <div class="row mb-1"><input type="Date" class="me-2 form-control bg-light text-primary text-center" id="tournee" name="tournee" ></input></div>
        <div class="row mb-1"><input type="Date" class="me-2 form-control bg-light text-primary text-center" id="tournee" name="tournee" ></input></div>
        <div class="row mb-1"><input type="Date" class="me-2 form-control bg-light text-primary text-center" id="tournee" name="tournee" ></input></div>
        <div class="row mb-1"><input type="Date" class="me-2 form-control bg-light text-primary text-center" id="tournee" name="tournee" ></input></div>
        <div class="row mb-1"><input type="Date" class="me-2 form-control bg-light text-primary text-center" id="tournee" name="tournee" ></input></div>
        <div class="row mb-1"><input type="Date" class="me-2 form-control bg-light text-primary text-center" id="tournee" name="tournee" ></input></div>
        <div class="row mb-1"><input type="Date" class="me-2 form-control bg-light text-primary text-center" id="tournee" name="tournee" ></input></div>
        <div class="mt-4 row"></div>

      </div>
      <div class="col ms-1 ">
        
        <div class="mb-1 row"><label type="text" class="form-control bg-light " id="">Arrivee Prec</label></div>
        <div class="mb-4 row"><label type="text" class="form-control bg-light " id="">Ref Voy.</label></div>
        <hr>
        <div class="mb-1 row"><label type="text" class="form-control bg-light " id="">Date Sortie Bingo</label></div>
        <div class="mb-1 row"><label type="text" class="form-control bg-light " id="">Date Arr sur Site</label></div>
        <div class="mb-1 row"><label type="text" class="form-control bg-light " id="">Date Livraison</label></div>
        <div class="mb-1 row"><label type="text" class="form-control bg-light " id="">Sortie du Site</label></div>
        <div class="mb-1 row"><label type="text" class="form-control bg-light " id="">Date Retour</label></div>
        <div class="mb-1 row"><label type="text" class="form-control bg-light " id="">Inspection</label></div>
        <div class="mb-1 row"><label type="text" class="form-control bg-light " id="">Correction Insp.</label></div>
        <div class="mb-1 row"><label type="text" class="form-control bg-light " id="">Annalyse Suiv.</label></div>
        <div class="mb-1 row"><label type="text" class="form-control bg-light " id="">Commentaires</label></div>
        <div class="mt-4 row"></div>

      </div>
      <div class="col">
        
        <div class="row mb-1"><input type="Date" class="me-2 form-control bg-light text-primary text-center" id="tournee" name="tournee" ></input></div>
        <div class="row mb-4"><label class="me-2 form-control bg-light text-danger text-center" id="tournee" name="tournee" ><?php echo "&nbsp"?></label></div>
        <hr>
        <div class="row mb-1"><input type="Date" class="me-2 form-control bg-light text-primary text-center" id="tournee" name="tournee" ></input></div>
        <div class="row mb-1"><input type="Date" class="me-2 form-control bg-light text-primary text-center" id="tournee" name="tournee" ></input></div>
        <div class="row mb-1"><input type="Date" class="me-2 form-control bg-light text-primary text-center" id="tournee" name="tournee" ></input></div>
        <div class="row mb-1"><input type="Date" class="me-2 form-control bg-light text-primary text-center" id="tournee" name="tournee" ></input></div>
        <div class="row mb-1"><input type="Date" class="me-2 form-control bg-light text-primary text-center" id="tournee" name="tournee" ></input></div>
        <div class="row mb-1"><input type="Date" class="me-2 form-control bg-light text-primary text-center" id="tournee" name="tournee" ></input></div>
        <div class="row mb-1"><input type="Date" class="me-2 form-control bg-light text-primary text-center" id="tournee" name="tournee" ></input></div>
        <div class="row mb-1"><input type="Date" class="me-2 form-control bg-light text-primary text-center" id="tournee" name="tournee" ></input></div>
        <div class="row mb-1"><input type="Date" class="me-2 form-control bg-light text-primary text-center" id="tournee" name="tournee" ></input></div>
        <div class="mt-4 row"><button class="col btn btn-primary" type="submit" value="" name="miseajour">Mise à Jour Cyclo</button></div>

      </div>


    </div>

-->

  </div>



</div>











 
 






<div class="row d-flex">
  <div class="col"></div>
  <div class="col"></div>
  <div class="col"></div>
  <div class="col">
    <a class="btn btn-secondary btn-lg" href="page_acceuil_voyages.php"><svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
  <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z"/>
</svg>Performances Voyages 
    </a>
    
  </div>
</div>

</div>

<!-------------------------------------------------------------------->
<?php include "includes/footer.php"; ?>


