<?php session_start(); ?>
<?php include "includes/voyages_header.php"; ?>
<?php include "includes/fonctionsVoyages.php"; ?>
<?php include "includes/fonctionsVerificationsSafeToDispatch.php"; ?>


<!-------------------------------------------------------------------->

<?php
  $safetoDispatch;
if(isset($_GET["refSTD"])){
    $requeteTransporteur=$_GET["refSTD"];
    $safetoDispatch=rechercherLeSafeToDispatch($requeteTransporteur);
   
    
}

?>


<div class="mt-3 container">

  <form action="verificationEditSafeToDispatch.php" method="post">  
<div class="mt-2 fs-4 btn btn-dark row w-75 mx-auto">FICHE SAFE TO DISPATCH </div>

<div class="ms-1 row mt-1">



<div class="ms-1 row mb-1">
        <div class="col "></div>
        <div class="col fs-6 text-end">Reference</div>
        <div class="col">
        <input type="text" class="form-control bg-light text-danger fs-6" id="refRequete" name="refRequete" value=<?php echo $requeteTransporteur ?>></input>
        </div>
       
        <div class="col"></div>
        <div class="col"></div>
</div>

<div class="ms-1 row mb-1">
        <div class="col fs-6">DATE D'ETABLISSEMENT</div>
        <div class="col"></div>
        <div class="col"> <input required type="date" class="form-control bg-light text-primary" id="reqDate" name="requestDate" value=<?php echo $safetoDispatch["date_Etablissement"]; ?>></input></div>
        <div class="col"></div>
        <div class="col"></div>
</div>



