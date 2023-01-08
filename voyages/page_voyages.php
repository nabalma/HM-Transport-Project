<?php session_start(); ?>
<?php include "includes/voyages_header.php"; ?>
<!-------------------------------------------------------------------->

<div class="mt-1 container">

  <div class="row mb-2 d-flex justify-content-around">

    <div class="col"></div> 
    <!--Titre de la page -->
  
    <div class="col text-center mt-2 mx-auto card">
    <div class="py-2">
        <h5 class="h4 card-title"><?php echo($_SESSION['sess_profil']) ?></h5>
    </div>
    </div>

    <!--Titre de la page -->
    <div class="ms-2 col text-center mt-2 mx-auto card">
    <div class="py-2">
        <h5 class="h4 card-title">Opérations</h5>
    </div>
    </div>

    <div class="col"></div> 
  </div>


<!--Voyages, Cyclogrammes et Rapports -->
<div class="row">


<!--Premiere colonne -->
<div class="col">
  <div class="btn btn-secondary text-center mb-1 w-100 fw-bold">
    <svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><path fill="currentColor" d="M4 3a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4Zm5 0a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H9Zm5 0a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1h-2Z"/></svg>
  SAFE TO DISPATCH</div>
 
<div class="mb-2 accordion" id="accordionExample2">

<div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour1" aria-expanded="true" aria-controls="collapseFour1">
      <strong>
      <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="1.8rem" height="1.8rem" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
        <path fill="#150452" d="M3 14h4v-4H3v4zm0 5h4v-4H3v4zM3 9h4V5H3v4zm5 5h13v-4H8v4zm0 5h13v-4H8v4zM8 5v4h13V5H8z"/>
      </svg>Lister les Safe to Dispatch</strong>
      </button>
    </h2>
    <div id="collapseFour1" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample1">
      <div class="accordion-body">
      <a type="submit" class="btn btn-outline-success" href="listeSafeToDisplay.php">Liste Safe to Dispatch</a>
      </div>
    </div>
  </div>


  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree1">
      <strong>
      <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" fill="#150452" class="bi bi-file-earmark-plus-fill" viewBox="0 0 16 16">
  <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM8.5 7v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 1 0z"/>
</svg>Creer un Safe to Dispatch</strong>
      </button>
    </h2>
    <div id="collapseThree1" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample1">
      <div class="accordion-body">
      <a type="submit" class="btn btn-outline-success" href="addFicheSafeToDispatch.php">Creer Safe to Dispatch</a>
      </div>
    </div>
  </div>

  <!--
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

-->

</div>

</div>


<!--Deuxieme colonne -->

<div class="col me-1 ms-1">
<div class="btn btn-secondary text-center mb-1 w-100 fw-bold">
  <svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M12 0L3 7l1.63 1.27L12 14l7.36-5.73L21 7l-9-7m7.37 10.73L12 16.47l-7.38-5.73L3 12l9 7l9-7l-1.63-1.27m0 5L12 21.47l-7.38-5.73L3 17l9 7l9-7l-1.63-1.27Z"/></svg>
VOYAGES</div>

<div class="mb-2 accordion" id="accordionExample1">


  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
      <strong>
      <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" fill="#150452" class="bi bi-body-text" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M0 .5A.5.5 0 0 1 .5 0h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 0 .5Zm0 2A.5.5 0 0 1 .5 2h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5Zm9 0a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5Zm-9 2A.5.5 0 0 1 .5 4h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Zm5 0a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5Zm7 0a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Zm-12 2A.5.5 0 0 1 .5 6h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5Zm8 0a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5Zm-8 2A.5.5 0 0 1 .5 8h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5Zm7 0a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5Zm-7 2a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 0 1h-8a.5.5 0 0 1-.5-.5Zm0 2a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5Zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Z"/>
</svg>
         Lister les voyages</strong>
      </button>
    </h2>
    <div id="collapseOne1" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample1">
      <div class="accordion-body">
      <a type="submit" class="btn btn-outline-success" href="listeVoyages.php">Liste des Voyages</a>  
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
      <strong>
      <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" fill="#150452" class="bi bi-file-earmark-plus-fill" viewBox="0 0 16 16">
  <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM8.5 7v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 1 0z"/>
</svg>Créer un Voyage</strong>
      </button>
    </h2>
    <div id="collapseTwo1" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample1">
      <div class="accordion-body">
      <a type="submit" class="btn btn-outline-success" href="addVoyages.php">Créer Voyage</a>
      </div>
    </div>
  </div>


 

  

