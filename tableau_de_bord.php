<?php
if (!isset($_SESSION)) { session_start(); }
?>

<?php include "includes/header.php"; ?>

  <!----------------------------------------------------------------------------------------------------------------->


<div class="mt-1 container">

  <div class="row mb-0 d-flex justify-content-around">

    <div class="col"></div> 
    <!--Titre de la page -->
  
    <div class="col text-center mt-0 mx-auto card">
    <div class="py-2">
        <h5 class="h4 card-title">Tableau de bord Opérations</h5>
    </div>
    </div>

    <!--Titre de la page -->
    <div class="ms-2 col text-center mt-0 mx-auto card">
    <div class="py-2">
        <h5 class="h4 card-title">Performances Globales</h5>
    </div>
    </div>

     <!--Personne connectée et retour a sa page -->
    <div class="col mt-2">
        <div class="row">
          <div class="col">
            <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo($_SESSION['sess_prenom']) ?>
            </button></div>
          <a href="<?php if($_SESSION['sess_profil']=="Administrateur"){echo "administrateur/page_acceuil_administrateur.php";}else if($_SESSION['sess_profil']=="Gestionnaire des Voyages"){echo "voyages/page_acceuil_voyages.php";} ?>" class="col"><button class="btn btn-dark">Retour</button></a>
        </div>
    </div> 
  </div>
  

  <div class="row mt-1">

  <!-- Volumes transportés, ,Representation 1 -->
<div class="col">

      <div class="card">  
          <div class="card-body">
               <div class="row">
                      <h5 class="col card-title h6 fw-bold">Volumes transportés</h5>
                      <div class="col btn-group" role="group" aria-label="Basic outlined example">
                          <button type="submit" name="" class="btn btn-outline-primary">2023</button>
                          <button type="submit" name="" class="btn btn-outline-primary">2024</button>
                          <button type="submit"  name="" class="btn btn-outline-primary">2025</button>
                      </div>
              </div>
              <canvas id="representation1"></canvas>      
          </div>  
      </div> 

</div>


  <!-- Volumes livrés, ,Representation 2 -->
  <div class="col">

  <div class="card">  
          <div class="card-body">
              <div class="row">
                      <h5 class="col card-title h6 fw-bold">Volumes livrés</h5>
                      <div class="col btn-group" role="group" aria-label="Basic outlined example">
                          <button type="submit" name="" class="btn btn-outline-primary">2023</button>
                          <button type="submit" name="" class="btn btn-outline-primary">2024</button>
                          <button type="submit"  name="" class="btn btn-outline-primary">2025</button>
                      </div>
              </div>
              <canvas id="representation2"></canvas> 
          </div>  
  </div> 

  </div>


  <!-- Coulages,,Representation 3 -->
  <div class="col">

      <div class="card">  
              <div class="card-body">
              <div class="row">
                   <h5 class="col card-title h6 fw-bold">Coulages</h5>
                   <div class="col btn-group" role="group" aria-label="Basic outlined example">
                      <button type="submit" name="" class="btn btn-outline-primary">2023</button>
                      <button type="submit" name="" class="btn btn-outline-primary">2024</button>
                      <button type="submit"  name="" class="btn btn-outline-primary">2025</button>
                   </div>
              </div>
              <canvas id="representation3"></canvas>          
              </div> 
    </div>

  </div>




  </div>


 
  <div class=" mt-0 row">
 <!-- Contributions Volumes,Representation 4  -->
<div class="col">
       <div class="card">  
            <div class="card-body">
              <div class="row">
                   <h5 class="col card-title h6 fw-bold">Contributions </h5>
                   <div class="col btn-group" role="group" aria-label="Basic outlined example">
                      <button type="submit" name="" class="btn btn-outline-primary">2023</button>
                      <button type="submit" name="" class="btn btn-outline-primary">2024</button>
                      <button type="submit"  name="" class="btn btn-outline-primary">2025</button>
                   </div>
              </div>
              <canvas id="representation4"></canvas>
            </div>  
      </div> 


</div>
 <!-- Representation 5  -->
<div class="col">

<div class="card">  
            <div class="card-body">
              <div class="row">
                   <h5 class="col card-title h6 fw-bold">Camions disponibles </h5>
                   <div class="col btn-group" role="group" aria-label="Basic outlined example">
                      <button type="submit" name="" class="btn btn-outline-primary">2023</button>
                      <button type="submit" name="" class="btn btn-outline-primary">2024</button>
                      <button type="submit"  name="" class="btn btn-outline-primary">2025</button>
                   </div>
              </div>
              <canvas id="representation5"></canvas>
            </div>  
      </div> 

</div>

 <!-- Representation 6  -->
<div class="col">
<div class="card">  
            <div class="card-body">
              <div class="row">
                   <h5 class="col card-title h6 fw-bold">HSSE KPI'S </h5>
                   <div class="col btn-group" role="group" aria-label="Basic outlined example">
                      <button type="submit" name="" value = "" class="btn btn-outline-primary">2023</button>
                      <button type="submit" name="" value = "" class="btn btn-outline-primary">2024</button>
                      <button type="submit"  name="" value = "" class="btn btn-outline-primary">2025</button>
                   </div>
              </div>

              <div class="row mt-5">
                   
              <div class="col">
                        <button type="button" class="btn btn-light border border-dark position-relative"> Kms parcourus (k000)
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-dark"> 1200</span>
                        </button>
                  </div>
                  <div class="col">
                        <button type="button" class="btn btn-light border border-dark position-relative"> Déversements
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-dark"> 9</span>
                        </button>
                  </div>
                  
              </div>

              <div class="row mt-3 mb-5">
                 <div class="col">
                        <button type="button" class="btn btn-light border border-dark  position-relative"> Rollovers
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-dark"> 0</span>
                        </button>
                  </div>

                  <div class="col">
                        <button type="button" class="btn btn-light border border-dark position-relative"> Incidents
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-dark"> 1</span>
                        </button>
                  </div>

                  <div class="col">
                        <button type="button" class="btn btn-light border border-dark position-relative"> PI
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-dark"> 125</span>
                        </button>
                  </div>
                  
                  
              </div>


            </div>  
      </div> 
</div>


</div>
  </div>

   <!----------------------------------------------------------------------------------------------------------------->
<?php include "includes/footer.php"; ?>