<div class="ms-1 row mb-1">
            <div class="col fs-6">NOM DU TRANSPORTEUR</div>
            <div class="col"></div>
            <div class="col">
            <select class="form-select text-primary" aria-label="Default select example" name="refTransporteur" required>
                <option selected><?php designationTransporteursSafeToDispatch($safetoDispatch["ref_Transporteur"]);?></option>           
                    <?php     
                        genererTransporteursSafeToDispatch();               
                    ?>;

                </select>
            </div>
            
            <div class="col">
                     
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
            
            <select class="form-select text-primary text-center" aria-label="Default select example" name="refCamion" required>
            <?php designationCamionSafeToDispatch($safetoDispatch["refCamion"]);?>          
                <?php     
                     genererListeCamionsSafeToDispatch()              
                ?>;

            </select>
        </div>
        <div class="col"></div>
    </div>
   

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">2</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">NATURE DU PRODUIT TRANSPORTE/DEPOTE</div>
        <div class="col-3">
            
            <select class="form-select text-primary text-center" aria-label="Default select example" name="refProduit" required>
            <?php designationProduitListeSafeToDispatch($safetoDispatch["refProduit"]);?>     
                <?php     
                     genererProduitsSafeToDispatch()           
                ?>;

            </select>        
        </div>
        
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">3</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">DATE DU DERNIER VOYAGE</div>
        <div class="col-3">
        <input required type="date" class="form-control bg-light text-primary text-center" id="transporteur" name="dateDernierVoyage" value=<?php echo $safetoDispatch["dateDernierVoyage"]; ?>></input>          
        </div>
        <div class="col" style="font-size: 11px; border-top:1px solid black">Cela nous permettra de réclammer rapidement auprès des Opérateurs</div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">4</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">SITE/LIEU DU DEPOTAGE</div>
        <div class="col-3">
            
        <select class="form-select text-primary text-center" aria-label="Default select example" name="refLieuLivraison" required>
        <?php designationDepotLivraisonListeSafeToDispatch($safetoDispatch["refLieuLivraison"]);?>      
                <?php     
                     genererListeSiteDeLivraisonsSafeToDispatch()   
                ?>;

            </select>              
        </div>
        <div class="col" style="font-size: 11px;">et Dépôts MINES, les STL non disponibles sur ARIOFLOW au moment de la</div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">5</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">DATE DU DERNIER SAFE TO LOAD</div>
        <div class="col-3">
        <input required type="date" class="form-control bg-light text-primary text-center" id="transporteur" name="dateDernierSafeLoad" value=<?php echo $safetoDispatch["dateDernierSafeLoad"]; ?>></input>          
        </div>
        <div class="col" style="font-size: 11px; border-bottom:1px solid black">demande de Bons</div>
       
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">6</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">DATE ECHEANCE ASSURANCE CAMION</div>
        <div class="col-3">
        <input required type="date" class="form-control bg-light text-primary text-center" id="transporteur" name="dateEcheanceAssurCamion" value=<?php echo $safetoDispatch["dateEcheanceAssurCamion"]; ?>></input>          
        </div>
       
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">7</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">DATE ECHEANCE ASSURANCE PRODUIT</div>
        <div class="col-3">
        <input required type="date" class="form-control bg-light text-primary text-center" id="transporteur" name="dateEcheanceAssurProduit" value=<?php echo $safetoDispatch["dateEcheanceAssurProduit"]; ?>></input>          
        </div>
       
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">8</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">DATE ECHEANCE CCVA</div>
        <div class="col-3">
        <input required type="date" class="form-control bg-light text-primary text-center" id="transporteur" name="dateEcheanceCcva" value=<?php echo $safetoDispatch["dateEcheanceCcva"]; ?>></input>          
        </div>
        <div class="col" style="font-size: 11px;">En cas de renouvellement, joindre au dossier, une copie de chaque document</div>
       
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">9</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">DATE ECHEANCE BUMIGEB</div>
        <div class="col-3">
        <input required type="date" class="form-control bg-light text-primary text-center" id="transporteur" name="dateEcheanceAssurBumigeb" value=<?php echo $safetoDispatch["dateEcheanceAssurBumigeb"]; ?>></input>          
        </div>
        <div class="col" style="font-size: 11px;"></div>
       
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">10</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">DATE ECHEANCE CONTROLE TECHNIQUE</div>
        <div class="col-3">
        <input required type="date" class="form-control bg-light text-primary text-center" id="transporteur" name="dateEcheanceAssurControlTech" value=<?php echo $safetoDispatch["dateEcheanceAssurControlTech"]; ?>></input>          
        </div>
        <div class="col"></div>
      
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">11</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">EXTRACTION VIDEO REALISEE ?</div>
        <div class="col-3">
                    <div class="form-check form-check-inline me-5">
                        <input class="form-check-input" type="radio" name="extractionVideo" id="extractionVideo1" value="1" <?php if($safetoDispatch["extractionVideo"]==1){echo 'checked';} ?>>
                        <label class="form-check-label" for="inlineRadio1">Oui</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="extractionVideo" id="extractionVideo0" value="0" <?php if($safetoDispatch["extractionVideo"]==0){echo 'checked';} ?>>
                        <label class="form-check-label" for="inlineRadio2">Non</label>
                    </div>
        </div>
        <div class="col" style="font-size: 11px; border-bottom:1px solid black;border-top:1px solid black">Si oui, joindre la fiche INNOTEC/GLOBO</div>
       
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">12</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">L'OBC EST-IL EN BON ETAT ET FONCTIONNEL ?</div>
        <div class="col-3">
                    <div class="form-check form-check-inline me-5">
                        <input class="form-check-input" type="radio" name="etatObc" id="etatObc1" value="1" <?php if($safetoDispatch["etatObc"]==1){echo 'checked';} ?>>
                        <label class="form-check-label" for="inlineRadio1">Oui</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="etatObc" id="etatObc0" value="0" <?php if($safetoDispatch["etatObc"]==0){echo 'checked';} ?>>
                        <label class="form-check-label" for="inlineRadio2">Non</label>
                    </div>
        </div> 
        <div class="col" style="font-size: 11px;">Si non, demander une intervention INNOTEC/GLOBO et joindre la fiche</div>      
        
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">13</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">LA CAMERA EST-ELLE EN BON ETAT ET FONCTIONNELLE ?</div>
        <div class="col-3">
                    <div class="form-check form-check-inline me-5">
                        <input class="form-check-input" type="radio" name="etatCamera" id="etatCamera1" value="1" <?php if($safetoDispatch["etatCamera"]==1){echo 'checked';} ?>>
                        <label class="form-check-label" for="inlineRadio1">Oui</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="etatCamera" id="etatCamera0" value="0" <?php if($safetoDispatch["etatCamera"]==0){echo 'checked';} ?>>
                        <label class="form-check-label" for="inlineRadio2">Non</label>
                    </div>
        </div>
        <div class="col" style="font-size: 11px; border-bottom:1px solid black;">d'intervetion ; Si oui, passer à la question 14</div>
        
    </div>
   
