<?php session_start(); ?> <?php include "includes/voyages_header.php"; ?>
<?php include "includes/fonctionsVoyages.php"; ?>
<?php include "includes/fonctionsVerificationsSafeToDispatch.php"; ?>


<!-------------------------------------------------------------------->

<div class="mt-1 container">

<?php 

 
 

    if(isset($_POST["verifierSTD"])){

       // $refRequest=genererRefSafeToDispatch();
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
        
    }
    
    ?>




    <!-- VERIFICATION SAFE TO DISPATCH --->

    <form action="verificationSafeToDispatch.php" method="post">  
<div class="mt-2 fs-4 btn btn-dark row w-75 mx-auto">FICHE SAFE TO DISPATCH </div>

<div class="ms-1 row mt-1">



<div class="ms-1 row mb-1">
        <div class="col "></div>
        <div class="col fs-6 text-end">Reference</div>
        <div class="col">
        <input type="text" class="form-control bg-light text-danger text-center fs-6" id="refRequete" name="refRequete" value=<?php genererRefSafeToDispatch()?> disabled></input>
        </div>
       
        <div class="col"></div>
        <div class="col"></div>
</div>

<div class="ms-1 row mb-1">
        <div class="col fs-6">DATE D'ETABLISSEMENT</div>
        <div class="col"></div>
        <div class="col"> <input type="text" class="form-control bg-light text-primary text-center" id="reqDate" name="requestDate"  value=<?php echo $refRequestDate ?> disabled ></input></div>
        <div class="col"></div>
        <div class="col"></div>
</div>



<div class="ms-1 row mb-1">
            <div class="col fs-6">NOM DU TRANSPORTEUR</div>
            <div class="col"></div>
            <div class="col">
            <input type="text" class="form-control bg-light text-primary text-center" id="transporteur" name="refTransporteur" value=<?php designationTransporteurSafeToDispatch($refTransporteur)?> disabled ></input>          
            </div>
            
            <div class="col">
            <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path fill="green" d="M29.548 3.043a2.5 2.5 0 0 0-3.513.4L16 16.067l-3.508-4.414a2.5 2.5 0 0 0-3.915 3.112l5.465 6.875c.474.597 1.195.943 1.957.943s1.482-.35 1.957-.944L29.95 6.555c.86-1.08.68-2.654-.402-3.513zM24.5 24.5h-17v-17h12.756l2.385-3H6c-.83 0-1.5.67-1.5 1.5v20c0 .828.67 1.5 1.5 1.5h20a1.5 1.5 0 0 0 1.5-1.5V12.85l-3 3.774V24.5z"/></svg>    
            </div>
            <div class="col"></div>
</div>

   
   
    <hr class="w-75">



<div class="ms-1 mb-1 row mt-1 btn btn-light mx-auto row w-75 text-danger fs-5">INFORMATIONS CAMION </div> 