</div>

</div>


<!--Troisieme colonne -->
<div class="col">
<div class="btn btn-secondary text-center mb-1 w-100 fw-bold">
  <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48"><path fill="currentColor" fill-rule="evenodd" d="M29 6v8h13v2H29v7h13V8c0-1.105-.836-2-1.867-2H29Zm0 19h13v7H29v-7Zm0 9h13v6c0 1.105-.836 2-1.867 2H29v-8Zm-2 0v8H15.867C14.836 42 14 41.105 14 40v-6h13Zm0-20H14V8c0-1.105.836-2 1.867-2H27v8Zm-3.948 2v7H27v-7h-3.948Zm0 9v7H27v-7h-3.948ZM6 17a1 1 0 0 1 1-1h13.158a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V17Zm3.607 2h2.26l1.834 3.754L15.64 19h2.112l-2.91 5l2.976 5H15.59l-1.999-3.93l-1.99 3.93H9.34l3.024-5.018L9.607 19Z" clip-rule="evenodd"/></svg>
RAPPORTS EXCEL</div>
<div class="mb-2 accordion" id="accordionExample3">

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne3" aria-expanded="true" aria-controls="collapseOne3">
      <strong>
      <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" fill="#150452" class="bi bi-aspect-ratio-fill" viewBox="0 0 16 16">
  <path d="M0 12.5v-9A1.5 1.5 0 0 1 1.5 2h13A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5zM2.5 4a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 1 0V5h2.5a.5.5 0 0 0 0-1h-3zm11 8a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-1 0V11h-2.5a.5.5 0 0 0 0 1h3z"/>
</svg>LISTE DES SAFE TO DISPATCH</strong>
      </button>
    </h2>
    <div id="collapseOne3" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample3">
      <div class="accordion-body">
        <form action="reportsVoyage.php" method="post">
        <button class="btn btn-outline-dark" type="submit" name="tousLesSafeToDispatchExcel">EXPORTER STD XLS</button>
        </form>
    </div>
    </div>
  </div>
  

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo3" aria-expanded="false" aria-controls="collapseTwo3">
      <strong><svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" fill="#150452" class="bi bi-bar-chart-fill" viewBox="0 0 16 16">
  <path d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2z"/>
</svg>
         LISTE DES VOYAGES</strong>
      </button>
    </h2>
    <div id="collapseTwo3" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample3">
      <div class="accordion-body">
      <form action="reportsVoyage.php" method="post">
        <button class="btn btn-outline-dark" type="submit" name="tousLesVoyagesExcel">EXPORTER VOYAGES XLS</button>
        </form>
      </div>
    </div>
  </div>

  
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
      <strong><svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path fill="#150452" d="M10 18h8v2h-8zm0-5h12v2H10zm0 10h5v2h-5z"/><path fill="currentColor" d="M25 5h-3V4a2 2 0 0 0-2-2h-8a2 2 0 0 0-2 2v1H7a2 2 0 0 0-2 2v21a2 2 0 0 0 2 2h18a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2ZM12 4h8v4h-8Zm13 24H7V7h3v3h12V7h3Z"/></svg>
         LISTE DES CAMIONS</strong>
      </button>
    </h2>
    <div id="collapseThree3" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample3">
      <div class="accordion-body">
      <form action="reportsVoyage.php" method="post">
        <button class="btn btn-outline-dark" type="submit" name="tousLesCamionsExcel">EXPORTER CAMIONS XLS</button>
        </form>
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour3" aria-expanded="false" aria-controls="collapseFour3">
      <strong><svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="#150452" d="M2 2h2v18h18v2H2V2m12 12.5L12 18H7.94l-2.02-3.5L7.94 11H12l2 3.5m.08-8L12.06 10H8L6 6.5L8 3h4.06l2.02 3.5m7.17 4L19.23 14h-4.04l-2.02-3.5L15.19 7h4.04l2.02 3.5Z"/></svg>
         LISTE DES CHAUFFEURS</strong>
      </button>
    </h2>
    <div id="collapseFour3" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample3">
      <div class="accordion-body">
      <form action="reportsVoyage.php" method="post">
        <button class="btn btn-outline-dark" type="submit" name="tousLesChauffeursExcel">EXPORTER CHAUFFEURS XLS</button>
        </form>
      </div>
    </div>
  </div>


</div>

</div>


</div>
<hr>

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
