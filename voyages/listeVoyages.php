<?php session_start(); ?>
<?php include "includes/voyages_header.php"; ?>
<?php include "includes/fonctionsVoyages.php"; ?>
<!-------------------------------------------------------------------->

<div class="mt-1">
<div class="mt-1 w-75 mx-auto"><button type="button" class="btn btn-secondary w-100 fw-bold fs-5">CRITERES SELECTION VOYAGES</button></div>
    <form action="" method="post">
        <div class="ms-5 row mt-2">
        <!--
                <div class="col mb-1"> 
                <select class="form-select text-primary" aria-label="Default select example" name="chauffeur">
                        <option selected>Choisir Chauffeur</option>
                        <?php     
                           // genererChauffeursCreationVoyage();                    
                        ?>;                         
                    </select>         
               
                </div>
-->   
                <div class="col mb-1"></div>     
                <div class="ms-5 col mb-1">          
                
                    <select class="form-select text-primary" aria-label="Default select example" name="camion" >
                        <option selected>Choisir Camions</option>
                        <?php     
                            genererCamionsCreationVoyage();                    
                        ?>;  
                    </select>
                </div>

                <div class="col mb-1">          
                    <Button type="submit" name="rechercher" class="btn btn-primary">Rechercher</Button>
                </div>
                <div class="col mb-1"></div>
                <div class="col mb-1"></div>
        
        
        </div>
    </form> 
    <?php 
        if(isset($_POST["rechercher"])){
            $camion = $_POST["camion"];
           // $chauffeur = $_POST["chauffeur"];
        }
    ?>

    <hr>
    <div class="mt-1 w-75 mx-auto"><button type="button" class="btn btn-secondary  w-100 fw-bold fs-5">RESULTATS DE SELECTION VOYAGES</button></div>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">Ref.</th>
        <th scope="col">Req Trans</th>
        <th scope="col">Depot Charg.</th>
        <th scope="col">Depot Livr.</th>
        <th scope="col">Chauf.</th>
        <th scope="col">Camion</th>
        <th scope="col">Transitaire</th>
        <th scope="col">Bon Enlvmt.</th>
        <th scope="col">Tournee</th>
        <th scope="col">Ord Charg.</th>
        <th scope="col">Plan Voy.</th>
        <th scope="col">Bord. Livr.</th>
        <th scope="col">Volume Livré</th>       
        <th scope="col">Statut</th>
        <th scope="col" class="text-primary">Edition</th>

        </tr>
    </thead>

    <tbody>
    
        <?php 
        if(isset($_POST["rechercher"])){       
            genererlisteVoyages($camion);
        }else{
            genererlistetouslesVoyages();
        }
        
        ?>
    </tbody>
    </table>
    <div class="row">
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col">
            <a class="btn btn-secondary btn-lg" href="page_voyages.php"><svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                    <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z"/>
                    </svg>Operations Voyages 
            </a>
        </div>
    </div>
</div>

<!-------------------------------------------------------------------->
<?php include "includes/footer.php"; ?>