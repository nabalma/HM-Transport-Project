<?php session_start(); ?>
<?php include "includes/voyages_header.php"; ?>
<?php include "includes/fonctionsVoyages.php"; ?>

<!-------------------------------------------------------------------->

<?php 
$row;
if(isset($_GET['refVoy'])){
    //Le voyage
    $ref=$_GET['refVoy'];
    $levoyage = rechercherleVoyage($ref);

    //Le depot de chargement
    $ledepoChargement=rechercherlesDonneesduDepotChargement($levoyage["depot_de_chargement"]);
    $targetDureeTrajetAlleeChargement=$ledepoChargement["Duree_Trajet_allee_Chargement_Target"];
    $targetDureeAuDepotChargement=$ledepoChargement["Duree_Avant_Chargement_Target"]+$ledepoChargement["Duree_Chargement_Target"]+$ledepoChargement["Duree_Formalite_Apres_Chargement_Target"];
    $targetDureeTrajetRetourFrontiere=$ledepoChargement["Duree_Trajet_Retour_DepotFrontiere_Target"];
    $targetDureeVoyageRetour=$ledepoChargement["Duree_Trajet_Retour_DepotFrontiere_Target"]+$ledepoChargement["Duree_Formalite_Transit_Frontière_Target"]+$ledepoChargement["Duree_Trajet_Retour_FrontiereArrivee_Target"];

    //Le transitaire
    $leTransitaire=rechercherlesDonneesduTransitaire($levoyage["ref_Transitaire"]);
    $targetDureeSejourPortSec=$leTransitaire["Duree_Traitement_BINGO_Target"];

    //Le site de Livraison
    $leSiteDeLivraison=rechercherlesDonneesduSiteDeLivraison($levoyage["depot_de_livraison"]);
    $targetDureeTrajetAllerSiteLivraison=$leSiteDeLivraison["Duree_Trajet_allee_Livraison_Target"];
    $targetDureeSurLeSiteDeLivraison=$leSiteDeLivraison["Duree_Avant_Livraison_Target"]+$leSiteDeLivraison["Duree_Livraison_Target"]+$leSiteDeLivraison["Duree_Formalite_Apres_Livraison_Target"];
    $targetDureeTrajetRetourDeLivraison=$leSiteDeLivraison["Duree_Trajet_Retour_Livraison_Target"];


    //Le camion
    $lecamion=rechercherlesDonneesduCamion($levoyage["ref_Camion_Voyage"]);
    $refmarketerDuCamion=$lecamion["Marketeur"];
    $leMarketeur=rechercherlesDonneesduMarketeur($refmarketerDuCamion);
    $dureePreparatifDepart=$leMarketeur["Duree_Emission_OC_Target"]+$leMarketeur["Duree_Emission_BonSnabhy_Target"];

}

?>


