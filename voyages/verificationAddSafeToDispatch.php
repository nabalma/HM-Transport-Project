<?php session_start(); ?> 
<?php include "includes/voyages_header.php"; ?>
<?php include "includes/fonctionsVoyages.php"; ?>
<?php include "includes/fonctionsVerificationsSafeToDispatch.php"; ?>
<!-------------------------------------------------------------------->

<?php 

    if(isset($_POST["verifierSTD"])){

        $requeteTransporteur=$_POST["refRequete"];

        $refRequestDate=$_POST["requestDate"];

        $refTransporteur=$_POST["refTransporteur"];
       
        $refCamion=$_POST["refCamion"];
        $refProduit=$_POST["refProduit"];
        $dateDernierVoyage=$_POST["dateDernierVoyage"];
        $refLieuLivraison=$_POST["refLieuLivraison"];
        $dateDernierSafeLoad=$_POST["dateDernierSafeLoad"];
        $dateEcheanceAssurCamion=$_POST["dateEcheanceAssurCamion"];
        $dateEcheanceAssurProduit=$_POST["dateEcheanceAssurProduit"];
        $dateEcheanceCcva=$_POST["dateEcheanceCcva"];
        $dateEcheanceAssurBumigeb=$_POST["dateEcheanceAssurBumigeb"];
        $dateEcheanceAssurControlTech=$_POST["dateEcheanceAssurControlTech"];

        $extractionVideo=$_POST["extractionVideo"];
        $extractionVideo=$_POST["extractionVideo"];
        $etatObc=$_POST["etatObc"];
        $etatCamera=$_POST["etatCamera"];

        $refChauffeur=$_POST["refChauffeur"];
        $numPermis=$_POST["numPermis"];
        $dateFormationChauffeur=$_POST["echeanceFormationChauffeur"];

        $echeanceVisiteMedicale=$_POST["echeanceVisiteMedicale"];
        $dernierTrajet=$_POST["dernierTrajet"];
        $datedernierTrajet=$_POST["datedernierTrajet"];
        $commitViolation=$_POST["commitViolation"];
        $typeViolation=$_POST["typeViolation"];
        $dateViolation=$_POST["dateViolation"];


        $natureSanction=$_POST["natureSanction"];
        $nbreJoursRestantSanction=$_POST["nbreJoursRestantSanction"];
        $soldePointsScp=$_POST["soldePointsScp"];

        $dateDerniereSensibilisation=$_POST["dateDerniereSensibilisation"];
        $themesAbordes=$_POST["themesAbordes"];
       
    };
    

    if(isset($_POST["soumettre"])){

        $requeteTransporteur=$_POST["refRequete"];
        $refRequestDate=$_POST["requestDate"];
 
         $refTransporteur=$_POST["verifRefTransporteur"];
         $refCamion=$_POST["verifRefCamion"];
         $refProduit=$_POST["verifRefProduit"];
         $dateDernierVoyage=$_POST["dateDernierVoyage"];
         $refLieuLivraison=$_POST["verifSiteSitedeDepotage"];


         $dateDernierSafeLoad=$_POST["dateDernierSafeLoad"];
         $dateEcheanceAssurCamion=$_POST["dateEcheanceAssurCamion"];
         $dateEcheanceAssurProduit=$_POST["dateEcheanceAssurProduit"];
         $dateEcheanceCcva=$_POST["dateEcheanceCcva"];
         $dateEcheanceAssurBumigeb=$_POST["dateEcheanceAssurBumigeb"];
         $dateEcheanceAssurControlTech=$_POST["dateEcheanceAssurControlTech"];
 
         $extractionVideo=$_POST["extractionVideo"];
         $extractionVideo=$_POST["extractionVideo"];
         $etatObc=$_POST["etatObc"];
         $etatCamera=$_POST["etatCamera"];
 
         $refChauffeur=$_POST["verifRefChauffeur"];
         $numPermis=$_POST["numPermis"];
         $dateFormationChauffeur=$_POST["echeanceFormationChauffeur"];
 
         $echeanceVisiteMedicale=$_POST["echeanceVisiteMedicale"];
         $dernierTrajet=$_POST["dernierTrajet"];
         $datedernierTrajet=$_POST["datedernierTrajet"];
         $commitViolation=$_POST["commitViolation"];
         $typeViolation=$_POST["typeViolation"];
         $dateViolation=$_POST["dateViolation"];
 
 
         $natureSanction=$_POST["natureSanction"];
         $nbreJoursRestantSanction=$_POST["nbreJoursRestantSanction"];
         $soldePointsScp=$_POST["soldePointsScp"];
 
         $dateDerniereSensibilisation=$_POST["dateDerniereSensibilisation"];
         $themesAbordes=$_POST["themesAbordes"];
        
 
        ajouterUnSafeToDispatch($refRequestDate,$refTransporteur,$refCamion,$refProduit,$dateDernierVoyage,$refLieuLivraison,$dateDernierSafeLoad,$dateEcheanceAssurCamion,$dateEcheanceAssurProduit,$dateEcheanceCcva,$dateEcheanceAssurBumigeb,$dateEcheanceAssurControlTech,$extractionVideo,$etatObc,$etatCamera,$refChauffeur,$numPermis,$dateFormationChauffeur,$echeanceVisiteMedicale,$dernierTrajet,$datedernierTrajet,$commitViolation,$typeViolation,$dateViolation,$natureSanction,$nbreJoursRestantSanction,$soldePointsScp,$dateDerniereSensibilisation,$themesAbordes);
         
     }

     

    ?>

