<?php session_start(); ?>
<?php include "includes/voyages_header.php"; ?>
<!-------------------------------------------------------------------->

<div class="container">



<!--Titre de la page -->
<div class="text-center mt-1 w-25 mx-auto card">
<div class="py-2">
    <h5 class="h4 card-title"><?php echo($_SESSION['sess_profil']) ?></h5>
</div>
</div>


<!--les colonnes des KPIS -->
<div class="mt-1 row">

<div class="col">

            <div class="card border-warning mb-1" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body text-dark">
               <h6 class="card-title fw-bold">Voyages en cours d'exécution</h6>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            </div>        
</div>

<div class="col">

            <div class="card border-info mb-1" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body text-dark">
               <h6 class="card-title fw-bold">Voyages terminées</h6>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            </div>        
</div>

<div class="col">

            <div class="card border-success mb-1" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body text-dark">
            <h6 class="card-title fw-bold">Voyages de plus de 14 jours</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            </div>        
</div>

<div class="col">

            <div class="card border-dark mb-1" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body text-dark">
            <h6 class="card-title fw-bold">Autre KPI pour Gestion Voyage</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            </div>        
</div>
 
</div>

<hr>
<!--Voyages, Cyclogrammes et Rapports -->
<div class="row">


<!--Premiere colonne -->
<div class="col">

<div class="mb-2 accordion" id="accordionExample1">

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
      <strong>
         <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" fill="#150452" class="bi bi-gear-fill" viewBox="0 0 16 16">
  <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
</svg>
         Modifier un Voyage</strong>
      </button>
    </h2>
    <div id="collapseOne1" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample1">
      <div class="accordion-body">
        This is the first item's accordion body.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
      <strong>
      <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" fill="#150452" class="bi bi-file-earmark-plus-fill" viewBox="0 0 16 16">
  <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM8.5 7v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 1 0z"/>
</svg>Créer un Voyage</strong>
      </button>
    </h2>
    <div id="collapseTwo1" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample1">
      <div class="accordion-body">
        This is the second item's accordion body.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree1">
      <strong>
      <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" fill="#150452" class="bi bi-book-fill" viewBox="0 0 16 16">
  <path d="M8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
</svg>Consulter un Voyage</strong>
      </button>
    </h2>
    <div id="collapseThree1" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample1">
      <div class="accordion-body">
        This is the third item's accordion body.
      </div>
    </div>
  </div>

</div>

</div>


<!--Deuxieme colonne -->
<div class="col me-1 ms-1">
 
<div class="mb-2 accordion" id="accordionExample2">

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
      <strong>
         <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" fill="#150452" class="bi bi-gear-fill" viewBox="0 0 16 16">
  <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
</svg>
         Modifier un Cyclogramme</strong>
      </button>
    </h2>
    <div id="collapseOne2" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample2">
      <div class="accordion-body">
        This is the first item's accordion body.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
      <strong>
      <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" fill="#150452" class="bi bi-file-earmark-plus-fill" viewBox="0 0 16 16">
  <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM8.5 7v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 1 0z"/>
</svg>Créer un Cyclogramme</strong>
      </button>
    </h2>
    <div id="collapseTwo2" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample2">
      <div class="accordion-body">
        This is the second item's accordion body.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
      <strong>
      <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" fill="#150452" class="bi bi-book-fill" viewBox="0 0 16 16">
  <path d="M8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
</svg>Consulter un Cyclogramme</strong>
      </button>
    </h2>
    <div id="collapseThree2" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample2">
      <div class="accordion-body">
        This is the third item's accordion body.
      </div>
    </div>
  </div>

</div>



</div>



<!--Troisieme colonne -->
<div class="col">

<div class="mb-2 accordion" id="accordionExample3">

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne3" aria-expanded="true" aria-controls="collapseOne3">
      <strong>
      <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" fill="#150452" class="bi bi-aspect-ratio-fill" viewBox="0 0 16 16">
  <path d="M0 12.5v-9A1.5 1.5 0 0 1 1.5 2h13A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5zM2.5 4a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 1 0V5h2.5a.5.5 0 0 0 0-1h-3zm11 8a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-1 0V11h-2.5a.5.5 0 0 0 0 1h3z"/>
</svg>Rapport 1</strong>
      </button>
    </h2>
    <div id="collapseOne3" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample3">
      <div class="accordion-body">
        This is the first item's accordion body.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo3" aria-expanded="false" aria-controls="collapseTwo3">
      <strong><svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" fill="#150452" class="bi bi-bar-chart-fill" viewBox="0 0 16 16">
  <path d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2z"/>
</svg>
         Rapport 2</strong>
      </button>
    </h2>
    <div id="collapseTwo3" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample3">
      <div class="accordion-body">
        This is the second item's accordion body.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
      <strong><svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" fill="#150452" class="bi bi-body-text" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M0 .5A.5.5 0 0 1 .5 0h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 0 .5Zm0 2A.5.5 0 0 1 .5 2h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5Zm9 0a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5Zm-9 2A.5.5 0 0 1 .5 4h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Zm5 0a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5Zm7 0a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Zm-12 2A.5.5 0 0 1 .5 6h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5Zm8 0a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5Zm-8 2A.5.5 0 0 1 .5 8h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5Zm7 0a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5Zm-7 2a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 0 1h-8a.5.5 0 0 1-.5-.5Zm0 2a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5Zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Z"/>
</svg>
         Rapport 3</strong>
      </button>
    </h2>
    <div id="collapseThree3" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample3">
      <div class="accordion-body">
        This is the third item's accordion body.
      </div>
    </div>
  </div>

</div>

</div>


</div>







</div>



<!-------------------------------------------------------------------->
<?php include "includes/footer.php"; ?>