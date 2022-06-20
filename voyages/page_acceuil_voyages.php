<?php session_start(); ?>
<?php include "includes/voyages_header.php"; ?>
<!-------------------------------------------------------------------->

<div class="container">


<div class="row d-flex justify-content-around">

     <div class="col"></div> 
     <!--Titre de la page -->
      
      <div class="col text-center mt-1 mx-auto card">
      <div class="py-2">
          <h5 class="h4 card-title"><?php echo($_SESSION['sess_profil']) ?></h5>
      </div>
      </div>

      <!--Titre de la page -->
      <div class="ms-2 col text-center mt-1 mx-auto card">
      <div class="py-2">
          <h5 class="h4 card-title">Performances</h5>
      </div>
      </div>

      <div class="col"></div> 
</div>

<!--les lignes des KPIS -->
<div class="mt-1 row">   <!--Premiere ligne des KPIS -->

<div class="col">

    <div class="card border-warning" style="max-width: 18rem;">
    <div class="card-header">Voyages</div>
    <div class="card-body text-dark">
          <h6 class="card-title fw-bold">En cours d'exécution</h6>
          <p class="card-text">
          <button type="button" class="btn btn-outline-primary w-100">
          Notifications <span class="ms-5 badge bg-secondary fs-6">44</span>
          </button>
          <button type="button" class="mt-1 btn btn-outline-primary w-100">
          Notifications <span class="ms-5 badge bg-secondary fs-6">23</span>
          </button>
          <button type="button" class="mt-1 btn btn-outline-primary w-100">
          Notifications <span class="ms-5 badge bg-secondary fs-6">23</span>
          </button>
          </p>
    </div>
    </div>        
</div>

<div class="col">

      <div class="card border-info" style="max-width: 18rem;">
      <div class="card-header">Voyages</div>
      <div class="card-body text-dark">
          <h6 class="card-title fw-bold">Terminés</h6>
          <p class="card-text">
          <button type="button" class="btn btn-outline-warning w-100">
          Notifications <span class="ms-5 badge bg-secondary fs-6">14</span>
          </button>
          <button type="button" class="mt-1 btn btn-outline-warning w-100">
          Notifications <span class="ms-5 badge bg-secondary fs-6">21</span>
          </button>
          <button type="button" class="mt-1 btn btn-outline-warning w-100">
          Total Général <span class="ms-5 badge bg-secondary fs-6">35</span>
          </button>

        </p>
      </div>
      </div>        
</div>

<div class="col">

  <div class="card border-success" style="max-width: 18rem;">

      <div class="card-header">Voyages</div>
      <div class="card-body text-dark">
            <h6 class="card-title fw-bold">De plus de <input class="mb-1 w-25 text-center" type="text" name="nbrejours" id="nbrejours"> Jours</h6>

            <div class="">
            <button type="submit" class="btn btn-outline-dark">Calculer</button>
            </div>

            <p class="card-text d-flex justify-content-center">                
            <span class="mt-2 mb-1 badge bg-dark text-white fs-1 rounded-circle ">99</span>
            </p>

      </div>

  </div>        
</div>


<div class="col">

    <div class="card border-dark" style="max-width: 18rem;">
          <div class="card-header">Voyages</div>
          <div class="card-body text-dark">
              <h6 class="mb-2 card-title fw-bold">Volumes</h6>
              <p class="card-text">
                
                    <button type="button" class="mt-1 btn btn-outline-secondary position-relative">
                      Transportés, à ce jour
                      <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary fs-6">
                      1 245 000
                      <span class="fs-6"> Litres </span>
                      </span>
                    </button>
                    <hr>
                    <button type="button" class="btn btn-outline-secondary position-relative">
                      Livrés, à ce jour 
                      <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary fs-6">
                      1 009 364
                      <span class="fs-6"> Litres</span>
                      </span>
                    </button>

              </p>
          </div>
    </div>        
</div>
 
</div>
<hr>

<div class="mt-1 row d-flex">  <!--Deuxiéme ligne des KPIS -->

  <div class="col">

      <div class = "d-flex">
              <div class = "ms-0 align-middle w-25">Cat 1</div>
              <div class="ms-1 w-75 mt-1 progress h-25">
                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20%</div>
              </div>
      </div>

      <div class = "d-flex">
              <div class = "ms-0 align-middle w-25">Cat 2</div>
              <div class="ms-1 w-75 mt-1 progress h-25">
                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
              </div>
      </div>

      <div class = "d-flex">
              <div class = "ms-0 align-middle w-25">Cat 3</div>
              <div class="ms-1 w-75 mt-1 progress h-25">
                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">15%</div>
              </div>
      </div>

      <div class = "d-flex">
              <div class = "ms-0 align-middle w-25">Cat 4</div>
              <div class="ms-1 w-75 mt-1 progress h-25">
                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">10%</div>
              </div>
      </div>
           
</div>

 

<div class="col">

    <div class = "d-flex">
            <div class = "ms-0 align-middle w-25">Cat 1</div>
            <div class="ms-1 w-75 mt-1 progress h-25">
              <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20%</div>
            </div>
    </div>

    <div class = "d-flex">
            <div class = "ms-0 align-middle w-25">Cat 2</div>
            <div class="ms-1 w-75 mt-1 progress h-25">
              <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
            </div>
    </div>

    <div class = "d-flex">
            <div class = "ms-0 align-middle w-25">Cat 3</div>
            <div class="ms-1 w-75 mt-1 progress h-25">
              <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">15%</div>
            </div>
    </div>

    <div class = "d-flex">
            <div class = "ms-0 align-middle w-25">Cat 4</div>
            <div class="ms-1 w-75 mt-1 progress h-25">
              <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">10%</div>
            </div>
    </div>
               
</div>

<div class="col">
    <div class = "d-flex">
        <div class = "ms-0 align-middle w-25">Cat 1</div>
        <div class="ms-1 w-75 mt-1 progress h-25">
          <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20%</div>
        </div>
    </div>

    <div class = "d-flex">
        <div class = "ms-0 align-middle w-25">Cat 2</div>
        <div class="ms-1 w-75 mt-1 progress h-25">
          <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
        </div>
    </div>

    <div class = "d-flex">
        <div class = "ms-0 align-middle w-25">Cat 3</div>
        <div class="ms-1 w-75 mt-1 progress h-25">
          <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">15%</div>
        </div>
    </div>

    <div class = "d-flex">
        <div class = "ms-0 align-middle w-25">Cat 4</div>
        <div class="ms-1 w-75 mt-1 progress h-25">
          <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">10%</div>
        </div>
    </div>
        
</div>


</div>


<hr>


 <!--La ligne pour le bouton "Operations Voyages" -->
<div class="row">

    <div class="col"></div>
    <div class="col"></div>
    <div class="col"></div>


    <div class="col d-flex align-items-end">
        <a class=" btn btn-secondary btn-lg" href="page_voyages.php">Opérations Voyages 
          <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
      <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
      </svg></a>        
    </div>

</div>


</div>



<!-------------------------------------------------------------------->
<?php include "includes/footer.php"; ?>