<div class="ms-1 row mt-1">

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">1</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">IMMATRICULATION TRACTEUR & CITERNE</div>
       
        <div class="col-3">
        <label class="form-control bg-light text-primary text-center" id="camion" name="refCamion"><?php designationCamionSafeToDispatch($refCamion)?></label>             
        
        </div>
        <div class="col"><?php estCeQueLeCamionAppartientAuTransporteur($refTransporteur,$refCamion)?></div>
    </div>
   

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">2</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">NATURE DU PRODUIT TRANSPORTE/DEPOTE</div>
        <div class="col-3">              
        <label class="form-control bg-light text-primary text-center" id="produit" name="refProduit"><?php designationProduitSafeToDispatch($refProduit)?></label>             
        
        </div>
        <div class="col"><?php estCeQueLeProduitEstCeluiDuCamion($refCamion,$refProduit)?></div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">3</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">DATE DU DERNIER VOYAGE</div>
        <div class="col-3">
        <label class="form-control bg-light text-primary text-center" id="" name="dateDernierVoyage" ><?php echo $dateDernierVoyage?></label>          
        </div>
        <div class="col"></div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">4</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">SITE/LIEU DU DEPOTAGE</div>
        <div class="col-3">
        <label class="form-control bg-light text-primary text-center" id="" name="sitedeDepotage" ><?php designationSiteDepotageSafeToDispatch($refLieuLivraison)?></label>           
                    
        </div>
        <div class="col"></div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">5</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">DATE DU DERNIER SAFE TO LOAD</div>
        <div class="col-3">
        <label class="form-control bg-light text-primary text-center" id="" name="dateDernierSafeLoad" ><?php echo $dateDernierSafeLoad?></label>                   
        </div>
        <div class="col"><?php estCeQueLeSafeToLoadEstConforme($refRequestDate,$dateDernierSafeLoad)?></div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">6</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">DATE ECHEANCE ASSURANCE CAMION</div>
        <div class="col-3">
        <label class="form-control bg-light text-primary text-center" id="" name="dateEcheanceAssurCamion" ><?php echo $dateEcheanceAssurCamion?></label>                             
        </div>
        <div class="col"><?php estCeQueLeCritereEstConforme($refRequestDate,$dateEcheanceAssurCamion)?></div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">7</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">DATE ECHEANCE ASSURANCE PRODUIT</div>
        <div class="col-3">
        <label class="form-control bg-light text-primary text-center" id="" name="dateEcheanceAssurProduit" ><?php echo $dateEcheanceAssurProduit?></label>                                       
        </div>
        <div class="col"><?php estCeQueLeCritereEstConforme($refRequestDate,$dateEcheanceAssurProduit)?></div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">8</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">DATE ECHEANCE CCVA</div>
        <div class="col-3">  
        <label class="form-control bg-light text-primary text-center" id="" name="dateEcheanceCcva" ><?php echo $dateEcheanceCcva?></label>            
        </div>
        <div class="col"><?php estCeQueLeCritereEstConforme($refRequestDate,$dateEcheanceCcva)?></div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">9</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">DATE ECHEANCE BUMIGEB</div>
        <div class="col-3">
        <label class="form-control bg-light text-primary text-center" id="" name="dateEcheanceAssurBumigeb" ><?php echo $dateEcheanceAssurBumigeb?></label>           
        </div>
        <div class="col"><?php estCeQueLeCritereEstConforme($refRequestDate,$dateEcheanceAssurBumigeb)?></div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">10</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">DATE ECHEANCE CONTROLE TECHNIQUE</div>
        <div class="col-3">
        <label class="form-control bg-light text-primary text-center" id="" name="dateEcheanceAssurControlTech" ><?php echo $dateEcheanceAssurControlTech?></label>           
        </div>
        <div class="col"><?php estCeQueLeCritereEstConforme($refRequestDate,$dateEcheanceAssurControlTech)?></div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">11</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">EXTRACTION VIDEO REALISEE ?</div>
        <div class="col-3">
                    <div class="form-check form-check-inline me-5">
                        <input class="form-check-input" type="radio" name="extractionVideo" id="extractionVideo1" value="1" <?php if($extractionVideo=="1"){echo 'checked';}?>>
                        <label class="form-check-label" for="inlineRadio1">Oui</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="extractionVideo" id="extractionVideo0" value="0" <?php if($extractionVideo=="0"){echo 'checked';}?>>
                        <label class="form-check-label" for="inlineRadio2">Non</label>
                    </div>
        </div>
        <div class="col"><?php estCeQueCameraOuOBCEstConforme($extractionVideo)?></div>
       
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">12</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">L'OBC EST-IL EN BON ETAT ET FONCTIONNEL ?</div>
        <div class="col-3">
                    <div class="form-check form-check-inline me-5">
                        <input class="form-check-input" type="radio" name="etatObc" id="etatObc1" value="1" <?php if($etatObc=="1"){echo 'checked';}?>>
                        <label class="form-check-label" for="inlineRadio1">Oui</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="etatObc" id="etatObc0" value="0" <?php if($etatObc=="0"){echo 'checked';}?>>
                        <label class="form-check-label" for="inlineRadio2">Non</label>
                    </div>
        </div>             
        <div class="col"><?php estCeQueCameraOuOBCEstConforme($etatObc)?></div>
       
        
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">13</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">LA CAMERA EST-ELLE EN BON ETAT ET FONCTIONNELLE ?</div>
        <div class="col-3">
                    <div class="form-check form-check-inline me-5">
                        <input class="form-check-input" type="radio" name="etatCamera" id="etatCamera1" value="1" <?php if($etatCamera=="1"){echo 'checked';}?>>
                        <label class="form-check-label" for="inlineRadio1">Oui</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="etatCamera" id="etatCamera0" value="0" <?php if($etatCamera=="0"){echo 'checked';}?>>
                        <label class="form-check-label" for="inlineRadio2">Non</label>
                    </div>
        </div>
        <div class="col"><?php estCeQueCameraOuOBCEstConforme($etatCamera)?></div>
    </div>
   
</div>

<div class="ms-1 mb-1 row mt-1 btn btn-light row w-75 mx-auto text-danger fs-5">INFORMATIONS CHAUFFEUR</div>