<div class="container">
    <!-- VERIFICATION SAFE TO DISPATCH --->
    <form action="verificationAddSafeToDispatch.php" method="post">  
<div class="ms-1 fs-4 btn btn-dark row w-100 py-0">FICHE SAFE TO DISPATCH </div>

<div class="ms-1 row">
        <div class="col-3" style="font-size:12px;">Reference</div>
        <div class="col-3"></div>       
        <div class="col-3">
        <input type="text" style="font-size:9px;" class="form-control bg-light text-danger text-center" id="refRequete" name="refRequete" value=<?php echo $requeteTransporteur ?>></input></div>
       
        <div class="col">(Page 1 sur 2)</div>
       
</div>

<div class="ms-1 row">
        <div class="col-3" style="font-size:12px;">DATE D'ETABLISSEMENT</div>
        <div class="col-3"></div>
        <div class="col-3"> <input type="text" style="font-size:9px;" class="form-control bg-light text-primary" id="reqDate" name="requestDate"  value=<?php echo $refRequestDate ?>></input></div>
        
        <div class="col"></div>
       
</div>

<div class="ms-1 row">
        <div class="col-3" style="font-size:12px;">NOM DU TRANSPORTEUR</div>
        <div class="col-3"><input type="text" style="font-size:9px;" class="form-control bg-light text-primary" id="verifRefTransporteur" name="verifRefTransporteur" value=<?php echo $refTransporteur?>></input></div>
        <div class="col-3"> <label type="text" style="font-size:9px;" class="form-control bg-light text-primary" id="transporteur" name="designationTransporteur"><?php designationTransporteurSafeToDispatch($refTransporteur)?></label></div>
        
        <div class="col" style="margin-left:43px;">
        <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path fill="green" d="M29.548 3.043a2.5 2.5 0 0 0-3.513.4L16 16.067l-3.508-4.414a2.5 2.5 0 0 0-3.915 3.112l5.465 6.875c.474.597 1.195.943 1.957.943s1.482-.35 1.957-.944L29.95 6.555c.86-1.08.68-2.654-.402-3.513zM24.5 24.5h-17v-17h12.756l2.385-3H6c-.83 0-1.5.67-1.5 1.5v20c0 .828.67 1.5 1.5 1.5h20a1.5 1.5 0 0 0 1.5-1.5V12.85l-3 3.774V24.5z"/></svg>    
        </div>
        
</div>

<div class="ms-1 row btn btn-light w-100 row text-danger fs-4 py-0">INFORMATIONS CAMION </div> 

