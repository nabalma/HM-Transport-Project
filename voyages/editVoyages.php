<?php session_start(); ?>
<?php include "includes/voyages_header.php"; ?>
<?php include "includes/fonctionsVoyages.php"; ?>

<!-------------------------------------------------------------------->

<?php 
$row;
if(isset($_GET['refVoy'])){
    $ref=$_GET['refVoy'];
    $row = rechercherleVoyage($ref);

    $lecamion=rechercherlesDonneesduCamion($row["ref_Camion_Voyage"]);
    $capaciteCamion=$lecamion["capacite_Compatriment_C1"]+$lecamion["capacite_Compatriment_C2"]+$lecamion["capacite_Compatriment_C3"]+$lecamion["capacite_Compatriment_C4"]+$lecamion["capacite_Compatriment_C5"]+$lecamion["capacite_Compatriment_C6"];
}

?>





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
 
<form action="traitementEditVoyage.php?refVoyage=<?php echo $ref?>" method="POST"> 
    <div class="row">

        <!--Colonne Voyages -->
        <div class="col">
        

                    <div class="row">
                    <button class="mb-1 col btn btn-light me-2 text-white fs-6" style="background-Color:#150452"><svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" fill="orange" class="bi bi-gear-fill" viewBox="0 0 16 16">
        <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
        </svg>VOYAGES</button> 
                    </div>
                

                    <div class="row g-0">
                    <div class="mb-1 row">
                        <div class="col"><label type="text" class="form-control bg-light" id="refVoyage">Ref.Voy</label></div>           
                        <div class="col"><input type="text" class="form-control bg-light text-danger text-center" id="refVoyage" name="refVoyage" disabled value=<?php echo $_GET["refVoy"]?>></input></div> 
                    
                    </div>
                    <div class="mb-1 row">
                    <div class="col"><label type="text" class="form-control bg-light" id="reqTransporteur">Req.Transporteur</label></div>
                        <div class="col"><input type="text" class="form-control bg-light text-primary" id="reqTransporteur" name="reqTransporteur" value=<?php echo $row["req_Transporteur"]?>></input></div> 
                        
                    
                    </div>
                    <div class="mb-1 row">
                        <div class="col"><label type="text" class="form-control bg-light" id="depotChargement">Depot de Chargmt</label></div>
                        <div class="col">

                        <select class="form-select text-primary" aria-label="Default select example" name="depotChargement">
                            <?php designationDepotChargement($row["depot_de_chargement"]) ?>
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
                            <?php designationDepotLivraison($row["depot_de_livraison"]) ?>
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
                            <?php designationChauffeur($row["ref_Chauffeur_Voyage"]) ?>
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
                            <?php designationCamion($row["ref_Camion_Voyage"]) ?>
                            <?php     
                                genererCamionsCreationVoyage();                    
                            ?>;  
                        </select>
                        </div>                    
                    </div>


                    <div class="mb-1 row">
                    <div class="col"><label type="text" class="form-control bg-light" id="besonabhy">Numéro BE (Sonabhy)</label></div>
                        <div class="col">
                        <input type="text" class="form-control bg-light text-primary" id="besonabhy" name="besonabhy" value=<?php echo $row["bon_dEnlevement_Sonabhy"] ?>></input>
                        </div>                    
                    </div>


                    <div class="mb-1 row">
                    <div class="col"><label type="text" class="form-control bg-light" id="transitaire">Transitaire</label></div>
                        <div class="col">
                        <select class="form-select text-primary" aria-label="Default select example" name="transitaire">
                           <?php designationTransitaire($row["ref_Transitaire"]) ?>
                            <?php     
                                genererTransitairesCreationVoyage();                    
                            ?>;  
                        </select>
                        </div>                    
                    </div>

                    <div class="mb-1 row">
                    <div class="col"><label type="text" class="form-control bg-light" id="tournee">Numéro Tournée (Marketer)</label></div>
                        <div class="col">
                        <input type="text" class="form-control bg-light text-primary" id="tournee" name="tournee" value=<?php echo $row["tournee_Marketer"] ?> ></input>
                        </div>                    
                    </div>

                    <div class="mb-1 row">
                    <div class="col"><label type="text" class="form-control bg-light" id="numoc">Numéro OC (Marketer)</label></div>
                        <div class="col">
                        <input type="text" class="form-control bg-light text-primary" id="numoc" name="numoc" value=<?php echo $row["ordre_de_Chargement_Marketer"] ?>></input>
                        </div>                    
                    </div>




                    <div class="mb-1 row">
                    <div class="col"><label type="text" class="form-control bg-light" id="planvoyage">Numéro Plan de Voyage</label></div>
                        <div class="col">
                        <input type="text" class="form-control bg-light text-primary" id="planvoyage" name="planvoyage" value=<?php echo $row["plan_de_Voyage"] ?>></input>
                        </div>                    
                    </div>

                    <div class="mb-1 row">
                    <div class="col"><label type="text" class="form-control bg-light" id="numbl">Numéro BL (Livraison)</label></div>
                        <div class="col">
                        <input type="text" class="form-control bg-light text-primary" id="numbl" name="numbl" value=<?php echo $row["bL_Livraison_Client"] ?>></input>
                        </div>                    
                    </div>

                    <div class="mb-1 row">
                    <div class="col"><label type="text" class="form-control bg-light" id="statutVoyage">Statut Voyage</label></div>
                        <div class="col">
                        <select class="form-select text-primary" aria-label="Default select example" name="statutVoyage">
                            <?php designationStatutVoyage($row["statutVoyage"]) ?>
                            <?php     
                                genererStatutVoyage();                    
                            ?>;  
                        </select>
                        </div>                    
                    </div>

                    <div class="mb-1 row">
                    <div class="col"><label type="text" class="form-control bg-light" id="vollivre">Volume Livré (Litres)</label></div>
                        <div class="col">
                        <input type="text" class="form-control bg-light text-primary" id="vollivre" name="vollivre" value=<?php echo $row["volume_livre"] ?>></input>
                        </div>                    
                    </div>

                    <div class="mb-1 row">
                    <div class="col"><label type="text" class="form-control bg-light text-secondary" id="coulage">Coulage (Litres)</label></div>
                        <div class="col">
                        <input type="text" class="form-control bg-light text-secondary" id="coulage" name="coulage" value=<?php echo $capaciteCamion-$row["volume_livre"] ?>></input>
                        </div>                    
                    </div>

                    <div class="mb-1 row">
                    <div class="col"><label type="text" class="form-control bg-light" id="">&nbsp</label></div>
                        <div class="col">
                        <input type="text" class="form-control bg-light text-secondary" id="" name="" value=""></input>
                        </div>                    
                    </div>

                    <div class="row">
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col"></div>                     
                    </div>

        

                

                
                
                </div>

        </div>


        <!--Colonne Cyclogramme -->
        <div class="col">
            <div class="row">
            <button class="mb-1 col btn btn-light ms-2 text-white fs-6" style="background-Color:#150452"><svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" fill="orange" class="bi bi-gear-fill" viewBox="0 0 16 16">
        <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
        </svg>CYCLOGRAMMES</button> 
            </div>
            <div class="row ms-2">
            <div class="col">

                
                <div class="mb-4 row"><label type="text" class="form-control bg-light " id="">Ref Prec(Terminé)</label></div>
                <hr>
                <div class="mb-1 row"><label type="text" class="form-control bg-light " id="">Date OC</label></div>
                <div class="mb-1 row"><label type="text" class="form-control bg-light " id="">Date Bon Sbhy</label></div>
                <div class="mb-1 row"><label type="text" class="form-control bg-light " id="">Date Départ</label></div>
                <div class="mb-1 row"><label type="text" class="form-control bg-light " id="">Date Arr Frt Allée</label></div>
                <div class="mb-1 row"><label type="text" class="form-control bg-light " id="">Date Arr Dpt Char</label></div>
                <div class="mb-1 row"><label type="text" class="form-control bg-light " id="">Date Charg</label></div>
                <div class="mb-1 row"><label type="text" class="form-control bg-light " id="">Déprt Dpt Charg</label></div>
                <div class="mb-1 row"><label type="text" class="form-control bg-light " id="">Arr frt Retour</label></div>
                <div class="mb-1 row"><label type="text" class="form-control bg-light " id="">Date Arr Ouaga</label></div>
                <div class="mt-4 row"></div>

            </div>
            <div class="col">

            <?php

            //Valeur par defaut, pour gerer les exception nulle
            $refVoyPrec= 'Inexistant';
            $dateArrVoyPrec='Pas de données';
            
            //Valeur reelle
            $voyPrec=rechercherlePrecedentVoyage($_GET["refVoy"]);
            if($voyPrec!=null){
                $refVoyPrec= $voyPrec["ref_Voyage"];
            $dateArrVoyPrec=$voyPrec["dateRetourDuSite"];
            }
            
            
            ?>

                <div class="row mb-4"><input type="text" class="me-2 form-control bg-light text-primary text-warning text-center" id="tournee" name="refVoyPrec" disabled value=<?php echo $refVoyPrec ?> ></input></div>
                <hr>
                <div class="row mb-1"><input type="Date" class="me-2 form-control bg-light text-primary" id="tournee" name="dateOC" value=<?php echo $row["dateOC"] ?>></input></div>
                <div class="row mb-1"><input type="Date" class="me-2 form-control bg-light text-primary" id="tournee" name="dateBonSbhy" value=<?php echo $row["dateBonSbhy"] ?>></input></div>
                <div class="row mb-1"><input type="Date" class="me-2 form-control bg-light text-primary" id="tournee" name="dateDepart" value=<?php echo $row["dateDepart"] ?>></input></div>
                <div class="row mb-1"><input type="Date" class="me-2 form-control bg-light text-primary" id="tournee" name="dateArrFrtAllee" value=<?php echo $row["dateArrFrtAllee"] ?>></input></div>
                <div class="row mb-1"><input type="Date" class="me-2 form-control bg-light text-primary" id="tournee" name="dateArrDeptChrgt" value=<?php echo $row["dateArrDepChargmt"] ?>></input></div>
                <div class="row mb-1"><input type="Date" class="me-2 form-control bg-light text-primary" id="tournee" name="dateChrgt" value=<?php echo $row["dateChargmt"] ?>></input></div>
                <div class="row mb-1"><input type="Date" class="me-2 form-control bg-light text-primary" id="tournee" name="dateDeparDptChrgmt" value=<?php echo $row["dateDepaDepChrgmt"] ?>></input></div>
                <div class="row mb-1"><input type="Date" class="me-2 form-control bg-light text-primary" id="tournee" name="dateArrFrtRetour" value=<?php echo $row["dateArrFrtRetour"] ?> ></input></div>
                <div class="row mb-1"><input type="Date" class="me-2 form-control bg-light text-primary" id="tournee" name="dateArrOuaga" value=<?php echo $row["dateArrOuaga"] ?>></input></div>
                <div class="mt-4 row"></div>

            </div>
            <div class="col ms-1 ">
                
                <div class="mb-4 row"><label type="text" class="form-control bg-light " id="">Arrivee Prec</label></div>      
                <hr>
                <div class="mb-1 row"><label type="text" class="form-control bg-light " id="">Date Sortie Bingo</label></div>
                <div class="mb-1 row"><label type="text" class="form-control bg-light " id="">Date Arr sur Site</label></div>
                <div class="mb-1 row"><label type="text" class="form-control bg-light " id="">Date Livraison</label></div>
                <div class="mb-1 row"><label type="text" class="form-control bg-light " id="">Sortie du Site</label></div>
                <div class="mb-1 row"><label type="text" class="form-control bg-light " id="">Date Retour</label></div>
                <div class="mb-1 row"><label type="text" class="form-control bg-light " id="">Inspection</label></div>
                <div class="mb-1 row"><label type="text" class="form-control bg-light " id="">Correction Insp.</label></div>
                <div class="mb-1 row"><label type="text" class="form-control bg-light " id="">Annalyse Suiv.</label></div>
                <div class="mb-1 row"><label type="text" class="form-control bg-light " id="">&nbsp</label></div>
                <div class="mt-4 row"></div>

            </div>
            <div class="col">
                
                <div class="row mb-4"><input type="Date" class="me-2 form-control bg-light text-warning text-center" id="tournee" name="dateArrVoyPrec" disabled value=<?php echo $dateArrVoyPrec ?>></input></div>  
                <hr>
                <div class="row mb-1"><input type="Date" class="me-2 form-control bg-light text-primary" id="tournee" name="dateSortieBingo" value=<?php echo $row["dateSortieBingo"] ?>></input></div>
                <div class="row mb-1"><input type="Date" class="me-2 form-control bg-light text-primary" id="tournee" name="dateArrSurSite" value=<?php echo $row["dateArrSurSite"] ?>></input></div>
                <div class="row mb-1"><input type="Date" class="me-2 form-control bg-light text-primary" id="tournee" name="dateLivraison" value=<?php echo $row["dateLivraison"] ?>></input></div>
                <div class="row mb-1"><input type="Date" class="me-2 form-control bg-light text-primary" id="tournee" name="dateSortieSite" value=<?php echo $row["dateSortieDuSite"] ?> ></input></div>
                <div class="row mb-1"><input type="Date" class="me-2 form-control bg-light text-primary" id="tournee" name="dateRetour" value=<?php echo $row["dateRetourDuSite"] ?> ></input></div>
                <div class="row mb-1"><input type="Date" class="me-2 form-control bg-light text-primary" id="tournee" name="dateInspection" value=<?php echo $row["dateInspection"] ?> ></input></div>
                <div class="row mb-1"><input type="Date" class="me-2 form-control bg-light text-primary" id="tournee" name="dateCorrInspect" value=<?php echo $row["dateCorrectionInspect"] ?>></input></div>
                <div class="row mb-1"><input type="Date" class="me-2 form-control bg-light text-primary" id="tournee" name="dateAnnalySuiv" value=<?php echo $row["dateAnalyseOBCSuiv"] ?>></input></div>               
                <div class="row mb-1"> <input type="text" class="me-2 form-control bg-light text-primary" id="tournee" name="" value=""></input></div>
               
                

            </div>


            </div>
            <div class="ms-2 row"><label type="text" class="form-control bg-light fw-bold" id="">Commentaires sur le voyage</label></div>
            <div class="ms-2 row"><textarea type="text" class="me-2 form-control bg-light text-dark" id="" name="commentaires"><?php echo $row["Commentaires"] ?></textarea></div>
            <div class="ms-2 mt-1 mb-1 row">  
                <button class="col btn btn-warning me-2" type="submit" value="" name="miseajourVoyage">Mise à Jour Voyage</button>
                <a class="col btn btn-info" href="cyclogramme.php?refVoy=<?php echo $ref ?>" value="" name="visionnerCyclo">Voir le Cyclogramme</a>
            </div>
        </div>
 
    </div>

</form>









 
 






<div class="row d-flex">
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