<div class="ms-1 row mt-1">
    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">14</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">NOM ET PRENOM (S) DU CHAUFFEUR</div>
        <div class="col-3">
          
        <label class="form-control bg-light text-primary text-center" id="refChauffeur" name="refChauffeur"><?php  designationChauffeurSafeToDispatch($refChauffeur)?></label>             
        </div>
        <div class="col"><?php  estCeQueLeChauffeurAppartientAuTransporteur($refTransporteur,$refChauffeur)?></div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">15</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">NUMERO DU PERMIS DE CONDUIRE</div>
        <div class="col-3">

        <label class="form-control bg-light text-primary text-center" id="numPermis" name="numPermis"><?php echo $numPermis?></label>                       
        </div>
        <div class="col"></div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">16</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">DATE ECHEANCE FORMATION CHAUFFEUR</div>
        <div class="col-3">
        
        <label class="form-control bg-light text-primary text-center" id="echeanceFormationChauffeur" name="echeanceFormationChauffeur"><?php echo $dateFormationChauffeur?></label>                                 
        </div>
        <div class="col"><?php estCeQueLeCritereEstConforme($refRequestDate,$dateFormationChauffeur)?></div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">17</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">DATE ECHEANCE DERNIERE VISITE MEDICALE</div>
        <div class="col-3">
            
        <label class="form-control bg-light text-primary text-center" id="echeanceVisiteMedicale" name="echeanceVisiteMedicale"><?php echo $echeanceVisiteMedicale?></label>                                           
        </div>
        <div class="col"><?php estCeQueLeCritereEstConforme($refRequestDate,$echeanceVisiteMedicale)?></div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">18</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">PRECISER LE DERNIER TRAJET EFFECTUE (ALLER - RETOUR)</div>
        <div class="col-3">       
        <label class="form-control bg-light text-primary text-center" id="dernierTrajet" name="dernierTrajet"><?php echo $dernierTrajet?></label>                                                     
        </div>
        <div class="col"></div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">19</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">DATE DEBUT ET FIN DU DERNIER TRAJET (ALLER - RETOUR)</div>
        <div class="col-3">
        <label class="form-control bg-light text-primary text-center" id="datedernierTrajet" name="datedernierTrajet"><?php echo $datedernierTrajet?></label>                                                     
        </div>
        <div class="col"></div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">20</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">LE CHAUFFEUR A-T-IL COMMIS UNE VIOLATION ? ?</div>
        <div class="col-3">
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

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">21</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">TYPE DE VIOLATION ENREGISTREE</div>
        <div class="col-3">
        <label class="form-control bg-light text-primary text-center" id="dernierTrajet" name="typeViolation"><?php echo $typeViolation?></label>                                                              
        </div>
        <div class="col"></div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">22</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">DATE DE LA VIOLATION</div>
        <div class="col-3">
        <label class="form-control bg-light text-primary text-center" id="dateViolation" name="dateViolation"><?php echo $dateViolation ?></label>                                                              
        </div>
        <div class="col"></div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">23</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">NATURE DE LA SANCTION PRONONCEE</div>
        <div class="col-3">        
        <label class="form-control bg-light text-primary text-center" id="natureSanction" name="natureSanction"><?php echo $natureSanction ?></label>                                                                        
        </div>
        <div class="col"></div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">24</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">NOMBRE DE JOURS RESTANTS SANCTION</div>
        <div class="col-3">
        <label class="form-control bg-light text-primary text-center" id="nbreJoursRestantSanction" name="nbreJoursRestantSanction"><?php echo $nbreJoursRestantSanction ?></label>                                                                        
        </div>
        <div class="col"></div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">25</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">SOLDE DES POINTS SCP</div>
        <div class="col-3">
        <label class="form-control bg-light text-primary text-center" id="soldePointsScp" name="soldePointsScp"><?php echo $soldePointsScp ?></label>                                                                        
        </div>
        <div class="col"></div>
    </div>

    
   
</div>

<div class="ms-1 mb-1 row mt-1 btn btn-light row w-75 mx-auto text-danger fs-5">SENSIBILISATIONS OBLIGATOIRES <span class="text-dark fs-6">(Sur la base des alertes HSE diffusées)</span></div>

<div class="ms-1 row mt-1">
    
    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">26</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">DATE DERNIERE SENSIBILISATION CHAUFFEUR</div>
        <div class="col-3">
        <label class="form-control bg-light text-primary text-center" id="dateDerniereSensibilisation" name="dateDerniereSensibilisation"><?php echo $dateDerniereSensibilisation ?></label>                                                                                  
        </div>
        <div class="col"></div>
    </div>
  

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">27</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">THEME(S) ABORDE(S) -   <span class="text-danger">   Joindre la liste d'émargement</span></div>
        <div class="col-3">
        <label class="form-control bg-light text-primary text-center" id="themesAbordes" name="themesAbordes"><?php echo $themesAbordes ?></label>                 
        </div>
        <div class="col"></div>
    </div>

  

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">28</label></div>
        <div class="col-5 fs-6 d-flex align-items-center"></div>
        <div class="col-3">
        <input type="text" class="form-control bg-light text-primary text-center" id="" name="" ></input>          
        </div>
        <div class="col"></div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">29</label></div>
        <div class="col-5 fs-6 d-flex align-items-center"></div>
        <div class="col-3">
        <input type="text" class="form-control bg-light text-primary text-center" id="" name="" ></input>          
        </div>
        <div class="col"></div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="col mx-auto"></div>
        <div class="col mx-auto"></div>
        <div class="col mx-auto"><a href="ficheSafeToDispatch.php" class="btn btn-outline-danger w-100">Reprendre la saisie</a></div>
        <div class="col mx-auto"><button type="button" class="btn btn-outline-success w-100">Soumettre</button></div>
        
    </div>
    </form>




    <!--    -->








    </div>
<!-------------------------------------------------------------------->
<!-- <?php // include "includes/footer.php"; ?> -->