<div class="ms-1 row">

    <div class="ms-1 row">
        <div class="btn btn-secondary text-center d-flex align-items-center justify-content-center" style="width:40px;height:30px"><label for="">1</label></div>
        <div style="font-size:10px;" class="col-5 d-flex align-items-center">IMMATRICULATION TRACTEUR & CITERNE</div>
       
        <div class="col-1">
        <input style="font-size:10px;" class="form-control bg-light text-primary" id="camion" name="verifRefCamion" value=<?php echo $refCamion?>></input> 
        </div>
        <div class="col-3">               
        <label style="font-size:10px;" class="form-control bg-light text-primary" id="camion" name="designationCamion"><?php designationCamionSafeToDispatchVerification($refCamion)?></label>             
        
        </div>
        <div class="col"><?php estCeQueLeCamionAppartientAuTransporteur($refTransporteur,$refCamion)?></div>
    </div>

    <div class="ms-1 row">
        <div class="btn btn-secondary text-center d-flex align-items-center justify-content-center" style="width:40px;height:30px"><label for="">2</label></div>
        <div style="font-size:10px;" class="col-5 d-flex align-items-center">NATURE DU PRODUIT TRANSPORTE/DEPOTE</div>
       
        <div class="col-1">
        <input style="font-size:10px;" class="form-control bg-light text-primary" id="produit" name="verifRefProduit" value=<?php echo $refProduit?>></input>                    
        </div>

        <div class="col-3">
        <label style="font-size:10px;" class="form-control bg-light text-primary" id="produit" name="designationProduit"><?php designationProduitSafeToDispatch($refProduit)?></label>                    
        </div>

        <div class="col"><?php estCeQueLeProduitEstCeluiDuCamion($refCamion,$refProduit)?></div>
    </div>

    <div class="ms-1 row">
        <div class="btn btn-secondary text-center d-flex align-items-center justify-content-center" style="width:40px;height:30px"><label for="">3</label></div>
        <div style="font-size:10px;" class="col-5 d-flex align-items-center">DATE DU DERNIER VOYAGE</div>
       
        <div class="col-4">
        <input style="font-size:10px;" class="form-control bg-light text-primary" id="dateDernierVoyage" name="dateDernierVoyage" value=<?php echo $dateDernierVoyage?>></input>             
        
        </div>
        <div class="col"></div>
    </div>

    <div class="ms-1 row">
        <div class="btn btn-secondary text-center d-flex align-items-center justify-content-center" style="width:40px;height:30px;margin-top:1.5px;margin-bottom:1.5px;"><label for="">4</label></div>
        <div style="font-size:10px;" class="col-5 d-flex align-items-center">SITE/LIEU DU DEPOTAGE</div>
       

        <div class="col-1">
        <input style="font-size:10px;margin-top:1.5px;margin-bottom:1.5px;" class="form-control bg-light text-primary" id="verifSitedeDepotage" name="verifSiteSitedeDepotage" value=<?php echo $refLieuLivraison?>></input>              
        </div>

        <div class="col-3">
        <label style="font-size:10px;margin-top:1.5px;margin-bottom:1.5px;" class="form-control bg-light text-primary" id="designationSitedeDepotage" name="designationSitedeDepotage" ><?php designationSiteDepotageSafeToDispatch($refLieuLivraison)?></label>              
        </div>

        <div class="col"></div>
    </div>

    <div class="ms-1 row">
        <div class="btn btn-secondary text-center d-flex align-items-center justify-content-center" style="width:40px;height:30px"><label for="">5</label></div>
        <div style="font-size:10px;" class="col-5 d-flex align-items-center">DATE DU DERNIER SAFE TO LOAD</div>
       
        <div class="col-4">
        <input style="font-size:10px;" class="form-control bg-light text-primary" id="dateDernierSafeLoad" name="dateDernierSafeLoad" value=<?php echo $dateDernierSafeLoad?>></input>             
        
        </div>
        <div class="col"><?php estCeQueLeSafeToLoadEstConforme($refRequestDate,$dateDernierSafeLoad)?></div>
    </div>

    <div class="ms-1 row">
        <div class="btn btn-secondary text-center d-flex align-items-center justify-content-center" style="width:40px;height:30px"><label for="">6</label></div>
        <div style="font-size:10px;" class="col-5 d-flex align-items-center">DATE ECHEANCE ASSURANCE CAMION</div>
       
        <div class="col-4">
        <input style="font-size:10px;" class="form-control bg-light text-primary" id="dateEcheanceAssurCamion" name="dateEcheanceAssurCamion" value=<?php echo $dateEcheanceAssurCamion?>></input>                    
        
        </div>
        <div class="col"><?php estCeQueLeCritereEstConforme($refRequestDate,$dateEcheanceAssurCamion)?></div>
    </div>

    <div class="ms-1 row">
        <div class="btn btn-secondary text-center d-flex align-items-center justify-content-center" style="width:40px;height:30px"><label for="">7</label></div>
        <div style="font-size:10px;" class="col-5 d-flex align-items-center">DATE ECHEANCE ASSURANCE PRODUIT</div>
       
        <div class="col-4">
        <input style="font-size:10px;" class="form-control bg-light text-primary" id="dateEcheanceAssurProduit" name="dateEcheanceAssurProduit" value=<?php echo $dateEcheanceAssurProduit?>></input>                      
        
        </div>
        <div class="col"><?php estCeQueLeCritereEstConforme($refRequestDate,$dateEcheanceAssurProduit)?></div>
    </div>

    <div class="ms-1 row">
        <div class="btn btn-secondary text-center d-flex align-items-center justify-content-center" style="width:40px;height:30px"><label for="">8</label></div>
        <div style="font-size:10px;" class="col-5 d-flex align-items-center">DATE ECHEANCE CCVA</div>
       
        <div class="col-4">
        <input style="font-size:10px;" class="form-control bg-light text-primary" id="dateEcheanceCcva" name="dateEcheanceCcva" value=<?php echo $dateEcheanceCcva?>></input>    
        
        </div>
        <div class="col"><?php estCeQueLeCritereEstConforme($refRequestDate,$dateEcheanceCcva)?></div>
    </div>

    <div class="ms-1 row">
        <div class="btn btn-secondary text-center d-flex align-items-center justify-content-center" style="width:40px;height:30px"><label for="">9</label></div>
        <div style="font-size:10px;" class="col-5 d-flex align-items-center">DATE ECHEANCE BUMIGEB</div>
       
        <div class="col-4">
        <input style="font-size:10px;" class="form-control bg-light text-primary" id="dateEcheanceAssurBumigeb" name="dateEcheanceAssurBumigeb" value=<?php echo $dateEcheanceAssurBumigeb?>></input>           
        
        </div>
        <div class="col"><?php estCeQueLeCritereEstConforme($refRequestDate,$dateEcheanceAssurBumigeb)?></div>
    </div>

    <div class="ms-1 row">
        <div class="btn btn-secondary text-center d-flex align-items-center justify-content-center" style="width:40px;height:30px"><label for="">10</label></div>
        <div style="font-size:10px;" class="col-5 d-flex align-items-center">DATE ECHEANCE CONTROLE TECHNIQUE</div>
       
        <div class="col-4">
        <input style="font-size:10px;" class="form-control bg-light text-primary" id="dateEcheanceAssurControlTech" name="dateEcheanceAssurControlTech" value=<?php echo $dateEcheanceAssurControlTech?>></input>       
        
        </div>
        <div class="col"><?php estCeQueLeCritereEstConforme($refRequestDate,$dateEcheanceAssurControlTech)?></div>
    </div>


    <div class="ms-1 row">
    <div class="btn btn-secondary text-center d-flex align-items-center justify-content-center" style="width:40px;height:30px"><label for="">11</label></div>
        <div style="font-size:10px;" class="col-5 d-flex align-items-center">EXTRACTION VIDEO REALISEE ?</div>
        <div class="col-3 d-flex">
                    <div class="form-check form-check-inline me-5">
                        <input class="form-check-input" type="radio" name="extractionVideo" id="extractionVideo1" value="1" <?php if($extractionVideo=="1"){echo 'checked';}?>>
                        <label class="form-check-label" for="inlineRadio1">Oui</label>
                    </div>
                    <div class="form-check form-check-inline me-3">
                        <input class="form-check-input" type="radio" name="extractionVideo" id="extractionVideo0" value="0" <?php if($extractionVideo=="0"){echo 'checked';}?>>
                        <label class="form-check-label" for="inlineRadio2">Non</label>
                    </div>
        </div>
        <div class="col ms-5"><?php estCeQueCameraOuOBCEstConforme($extractionVideo)?></div>
       
    </div>

    <div class="ms-1 row">
    <div class="btn btn-secondary text-center d-flex align-items-center justify-content-center" style="width:40px;height:30px"><label for="">12</label></div>
        <div style="font-size:10px;" class="col-5 d-flex align-items-center">L'OBC EST-IL EN BON ETAT ET FONCTIONNEL ?</div>
        <div class="col-3 d-flex">
                    <div class="form-check form-check-inline me-5">
                        <input class="form-check-input" type="radio" name="etatObc" id="etatObc1" value="1" <?php if($etatObc=="1"){echo 'checked';}?>>
                        <label class="form-check-label" for="inlineRadio1">Oui</label>
                    </div>
                    <div class="form-check form-check-inline me-3">
                        <input class="form-check-input" type="radio" name="etatObc" id="etatObc0" value="0" <?php if($etatObc=="0"){echo 'checked';}?>>
                        <label class="form-check-label" for="inlineRadio2">Non</label>
                    </div>
        </div>
        <div class="col ms-5"><?php estCeQueCameraOuOBCEstConforme($etatObc)?></div>
       
    </div>

    <div class="ms-1 row">
    <div class="btn btn-secondary text-center d-flex align-items-center justify-content-center" style="width:40px;height:30px"><label for="">13</label></div>
        <div style="font-size:10px;" class="col-5 d-flex align-items-center">LA CAMERA EST-ELLE EN BON ETAT ET FONCTIONNELLE ?</div>
        <div class="col-3 d-flex">
                    <div class="form-check form-check-inline me-5">
                        <input class="form-check-input" type="radio" name="etatCamera" id="etatCamera1" value="1" <?php if($etatCamera=="1"){echo 'checked';}?>>
                        <label class="form-check-label" for="inlineRadio1">Oui</label>
                    </div>
                    <div class="form-check form-check-inline me-3">
                        <input class="form-check-input" type="radio" name="etatCamera" id="etatCamera0" value="0" <?php if($etatCamera=="0"){echo 'checked';}?>>
                        <label class="form-check-label" for="inlineRadio2">Non</label>
                    </div>
        </div>
        <div class="col ms-5"><?php estCeQueCameraOuOBCEstConforme($etatCamera)?></div>
       
    </div>

   