</div>

<div class="ms-1 mb-1 row mt-1 btn btn-light row w-75 mx-auto text-danger fs-5">INFORMATIONS CHAUFFEUR</div>

<div class="ms-1 row mt-1">
    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">14</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">NOM ET PRENOM (S) DU CHAUFFEUR</div>
        <div class="col-3">
            
            <select class="form-select text-primary" aria-label="Default select example" name="refChauffeur" required>
            <?php designationChauffeurSafeToDispatch($safetoDispatch["refChauffeur"]);?>             
                <?php     
                     genererChauffeursSafeToDispatch();                
                ?>;

            </select>
        </div>
        <div class="col"></div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">15</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">NUMERO DU PERMIS DE CONDUIRE</div>
        <div class="col-3">
            
        <input required type="text" class="form-control bg-light text-primary text-center" id="permis" name="numPermis" value=<?php echo $safetoDispatch["numPermis"]; ?>></input>          
        </div>
       
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">16</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">DATE ECHEANCE FORMATION CHAUFFEUR</div>
        <div class="col-3">
        <input required type="date" class="form-control bg-light text-primary text-center" id="" name="echeanceFormationChauffeur" value=<?php echo $safetoDispatch["dateFormationChauffeur"]; ?>></input>          
        </div>
       
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">17</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">DATE ECHEANCE DERNIERE VISITE MEDICALE</div>
        <div class="col-3">
            
        <input required type="date" class="form-control bg-light text-primary text-center" id="transporteur" name="echeanceVisiteMedicale" value=<?php echo $safetoDispatch["echeanceVisiteMedicale"]; ?>></input>          
        </div>
        <div class="col" style="font-size: 11px; border-bottom:1px solid black;border-top:1px solid black;">En cas de renouvellement, joindre une copie de la dernière visite</div>
       
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">18</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">PRECISER LE DERNIER TRAJET EFFECTUE (ALLER - RETOUR)</div>
        <div class="col-3">   
        <textarea rows="1" style="font-size:10px;margin-top:1px;margin-bottom:1.5px;" class="form-control bg-light text-primary" id="dernierTrajet" name="dernierTrajet"><?php echo $safetoDispatch["dernierTrajet"]; ?></textarea>                    
        </div>
        <div class="col"></div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">19</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">DATE DEBUT ET FIN DU DERNIER TRAJET (ALLER - RETOUR)</div>
        <div class="col-3">
        <textarea rows="1" style="font-size:10px;margin-top:1px;margin-bottom:1.5px;" class="form-control bg-light text-primary" id="datedernierTrajet" name="datedernierTrajet"><?php echo $safetoDispatch["datedernierTrajet"]; ?></textarea>                              
        </div>
        <div class="col"></div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">20</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">LE CHAUFFEUR A-T-IL COMMIS UNE VIOLATION ? ?</div>
        <div class="col-3">
                    <div class="form-check form-check-inline me-5">
                        <input class="form-check-input" type="radio" name="commitViolation" id="commitViolation1" value="1" <?php if($safetoDispatch["commitViolation"]==1){echo 'checked';} ?>>
                        <label class="form-check-label" for="inlineRadio1">Oui</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="commitViolation" id="commitViolation0" value="0" <?php if($safetoDispatch["commitViolation"]==0){echo 'checked';} ?>>
                        <label class="form-check-label" for="inlineRadio2">Non</label>
                    </div>
        </div>
        <div class="col" style="font-size: 11px;border-top:1px solid black;">Si oui, remplir cette partie et joindre la note de sanction proncée à l'encontre du chauffeur ;Si non, passer à la question 25</div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">21</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">TYPE DE VIOLATION ENREGISTREE</div>
        <div class="col-3">
        <textarea rows="1" style="font-size:10px;margin-top:1px;margin-bottom:1.5px;" class="form-control bg-light text-primary" id="typeViolation" name="typeViolation"><?php echo $safetoDispatch["typeViolation"]; ?></textarea>                              
        </div>
        <div class="col" style="font-size: 11px;"></div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">22</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">DATE DE LA VIOLATION</div>
        <div class="col-3">
        <input type="date" class="form-control bg-light text-primary text-center" id="" name="dateViolation" value=<?php echo $safetoDispatch["dateViolation"];?>></input>
        <div class="col" style="font-size: 11px;"></div>
    </div>
    </div>


    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">23</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">NATURE DE LA SANCTION PRONONCEE</div>
        <div class="col-3">        
        <textarea rows="1" style="font-size:10px;margin-top:1px;margin-bottom:1.5px;" class="form-control bg-light text-primary" id="natureSanction" name="natureSanction"><?php echo $safetoDispatch["natureSanction"];?></textarea>                                           
        <div class="col" style="font-size: 11px;"></div>
    </div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">24</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">NOMBRE DE JOURS RESTANTS SANCTION</div>
        <div class="col-3">
        <input type="text" class="form-control bg-light text-primary text-center" id="" name="nbreJoursRestantSanction" value=<?php echo $safetoDispatch["nbreJoursRestantSanction"]; ?>></input>                 
        <div class="col" style="font-size: 11px;"></div>
    </div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">25</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">SOLDE DES POINTS SCP</div>
        <div class="col-3">
        <input type="text" class="form-control bg-light text-primary text-center" id="" name="soldePointsScp" value=<?php echo $safetoDispatch["soldePointsScp"]; ?>></input>                 
        <div class="col"></div>
    </div>
    </div>

    
   