<div class="mt-1 container">
    <div class="row"><button class="btn btn-info fw-bold fs-4">CYCLOGRAMME</button></div>

    <div class="row">

        <table class="table w-75 mx-auto">
            <tr>
                <td style="width:20rem" rowspan="2" class="text-center align-middle fw-bold">Avant Départ</td>
                
                <td style="width:20rem">Date Ordre de Chargement</td>
                <td style="width:10rem"><div><?php echo $levoyage["dateOC"] ?></div></td>
                <td style="width:20rem"rowspan="2" class="text-center align-middle fw-bold fs-4" style="width: 65px;">
                <div style="font-size: 14px;color:#0713A0;">Durée Préparatif Départ</div>
                </td>
                <td rowspan="2" class="text-center align-middle fw-bold fs-4" style="width: 65px;"><div class="border border-dark rounded-circle"><?php echo abs((strtotime($levoyage["dateDepart"])- strtotime($levoyage["dateOC"]))/(60*60)/24) ?></div></td>

                <!--Target-->
                <td style="width:20rem"rowspan="2" class="text-center align-middle fw-bold fs-4" style="width: 65px;">
                <div style="font-size: 14px;">Target</div>
                </td>
                <td rowspan="2" class="text-center align-middle fw-bold fs-4" style="width: 65px"><div class="border border-dark rounded-circle"><?php echo round($dureePreparatifDepart/24,1) ?></div></td>
                
                 <!--Traffic Light -->
                 <td rowspan="2" class="text-center align-middle fw-bold fs-4" style="width: 80px;"><div <?php if((abs((strtotime($levoyage["dateDepart"])- strtotime($levoyage["dateOC"]))/(60*60)/24))>$dureePreparatifDepart/24){echo'class="rounded-circle bg-danger"';}else{echo'class="rounded-circle bg-success"';}?>>&nbsp</div></td>


            </tr>
            <tr>
               
                <td>Date Bon Sonabhy</td>
                <td><div><?php echo $levoyage["dateBonSbhy"] ?></div></td>
               
                 
            </tr>
            <tr class="bg-dark" style="color:aliceblue;">
                <td class="text-center align-middle fw-bold">Départ</td>
                <td>Date de Départ</td>
                <td><div><?php echo $levoyage["dateDepart"] ?></div></td>
                <td><svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" preserveAspectRatio="xMidYMid meet" viewBox="0 0 15 15"><path fill="white" d="M4.993 1.582a.5.5 0 1 0-.986-.164l-2 12a.5.5 0 1 0 .986.164l.67-4.02c.806.118 1.677.157 2.363.638a3.3 3.3 0 0 0 1.432.583c.966.146 1.83-.385 2.784-.234l1.289.194c.26.04.53-.16.569-.42l.884-5.934l.004-.004a.518.518 0 0 0-.427-.564l-1.289-.194c-.963-.143-1.829.373-2.783.23A2.8 2.8 0 0 1 7.3 3.38c-.739-.517-1.619-.603-2.486-.725l.18-1.074Zm-.59 3.538l.33-1.972c.599.082 1.233.129 1.788.369l-.295 1.965c-.57-.233-1.213-.278-1.822-.362Zm-.657 3.95l.33-1.974c.62.086 1.277.13 1.858.368l.3-1.976c.658.27 1.159.733 1.893.841l.3-1.98c.738.111 1.349-.177 2.058-.234l-.3 1.966c-.71.06-1.324.36-2.06.25l-.286 1.978c-.736-.11-1.238-.575-1.899-.844l-.3 1.976c-.595-.239-1.263-.281-1.894-.371Zm4.094-.76c.734.11 1.351-.192 2.061-.251l.284-1.978c.655-.06 1.325.111 1.968.209l-.28 1.976c-.644-.097-1.316-.269-1.971-.207l-.3 1.976c-.709.048-1.335.36-2.062.25l.3-1.976Z"/></svg></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
               
            </tr>
            <tr>
                <td rowspan="2" class="text-center align-middle fw-bold">Trajet Allée</td>
               
                <td>Date Arrivée Frontière Allée</td>
                <td><div><?php echo $levoyage["dateArrFrtAllee"] ?></div></td>
                <td rowspan="2" class="text-center align-middle fw-bold fs-4" style="width: 65px;">
                <div style="font-size: 14px;color:#0713A0;">Durée Trajet (Allée)</div>
                </td>
                <td rowspan="2" class="text-center align-middle fw-bold fs-4" style="width: 65px;"><div class="border border-dark rounded-circle"><?php echo abs((strtotime($levoyage["dateDepart"])- strtotime($levoyage["dateArrDepChargmt"]))/(60*60)/24) ?></div></td>

                <!--Target-->
                <td style="width:12rem"rowspan="2" class="text-center align-middle fw-bold fs-4" style="width: 65px;">
                <div style="font-size: 14px;">Target</div>
                </td>
                <td rowspan="2" class="text-center align-middle fw-bold fs-4" style="width: 65px;"><div class="border border-dark rounded-circle" ><?php echo round($targetDureeTrajetAlleeChargement/24,1) ?></div></td>
                
                <!--Traffic Light -->
                <td rowspan="2" class="text-center align-middle fw-bold fs-4" style="width: 80px;"><div <?php if((abs((strtotime($levoyage["dateDepart"])- strtotime($levoyage["dateArrDepChargmt"]))/(60*60)/24))>$targetDureeTrajetAlleeChargement/24){echo'class="rounded-circle bg-danger"';}else{echo'class="rounded-circle bg-success"';}?>>&nbsp</div></td>
                
            </tr>
            <tr>
                
                <td>Date d'Arrivée Depot Chargement</td>
                <td><?php echo $levoyage["dateArrDepChargmt"] ?></div></td>
               
                  
            </tr>
            <tr>
                <td rowspan="2" class="text-center align-middle fw-bold">Chargement</td>
                <td >Date de Chargement</td>
                <td><div><?php echo $levoyage["dateChargmt"] ?></div></td>
                <td rowspan="2" class="text-center align-middle fw-bold fs-4" style="width: 65px;">
                <div style="font-size: 14px;color:#0713A0;">Durée au Dépot de Chargement</div>
                </td>

                <td rowspan="2" class="text-center align-middle fw-bold fs-4" style="width: 65px;">               
                <div class="border border-dark rounded-circle"><?php echo abs((strtotime($levoyage["dateDepaDepChrgmt"])- strtotime($levoyage["dateArrDepChargmt"]))/(60*60)/24) ?></div>
                </td>

                <!--Target-->
                <td style="width:12rem"rowspan="2" class="text-center align-middle fw-bold fs-4" style="width: 65px;">
                <div style="font-size: 14px;">Target</div>
                </td>
                <td rowspan="2" class="text-center align-middle fw-bold fs-4" style="width: 65px;"><div class="border border-dark rounded-circle" ><?php echo round($targetDureeAuDepotChargement/24,1) ?></div></td>
                
                <!--Traffic Light -->
                <td rowspan="2" class="text-center align-middle fw-bold fs-4" style="width: 80px;"><div <?php if((abs((strtotime($levoyage["dateDepaDepChrgmt"])- strtotime($levoyage["dateArrDepChargmt"]))/(60*60)/24))>$targetDureeAuDepotChargement/24){echo'class="rounded-circle bg-danger"';}else{echo'class="rounded-circle bg-success"';}?>>&nbsp</div></td>

               
                
            </tr>
            <tr>
              
                <td >Départ Dépot de Chargement</td>
                <td><?php echo $levoyage["dateDepaDepChrgmt"] ?></div></td>
               
               
                
            </tr>
            <tr>
                <td class="text-center align-middle fw-bold">Trajet Retour</td>
               
                <td>Date Arrivée Frontière Retour</td>
                <td><?php echo $levoyage["dateArrFrtRetour"] ?></div></td>
                <td class="text-center align-middle fw-bold fs-4" style="width: 65px;">
                <div style="font-size: 14px;color:#0713A0;">Durée trajet Retour Frontiere</div>
                </td>

                <td class="text-center align-middle fw-bold fs-4" style="width: 65px;">               
                <div class="border border-dark rounded-circle"><?php echo abs((strtotime($levoyage["dateDepaDepChrgmt"])- strtotime($levoyage["dateArrFrtRetour"]))/(60*60)/24) ?></div>
                </td>
                <!--Target-->
                <td style="width:12rem" class="text-center align-middle fw-bold fs-4" style="width: 65px;">
                <div style="font-size: 14px;">Target</div>
                </td>
                <td class="text-center align-middle fw-bold fs-4" style="width: 65px;"><div class="border border-dark rounded-circle" ><?php echo round($targetDureeTrajetRetourFrontiere/24,1) ?></div></td>

                <!--Traffic Light -->
                <td class="text-center align-middle fw-bold fs-4" style="width: 80px;"><div <?php if((abs((strtotime($levoyage["dateDepaDepChrgmt"])- strtotime($levoyage["dateArrFrtRetour"]))/(60*60)/24))>$targetDureeTrajetRetourFrontiere/24){echo'class="rounded-circle bg-danger"';}else{echo'class="rounded-circle bg-success"';}?>>&nbsp</div></td>
                
            </tr>
           
            <tr>
                <td class="text-center align-middle fw-bold">Arrivée</td>
                <td>Date Arrivée Ouaga</td>
                <td><div><?php echo $levoyage["dateArrOuaga"] ?></div></td>
                <td class="text-center align-middle fw-bold fs-4" style="width: 65px;">
                <div style="font-size: 14px;color:#0713A0;">Durée Voyage Retour</div>
                </td>

                <td class="text-center align-middle fw-bold fs-4" style="width: 65px;">               
                <div class="border border-dark rounded-circle"><?php echo abs((strtotime($levoyage["dateDepaDepChrgmt"])- strtotime($levoyage["dateArrOuaga"]))/(60*60)/24) ?></div>
                </td>
                
                 <!--Target-->
                 <td style="width:12rem" class="text-center align-middle fw-bold fs-4" style="width: 65px;">
                <div style="font-size: 14px;">Target</div>
                </td>
                <td class="text-center align-middle fw-bold fs-4" style="width: 65px;"><div class="border border-dark rounded-circle" ><?php echo  round($targetDureeVoyageRetour/24,1) ?></div></td>
                
                <!--Traffic Light -->
                <td class="text-center align-middle fw-bold fs-4" style="width: 80px;"><div <?php if((abs((strtotime($levoyage["dateDepaDepChrgmt"])- strtotime($levoyage["dateArrOuaga"]))/(60*60)/24))>$targetDureeVoyageRetour/24){echo'class="rounded-circle bg-danger"';}else{echo'class="rounded-circle bg-success"';}?>>&nbsp</div></td>
               
            </tr>
            <tr>
            <td rowspan="2" class="text-center align-middle fw-bold">Sortie pour Livraison</td>
                
                <td>Date de Sortie pour Livraison</td>
                <td><div><?php echo $levoyage["dateSortieBingo"] ?></div></td>
                <td class="text-center align-middle fw-bold fs-4" style="width: 65px;">
                <div style="font-size: 14px;color:#0713A0;">Durée Séjour Port Sec</div>
                </td>

                <td class="text-center align-middle fw-bold fs-4" style="width: 65px;">               
                <div class="border border-dark rounded-circle"><?php echo abs((strtotime($levoyage["dateSortieBingo"])- strtotime($levoyage["dateArrOuaga"]))/(60*60)/24) ?></div>
                </td>

                <!--Target-->
                <td style="width:12rem" class="text-center align-middle fw-bold fs-4" style="width: 65px;">
                <div style="font-size: 14px;">Target</div>
                </td>
                <td class="text-center align-middle fw-bold fs-4" style="width: 65px;"><div class="border border-dark rounded-circle" ><?php echo round($targetDureeSejourPortSec/24,1) ?></div></td>
                 
                 <!--Traffic Light -->
                 <td class="text-center align-middle fw-bold fs-4" style="width: 80px;"><div <?php if((abs((strtotime($levoyage["dateSortieBingo"])- strtotime($levoyage["dateArrOuaga"]))/(60*60)/24))>$targetDureeVoyageRetour/24){echo'class="rounded-circle bg-danger"';}else{echo'class="rounded-circle bg-success"';}?>>&nbsp</div></td>
            </tr>
            <tr>
                
                <td>Date d'arrivée Sur site de Livraison</td>
                <td><div><?php echo $levoyage["dateArrSurSite"] ?></div></td>
                <td class="text-center align-middle fw-bold fs-4" style="width: 65px;">
                <div style="font-size: 14px;color:#0713A0;">Durée Voyage Allée pour Livraison</div>
                </td>

                <td class="text-center align-middle fw-bold fs-4" style="width: 65px;">               
                <div class="border border-dark rounded-circle"><?php echo abs((strtotime($levoyage["dateSortieBingo"])- strtotime($levoyage["dateArrSurSite"]))/(60*60)/24) ?></div>
                </td>

                <!--Target-->
                <td style="width:12rem" class="text-center align-middle fw-bold fs-4" style="width: 65px;">
                <div style="font-size: 14px;">Target</div>
                </td>
                <td class="text-center align-middle fw-bold fs-4" style="width: 65px;"><div class="border border-dark rounded-circle" ><?php echo round($targetDureeTrajetAllerSiteLivraison/24,1) ?></div></td>
                
                 <!--Traffic Light -->
                 <td class="text-center align-middle fw-bold fs-4" style="width: 80px;"><div <?php if((abs((strtotime($levoyage["dateSortieBingo"])- strtotime($levoyage["dateArrSurSite"]))/(60*60)/24))>$targetDureeTrajetAllerSiteLivraison/24){echo'class="rounded-circle bg-danger"';}else{echo'class="rounded-circle bg-success"';}?>>&nbsp</div></td>

            </tr>
            <tr>
                <td class="text-center align-middle fw-bold">Livraison</td>
                <td>Date de Livraison</td>
                <td><div><?php echo $levoyage["dateLivraison"] ?></div></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
                
            </tr>
            <tr>
            <td rowspan="2" class="text-center align-middle fw-bold">Retour de Livraison</td>
            <td>Date de Sortie du Site de Livraison</td>
                <td><div><?php echo $levoyage["dateSortieDuSite"] ?></div></td>
                <td class="text-center align-middle fw-bold fs-4" style="width: 65px;">
                <div style="font-size: 14px;color:#0713A0;">Durée sur le site de Livraison</div>
                </td>

                <td class="text-center align-middle fw-bold fs-4" style="width: 65px;">               
                <div class="border border-dark rounded-circle"><?php echo abs((strtotime($levoyage["dateSortieDuSite"])- strtotime($levoyage["dateArrSurSite"]))/(60*60)/24) ?></div>
                </td>

                <!--Target-->
                <td style="width:12rem" class="text-center align-middle fw-bold fs-4" style="width: 55px;">
                <div style="font-size: 14px;">Target</div>
                </td>
                <td class="text-center align-middle fw-bold fs-4" style="width: 65px;"><div class="border border-dark rounded-circle" ><?php echo  round($targetDureeSurLeSiteDeLivraison/24,1) ?></div></td>
                
                <!--Traffic Light -->
                <td class="text-center align-middle fw-bold fs-4" style="width: 80px;"><div <?php if((abs((strtotime($levoyage["dateSortieDuSite"])- strtotime($levoyage["dateArrSurSite"]))/(60*60)/24))>$targetDureeTrajetAllerSiteLivraison/24){echo'class="rounded-circle bg-danger"';}else{echo'class="rounded-circle bg-success"';}?>>&nbsp</div></td>
                 
            </tr>
            <tr>
               
                <td>Date de Retour après Livraison</td>
                <td><div><?php echo $levoyage["dateRetourDuSite"] ?></div></td>
                <td class="text-center align-middle fw-bold fs-4" style="width: 65px;">
                <div style="font-size: 14px;color:#0713A0;">Durée Voyage Retour de Livraison</div>
                </td>

                <td class="text-center align-middle fw-bold fs-4" style="width: 65px;">               
                <div class="border border-dark rounded-circle"><?php echo abs((strtotime($levoyage["dateSortieDuSite"])- strtotime($levoyage["dateRetourDuSite"]))/(60*60)/24) ?></div>
                </td>

                <!--Target-->
                <td style="width:12rem" class="text-center align-middle fw-bold fs-4" style="width: 55px;">
                <div style="font-size: 14px;">Target</div>
                </td>
                <td class="text-center align-middle fw-bold fs-4" style="width: 65px;"><div class="border border-dark rounded-circle" ><?php echo round($targetDureeTrajetRetourDeLivraison/24,1) ?></div></td>
                
                 <!--Traffic Light -->
                 <td class="text-center align-middle fw-bold fs-4" style="width: 80px;"><div <?php if((abs((strtotime($levoyage["dateSortieDuSite"])- strtotime($levoyage["dateRetourDuSite"]))/(60*60)/24))>$targetDureeTrajetAllerSiteLivraison/24){echo'class="rounded-circle bg-danger"';}else{echo'class="rounded-circle bg-success"';}?>>&nbsp</div></td>
                 
            </tr>


            <tr class="bg-dark" style="color:aliceblue;">
                
            <td class="text-center align-middle fw-bold">DUREE TOTALE VOYAGE</td>
                <td></td>
                <td></td>
                <td><svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512"><path fill="white" d="M23 24v464h18V386.9c152.3 29.4 277.6 29.4 430 0V488h18V24h-18v16h-23v32h23v32h-23v32h23v232.6c-153.3 29.9-276.7 29.9-430 0V104h23V72H41V24H23zm41 48h32V40H64v32zm32 0v32h32V72H96zm32 0h32V40h-32v32zm32 0v32h32V72h-32zm32 0h32V40h-32v32zm32 0v32h32V72h-32zm32 0h32V40h-32v32zm32 0v32h32V72h-32zm32 0h32V40h-32v32zm32 0v32h32V72h-32zm32 0h32V40h-32v32zm32 0v32h32V72h-32zm0 32h-32v32h32v-32zm-64 0h-32v32h32v-32zm-64 0h-32v32h32v-32zm-64 0h-32v32h32v-32zm-64 0h-32v32h32v-32zm-64 0H64v32h32v-32z"/></svg></td>
               
                

                <td class="text-center align-middle fw-bold fs-4" style="width: 65px;">               
                <div class="border border-info rounded-circle bg-info text-light"><?php echo abs((strtotime($levoyage["dateRetourDuSite"])- strtotime($levoyage["dateDepart"]))/(60*60)/24) ?></div>
                </td>

                <!--Target-->
                <td style="width:12rem" class="text-center align-middle fw-bold fs-4" style="width: 65px;">
                <div style="font-size: 14px;">Target</div>
                </td>
                <td class="text-center align-middle fw-bold fs-4" style="width: 65px;"><div class="border border-dark rounded-circle bg-secondary text-white" ><?php echo round(($targetDureeTrajetAlleeChargement+$targetDureeAuDepotChargement+$targetDureeVoyageRetour+$targetDureeSejourPortSec+$targetDureeTrajetAllerSiteLivraison+$targetDureeSurLeSiteDeLivraison+$targetDureeTrajetRetourDeLivraison)/24,1) ?></div></td>
               
                 <!--Traffic Light -->
                 <td class="text-center align-middle fw-bold fs-4" style="width: 80px;"><div <?php if((abs((strtotime($levoyage["dateSortieDuSite"])- strtotime($levoyage["dateRetourDuSite"]))/(60*60)/24))>$targetDureeTrajetAllerSiteLivraison/24){echo'class="rounded-circle bg-danger"';}else{echo'class="rounded-circle bg-success"';}?>>&nbsp</div></td>

                 <td></td>


            </tr>

            <!-- PREPARATIFS VOYAGES SUIVANTS     -->
            <tr>
            <td rowspan="2" class="text-center align-middle fw-bold">Préparatifs Voyage suivant</td>
               
                <td>Date d'Inspection</td>
                <td><div><?php echo $levoyage["dateInspection"] ?></div></td>
                <td rowspan="3" class="text-center align-middle fw-bold fs-4" style="width: 65px;">
                <div style="font-size: 14px;color:#0713A0;">Durée Avant Prochain Voyage</div>
                </td>

                <td rowspan="3" class="text-center align-middle fw-bold fs-4" style="width: 65px;">               
                <div class="border border-dark rounded-circle"><?php echo abs((strtotime($levoyage["dateAnalyseOBCSuiv"])- strtotime($levoyage["dateRetourDuSite"]))/(60*60)/24) ?></div>
                </td>

                 <!--Target-->
                 <!--
                 <td style="width:12rem" rowspan="3" class="text-center align-middle fw-bold fs-4" style="width: 65px;">
                <div style="font-size: 14px;">Target</div>
                </td>
                <td rowspan="3" class="text-center align-middle fw-bold fs-4" style="width: 65px;"><div class="border border-dark rounded-circle" ><?php echo abs((strtotime($levoyage["dateDepart"])- strtotime($levoyage["dateOC"]))/(60*60)/24) ?></div></td>
                -->

                 
            </tr>
            <tr>
                
                <td>Date de Fin de Corrections</td>
                <td><div><?php echo $levoyage["dateCorrectionInspect"] ?></div></td>
               
                 
            </tr>
            <tr>
                <td class="text-center align-middle fw-bold">Analyse Voyage Suivant</td>
                <td>Date Analyse Voyage Suivant</td>
                <td><div><?php echo $levoyage["dateAnalyseOBCSuiv"] ?></div></td>               
            </tr>
            
           
        </table>
    </div>

</div>

<!-------------------------------------------------------------------->
<?php include "includes/footer.php"; ?>