</div>

<div class="ms-1 row btn btn-light w-100 row text-danger fs-4 py-0">INFORMATIONS CHAUFFEUR </div> 

    <div class="ms-3 row">
        <div class="btn btn-secondary text-center d-flex align-items-center justify-content-center" style="width:40px;height:30px"><label for="">14</label></div>
        <div style="font-size:10px;" class="col-5 d-flex align-items-center">NOM ET PRENOM (S) DU CHAUFFEUR</div>
       
        <div class="col-1">
        <input style="font-size:10px;" class="form-control bg-light text-primary" id="verifRefChauffeur" name="verifRefChauffeur" value=<?php echo$refChauffeur?>></input>             
        </div>
        
        <div class="col-3">
        <label style="font-size:10px;" class="form-control bg-light text-primary" id="designationChauffeur" name="designationChauffeur" ><?php designationChauffeurSafeToDispatchVerification($refChauffeur)?></label>             
        </div>


        <div class="col"><?php  estCeQueLeChauffeurAppartientAuTransporteur($refTransporteur,$refChauffeur)?></div>
    </div>

    <div class="ms-3 row">
        <div class="btn btn-secondary text-center d-flex align-items-center justify-content-center" style="width:40px;height:30px"><label for="">15</label></div>
        <div style="font-size:10px;" class="col-5 d-flex align-items-center">NUMERO DU PERMIS DE CONDUIRE</div>
       
        <div class="col-4">
        <input style="font-size:10px;margin-top:1px;margin-bottom:1.5px;" class="form-control bg-light text-primary" id="numPermis" name="numPermis" value=<?php echo $numPermis?>></input> 
        
        </div>
        <div class="col"></div>
    </div>

    <div class="ms-3 row">
        <div class="btn btn-secondary text-center d-flex align-items-center justify-content-center" style="width:40px;height:30px"><label for="">16</label></div>
        <div style="font-size:10px;" class="col-5 d-flex align-items-center">DATE ECHEANCE FORMATION CHAUFFEUR</div>
       
        <div class="col-4">
        <input style="font-size:10px;" class="form-control bg-light text-primary" id="echeanceFormationChauffeur" name="echeanceFormationChauffeur" value=<?php echo $dateFormationChauffeur?>></input>          
        
        </div>
        <div class="col"><?php estCeQueLeCritereEstConforme($refRequestDate,$dateFormationChauffeur)?></div>
    </div>

    <div class="ms-3 row">
        <div class="btn btn-secondary text-center d-flex align-items-center justify-content-center" style="width:40px;height:30px"><label for="">17</label></div>
        <div style="font-size:10px;" class="col-5 d-flex align-items-center">DATE ECHEANCE DERNIERE VISITE MEDICALE</div>
       
        <div class="col-4">
        <input style="font-size:10px;" class="form-control bg-light text-primary" id="echeanceVisiteMedicale" name="echeanceVisiteMedicale" value=<?php echo $echeanceVisiteMedicale?>></input>      
        
        </div>
        <div class="col"><?php estCeQueLeCritereEstConforme($refRequestDate,$echeanceVisiteMedicale)?></div>
    </div>


    <div class="ms-3 row">
        <div class="btn btn-secondary text-center d-flex align-items-center justify-content-center" style="width:40px;height:30px"><label for="">18</label></div>
        <div style="font-size:10px;" class="col-5 d-flex align-items-center">PRECISER LE DERNIER TRAJET EFFECTUE (ALLER - RETOUR)</div>
       
        <div class="col-4">
        <input style="font-size:10px;margin-top:1px;margin-bottom:1.5px;" class="form-control bg-light text-primary" id="dernierTrajet" name="dernierTrajet" value=<?php echo $dernierTrajet?>></input>   
        
        </div>
        <div class="col"></div>
    </div>

    <div class="ms-3 row">
        <div class="btn btn-secondary text-center d-flex align-items-center justify-content-center" style="width:40px;height:30px"><label for="">19</label></div>
        <div style="font-size:10px;" class="col-5 d-flex align-items-center">DATE DEBUT ET FIN DERNIER TRAJET (ALLER - RETOUR)</div>
       
        <div class="col-4">
        <input style="font-size:10px;" class="form-control bg-light text-primary" id="datedernierTrajet" name="datedernierTrajet" value=<?php echo $datedernierTrajet?>></input>      
        
        </div>
        <div class="col"></div>
    </div>

    <div class="ms-3 row">
    <div class="btn btn-secondary text-center d-flex align-items-center justify-content-center" style="width:40px;height:30px"><label for="">20</label></div>
        <div style="font-size:10px;" class="col-5 d-flex align-items-center">LE CHAUFFEUR A-T-IL COMMIS UNE VIOLATION ? ?</div>
        <div class="col-3 d-flex">
                    <div class="form-check form-check-inline me-5">
                        <input class="form-check-input" type="radio" name="commitViolation" id="commitViolation1" value="1" <?php if($commitViolation=="1"){echo 'checked';}?>>
                        <label class="form-check-label" for="inlineRadio1">Oui</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="commitViolation" id="commitViolation0" value="0" <?php if($commitViolation=="0"){echo 'checked';}?>>
                        <label class="form-check-label" for="inlineRadio2">Non</label>
                    </div>
        </div>
        <div class="col"></div>
       
    </div>



    <div class="ms-3 row">
        <div class="btn btn-secondary text-center d-flex align-items-center justify-content-center" style="width:40px;height:30px"><label for="">21</label></div>
        <div style="font-size:10px;" class="col-5 d-flex align-items-center">TYPE DE VIOLATION ENREGISTREE</div>
       
        <div class="col-4">    
        <textarea rows="1" style="font-size:11px;margin-top:1px;margin-bottom:1.5px;" class="form-control bg-light text-primary" id="typeViolation" name="typeViolation"><?php echo $typeViolation?></textarea>          
        </div>
        <div class="col"></div>
    </div>


    <div class="ms-3 row">
        <div class="btn btn-secondary text-center d-flex align-items-center justify-content-center" style="width:40px;height:30px"><label for="">22</label></div>
        <div style="font-size:10px;" class="col-5 d-flex align-items-center">DATE DE LA VIOLATION</div>
       
        <div class="col-4">
        <input style="font-size:10px;" class="form-control bg-light text-primary" id="dateViolation" name="dateViolation" value=<?php echo $dateViolation ?>></input>                                                              
        
        </div>
        <div class="col"></div>
    </div>
    

    <div class="ms-3 row">
        <div class="btn btn-secondary text-center d-flex align-items-center justify-content-center" style="width:40px;height:30px"><label for="">23</label></div>
        <div style="font-size:10px;" class="col-5 d-flex align-items-center">NATURE DE LA SANCTION PRONONCEE</div>
       
        <div class="col-4">             
        <textarea rows="1" style="font-size:10px;margin-top:1px;margin-bottom:1.5px;" class="form-control bg-light text-primary" id="natureSanction" name="natureSanction"><?php echo $natureSanction ?></textarea>          
        </div>
        <div class="col"></div>
    </div>

    <!-- Seconde Page -->
    <div class="ms-3 row">
        <div class="col-3" style="font-size:10px;"></div>
        <div class="col-3"></div>       
        <div class="col-3">&nbsp</div>
       
        <div class="col"></div>
       
    </div>

    <div class="ms-3 row">
        <div class="col-3" style="font-size:11px;">Reference</div>
        <div class="col-3"></div>       
        <div class="col-3">
        <input type="text" style="font-size:9px;" class="form-control bg-light text-danger text-center" id="refRequete" name="" value=<?php echo $requeteTransporteur?>></input></div>
       
        <div class="col">(Page 2 sur 2)</div>
       
    </div>

    <div class="ms-3 row">
        <div class="btn btn-secondary text-center d-flex align-items-center justify-content-center" style="width:40px;height:30px"><label for="">24</label></div>
        <div style="font-size:10px;" class="col-5 d-flex align-items-center">NOMBRE DE JOURS RESTANTS SANCTION</div>
       
        <div class="col-4">
        <input style="font-size:10px;margin-top:1px;margin-bottom:1.5px;" class="form-control bg-light text-primary" id="nbreJoursRestantSanction" name="nbreJoursRestantSanction" value=<?php echo $nbreJoursRestantSanction ?>></input>                                                                                
        
        </div>
        <div class="col"></div>
    </div>

    <div class="ms-3 row">
        <div class="btn btn-secondary text-center d-flex align-items-center justify-content-center" style="width:40px;height:30px"><label for="">25</label></div>
        <div style="font-size:10px;" class="col-5 d-flex align-items-center">SOLDE DES POINTS SCP</div>
       
        <div class="col-4">
        <input style="font-size:10px;margin-top:1px;margin-bottom:1.5px;" class="form-control bg-light text-primary" id="soldePointsScp" name="soldePointsScp" value=<?php echo $soldePointsScp ?>></input>         
        
        </div>
        <div class="col"></div>
    </div>