</div>


<div class="ms-1 mb-1 row mt-1 btn btn-light row w-75 mx-auto text-danger fs-5">SENSIBILISATIONS OBLIGATOIRES <span class="text-dark fs-6">(Sur la base des alertes HSE diffusées)</span></div>

<div class="ms-1 row mt-1">
    
    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">26</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">DATE DERNIERE SENSIBILISATION CHAUFFEUR</div>
        <div class="col-3">
        <input required type="date" class="form-control bg-light text-primary text-center" id="" name="dateDerniereSensibilisation" value=<?php echo $safetoDispatch["dateDerniereSensibilisation"]; ?>></input>                          
        </div>
        <div class="col" style="font-size: 11px;border-top:1px solid black;"></div>
    </div>
  

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">27</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">THEME(S) ABORDE(S) -   <span class="text-danger">   Joindre la liste d'émargement</span></div>
        <div class="col-3">
        <textarea rows="1" style="font-size:10px;margin-top:1px;margin-bottom:1.5px;" class="form-control bg-light text-primary" id="themesAbordes" name="themesAbordes"><?php echo $safetoDispatch["themesAbordes"]; ?></textarea>                                                               
        </div>
        <div class="col" style="font-size: 11px;">A compter de la diffusion de la présente liste, Total Burkina fera un rappel des ALERTES HSE pour toute fin utile.</div>
    </div>

  

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">28</label></div>
        <div class="col-5 fs-6 d-flex align-items-center"></div>
        <div class="col-3">
        <input type="text" class="form-control bg-light text-primary text-center" id="" name="" ></input>          
        </div>
        <div class="col" style="font-size: 11px;"></div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">29</label></div>
        <div class="col-5 fs-6 d-flex align-items-center"></div>
        <div class="col-3">
        <input type="text" class="form-control bg-light text-primary text-center" id="" name="" ></input>          
        </div>
        <div class="col" style="font-size: 11px;border-bottom:1px solid black;"></div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="col mx-auto"></div>
        <div class="col mx-auto"></div>
       
        <div class="col mx-auto"></div>
        <div class="col mx-auto"><button type="submit" class="btn btn-outline-danger w-100" name="verifierSTD">Vérifier</button></div>
        
    </div>
    </form>
   
</div>




</div>
<!-------------------------------------------------------------------->
<?php include "includes/footer.php"; ?>