<div class="ms-1 row btn btn-light w-100 row text-danger fs-4 py-0">SENSIBILISATIONS OBLIGATOIRES <span class="text-dark fs-6">(Sur la base des alertes HSE diffusées)</span></div> 

    <div class="ms-3 row">
        <div class="btn btn-secondary text-center d-flex align-items-center justify-content-center" style="width:40px;height:30px"><label for="">26</label></div>
        <div style="font-size:10px;" class="col-5 d-flex align-items-center">DATE DERNIERE SENSIBILISATION CHAUFFEUR</div>
       
        <div class="col-4">
        <input style="font-size:10px;margin-top:1px;margin-bottom:1.5px;" class="form-control bg-light text-primary" id="dateDerniereSensibilisation" name="dateDerniereSensibilisation" value=<?php echo $dateDerniereSensibilisation ?>></input>          
        
        </div>
        <div class="col"></div>
    </div>

    <div class="ms-3 row">
        <div class="btn btn-secondary text-center d-flex align-items-center justify-content-center" style="width:40px;height:30px"><label for="">27</label></div>
        <div style="font-size:10px;" class="col-5 d-flex align-items-center">THEME(S) ABORDE(S) -   <span class="text-danger">   Joindre la liste d'émargement</span></div>
       
        <div class="col-4">
        <textarea style="font-size:10px;margin-top:1px;margin-bottom:1.5px;" class="form-control bg-light text-primary" id="themesAbordes" name="themesAbordes"><?php echo $themesAbordes ?></textarea>          
        
        </div>
        <div class="col"></div>
    </div>
  

    <div class="ms-1 row">
        <div class="col mx-auto"></div>
        <div class="col mx-auto"></div>
        <div class="col mx-auto"><a href="ficheSafeToDispatch.php" class="btn btn-outline-danger w-100">Reprendre la saisie</a></div>
        <div class="col mx-auto"><button type="submit" class="btn btn-outline-success w-100" name="soumettre">Soumettre</button></div>
        
    </div>
    </form>

    <!--Notes Importantes -->
    
    <div class="row fs-6">NOTES IMPORTANTES
        <table class="table mx-auto table-sm p-0">
            <thead>
                <th>#</th>
                <th>Designations</th>
                <th>Notes</th>
            </thead>
            <tbody>

                <tr >
                    <td><div class="btn btn-secondary text-center d-flex align-items-center justify-content-center" style="width:15px;height:15px"><label style="font-size:10px" for="">3</label></div></td>
                    <td><div style="font-size:9px;" class="">DATE DU DERNIER VOYAGE</div></td>
                    <td class="pt-3" rowspan="3" style="font-size:9px;border-bottom:1px solid">Cela nous permettra de réclammer rapidement </br>auprès des Opérateurs et Dépôts MINES,</br>les STL non disponibles sur ARIOFLOW au moment de la demande de Bons</td>
                </tr>
                <tr>
                <td><div class="btn btn-secondary text-center d-flex align-items-center justify-content-center" style="width:15px;height:15px"><label style="font-size:10px" for="">4</label></div></td>
                    <td><div style="font-size:9px;" class="">SITE/LIEU DU DEPOTAGE</div></td>
                   
                   
                </tr>
                <tr style="border-bottom:1px solid">
                <td><div class="btn btn-secondary text-center d-flex align-items-center justify-content-center" style="width:15px;height:15px"><label style="font-size:10px" for="">5</label></div></td>
                <td><div style="font-size:9px;" class="">DATE DU DERNIER SAFE TO LOAD</div></td>   
                </tr>


                <tr >
                    <td><div class="btn btn-secondary text-center d-flex align-items-center justify-content-center" style="width:15px;height:15px"><label style="font-size:10px" for="">6</label></div></td>
                    <td><div style="font-size:9px;" class="">DATE ECHEANCE ASSURANCE CAMION</div></td>
                    <td rowspan="5" style="font-size:9px;border-bottom:1px solid;padding-top:60px">En cas de renouvellement, joindre au dossier une copie de chaque document</td>
                </tr>
                <tr>
                <td><div class="btn btn-secondary text-center d-flex align-items-center justify-content-center" style="width:15px;height:15px"><label style="font-size:10px" for="">7</label></div></td>
                <td><div style="font-size:9px;" class="">DATE ECHEANCE ASSURANCE PRODUIT</div></td>
                                     
                </tr>
                <tr >
                <td><div class="btn btn-secondary text-center d-flex align-items-center justify-content-center" style="width:15px;height:15px"><label style="font-size:10px" for="">8</label></div></td>
                <td><div style="font-size:9px;" class="">DATE ECHEANCE CCVA</div></td>   
                </tr>

                <tr >
                <td><div class="btn btn-secondary text-center d-flex align-items-center justify-content-center" style="width:15px;height:15px"><label style="font-size:10px" for="">9</label></div></td>
                <td><div style="font-size:9px;" class="">DATE ECHEANCE BUMIGEB</div></td>   
                </tr>

                <tr style="border-bottom:1px solid">
                <td><div class="btn btn-secondary text-center d-flex align-items-center justify-content-center" style="width:15px;height:15px"><label style="font-size:10px" for="">10</label></div></td>
                <td><div style="font-size:9px;" class="">DATE ECHEANCE CONTRÔLE TECHNIQUE</div></td>   
                </tr>


                <tr style="border-bottom:1px solid">
                <td><div class="btn btn-secondary text-center d-flex align-items-center justify-content-center" style="width:15px;height:15px"><label style="font-size:10px" for="">11</label></div></td>
                <td><div style="font-size:9px;" class="">EXTRACTION VIDEO REALISEE ?</div></td>
                <td style="font-size:9px;border-bottom:1px solid;">Si oui, joindre la fiche INNOTEC/GLOBO</td>   
                </tr>

                <tr>
                    <td><div class="btn btn-secondary text-center d-flex align-items-center justify-content-center" style="width:15px;height:15px"><label style="font-size:10px" for="">12</label></div></td>
                    <td><div style="font-size:9px;" class="">L'OBC EST-IL EN BON ETAT ET FONCTIONNEL ?</div></td>
                    <td class="pt-3" rowspan="2" style="font-size:9px;border-bottom:1px solid">Si non, demander une intervention INNOTEC/GLOBO et joindre la fiche d'intervetion ; Si oui, passer à la question 14</td>
                </tr>

                <tr style="border-bottom:1px solid">
                <td><div class="btn btn-secondary text-center d-flex align-items-center justify-content-center" style="width:15px;height:15px"><label style="font-size:10px" for="">13</label></div></td>
                    <td><div style="font-size:9px;" class="">LA CAMERA EST-ELLE EN BON ETAT ET FONCTIONNELLE ?</div></td>
                   
                   
                </tr>
                <tr style="border-bottom:1px solid">
                <td><div class="btn btn-secondary text-center d-flex align-items-center justify-content-center" style="width:15px;height:15px"><label style="font-size:10px" for="">17</label></div></td>
                <td><div style="font-size:9px;" class="">DATE ECHEANCE DERNIERE VISITE MEDICALE</div></td>
                <td style="font-size:9px;border-bottom:1px solid;">En cas de renouvellement, joindre une copie de la dernière visite</td>   
                </tr>


               <tr >
                    <td><div class="btn btn-secondary text-center d-flex align-items-center justify-content-center" style="width:15px;height:15px"><label style="font-size:10px" for="">20</label></div></td>
                    <td><div style="font-size:9px;" class="">LE CHAUFFEUR A-T-IL COMMIS UNE VIOLATION ?</div></td>
                    <td rowspan="5" style="font-size:9px;border-bottom:1px solid;padding-top:2px">Si oui, remplir cette partie et joindre la note de sanction proncée à l'encontre du chauffeur ;Si non, passer à la question 25</td>
                </tr>
                <tr>
                <td><div class="btn btn-secondary text-center d-flex align-items-center justify-content-center" style="width:15px;height:15px"><label style="font-size:10px" for="">21</label></div></td>
                <td><div style="font-size:9px;" class="">TYPE DE VIOLATION ENREGISTREE</div></td>
                                     
                </tr>
                <tr >
                <td><div class="btn btn-secondary text-center d-flex align-items-center justify-content-center" style="width:15px;height:15px"><label style="font-size:10px" for="">22</label></div></td>
                <td><div style="font-size:9px;" class="">DATE DE LA VIOLATION</div></td>   
                </tr>

                <tr >
                <td><div class="btn btn-secondary text-center d-flex align-items-center justify-content-center" style="width:15px;height:15px"><label style="font-size:10px"  for="">23</label></div></td>
                <td><div style="font-size:9px;" class="">NATURE DE LA SANCTION PRONONCEE</div></td>   
                </tr>

                <tr style="border-bottom:1px solid">
                <td><div class="btn btn-secondary text-center d-flex align-items-center justify-content-center" style="width:15px;height:15px"><label style="font-size:10px" for="">24</label></div></td>
                <td><div style="font-size:9px;" class="">NOMBRE DE JOURS RESTANT SANCTION</div></td>   
                </tr>


                <tr style="border-bottom:1px solid">
                    <td><div class="btn btn-secondary text-center d-flex align-items-center justify-content-center" style="width:15px;height:15px"><label style="font-size:10px" for="">26</label></div></td>
                    <td><div style="font-size:9px;" class="">DATE DERNIERE SENSIBILISATION CHAUFFEUR</div></td>
                    <td rowspan="5" style="font-size:9px;border-bottom:1px solid;padding-top:20px">A compter de la diffusion de la présente liste, Total Burkina fera un rappel des ALERTES HSE pour toute fin utile.</td>
                </tr>
                <tr style="border-bottom:1px solid">
                <td><div class="btn btn-secondary text-center d-flex align-items-center justify-content-center" style="width:15px;height:15px"><label style="font-size:10px" for="">27</label></div></td>
                <td><div style="font-size:9px;" class="">THEME(S) ABORDE(S) - Joindre la liste d'émargement</div></td>
                                     
                </tr>

            </tbody>
        </table>
    </div>

    <div class="mt-1 card ms-1 mx-auto row" style="width:400px;">
        <div class="row fw-bold h-25 mx-auto">VISA TRANSPORTEUR</div>
        <div class="row h-25 mx-auto fs-6">Noms et Prenoms</div>
        <div class="row mx-auto">
            -------------------
            -------------------
            -------------------
        </div>
        <div class="row mx-auto">
            -------------------
            -------------------
            -------------------
        </div>      
        
    </div>




    <!--    -->








    </div>
<!-------------------------------------------------------------------->
<!-- <?php // include "includes/footer.php"; ?> -->