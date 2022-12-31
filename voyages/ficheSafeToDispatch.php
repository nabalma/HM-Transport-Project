<?php session_start(); ?>
<?php include "includes/voyages_header.php"; ?>
<?php include "includes/fonctionsVoyages.php"; ?>


<!-------------------------------------------------------------------->
<div class="mt-3 container">
<div class="mt-2 fs-4 btn btn-dark row w-75 mx-auto">FICHE SAFE TO DISPATCH </div>

<div class="ms-1 row mt-1">

<div class="ms-1 row mb-1">
        <div class="col "></div>
        <div class="col fs-6 text-end">REF.</div>
        <div class="col">
        <input type="text" disabled class="form-control bg-light text-danger fs-6" id="transporteur" name="refRequete" value="11225874698"></input>
        </div>
        <div class="col"></div>
        <div class="col"></div>
</div>

<div class="ms-1 row mb-1">
        <div class="col fs-6">DATE D'ETABLISSEMENT</div>
        <div class="col"></div>
        <div class="col"> <input type="date" class="form-control bg-light text-primary" id="reqDate" name="requestDate" ></input></div>
        <div class="col"></div>
        <div class="col"></div>
    </div>


    <div class="ms-1 row mb-1">
        <div class="col fs-6">NOM DU TRANSPORTEUR</div>
        <div class="col"></div>
        <div class="col">
        <select class="form-select text-primary" aria-label="Default select example" name="transporteur">
            <option selected>Choisir le transporteur</option>           
                <?php     
                    genererTransporteursSafeToLoad();               
                ?>;

            </select>
    </div>
        
        <div class="col">
        <button type="button" class="btn btn-outline-info">OK</button></div>
        <div class="col"></div>
    </div>


    
</div>


<div class="ms-1 mb-1 row mt-1 btn btn-light row w-75 mx-auto text-danger fs-5">INFORMATIONS CAMION</div>

<div class="ms-1 row mt-1">
    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">1</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">IMMATRICULATION TRACTEUR & CITERNE</div>
        <div class="col-3">
            
            <select class="form-select text-primary" aria-label="Default select example" name="camion">
            <option selected>Choisir le camion</option>           
                <?php     
                     // A corriger --> du transporteur selectionné                   
                ?>;

            </select>
        </div>
        <div class="col"><button type="button" class="btn btn-info">OK</button></div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">2</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">NATURE DU PRODUIT TRANSPORTE/DEPOTE</div>
        <div class="col-3">
            
        <input type="text" class="form-control bg-light text-primary text-center" id="transporteur" name="transporteur" ></input>          
        </div>
        <div class="col"></div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">3</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">DATE DU DERNIER VOYAGE</div>
        <div class="col-3">
        <input type="date" class="form-control bg-light text-primary text-center" id="transporteur" name="transporteur" ></input>          
        </div>
        <div class="col"></div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">4</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">SITE/LIEU DU DEPOTAGE</div>
        <div class="col-3">
            
        <input type="text" class="form-control bg-light text-primary text-center" id="transporteur" name="transporteur" ></input>          
        </div>
        <div class="col"></div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">5</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">DATE DU DERNIER SAFE TO LOAD</div>
        <div class="col-3">
        <input type="date" class="form-control bg-light text-primary text-center" id="transporteur" name="transporteur" ></input>          
        </div>
        <div class="col"><button type="button" class="btn btn-success">&nbsp</button></div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">6</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">DATE ECHEANCE ASSURANCE CAMION</div>
        <div class="col-3">
        <input type="date" class="form-control bg-light text-primary text-center" id="transporteur" name="transporteur" ></input>          
        </div>
        <div class="col"><button type="button" class="btn btn-success">&nbsp</button></div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">7</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">DATE ECHEANCE ASSURANCE PRODUIT</div>
        <div class="col-3">
        <input type="date" class="form-control bg-light text-primary text-center" id="transporteur" name="transporteur" ></input>          
        </div>
        <div class="col"><button type="button" class="btn btn-success">&nbsp</button></div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">8</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">DATE ECHEANCE CCVA</div>
        <div class="col-3">
        <input type="date" class="form-control bg-light text-primary text-center" id="transporteur" name="transporteur" ></input>          
        </div>
        <div class="col"><button type="button" class="btn btn-success">&nbsp</button></div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">9</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">DATE ECHEANCE BUMIGEB</div>
        <div class="col-3">
        <input type="date" class="form-control bg-light text-primary text-center" id="transporteur" name="transporteur" ></input>          
        </div>
        <div class="col"><button type="button" class="btn btn-success">&nbsp</button></div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">10</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">DATE ECHEANCE CONTROLE TECHNIQUE</div>
        <div class="col-3">
        <input type="date" class="form-control bg-light text-primary text-center" id="transporteur" name="transporteur" ></input>          
        </div>
        <div class="col"><button type="button" class="btn btn-success">&nbsp</button></div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">11</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">EXTRACTION VIDEO REALISEE ?</div>
        <div class="col-3">
                    <div class="form-check form-check-inline me-5">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Oui</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Non</label>
                    </div>
        </div>
        <div class="col"><button type="button" class="btn btn-success">&nbsp</button></div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">12</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">L'OBC EST-IL EN BON ETAT ET FONCTIONNEL ?</div>
        <div class="col-3">
                    <div class="form-check form-check-inline me-5">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Oui</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Non</label>
                    </div>
        </div>
        <div class="col"><button type="button" class="btn btn-success">&nbsp</button></div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">13</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">LA CAMERA EST-ELLE EN BON ETAT ET FONCTIONNELLE ?</div>
        <div class="col-3">
                    <div class="form-check form-check-inline me-5">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Oui</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Non</label>
                    </div>
        </div>
        <div class="col"><button type="button" class="btn btn-success">&nbsp</button></div>
    </div>
   
</div>

<div class="ms-1 mb-1 row mt-1 btn btn-light row w-75 mx-auto text-danger fs-5">INFORMATIONS CHAUFFEUR</div>

<div class="ms-1 row mt-1">
    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">14</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">NOM ET PRENOM (S) DU CHAUFFEUR</div>
        <div class="col-3">
            
            <select class="form-select text-primary" aria-label="Default select example" name="camion">
            <option selected>Choisir le chauffeur</option>           
                <?php     
                     // A corriger --> du transporteur selectionné                   
                ?>;

            </select>
        </div>
        <div class="col"><button type="button" class="btn btn-info">OK</button></div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">15</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">NUMERO DU PERMIS DE CONDUIRE</div>
        <div class="col-3">
            
        <input type="text" class="form-control bg-light text-primary text-center" id="transporteur" name="transporteur" ></input>          
        </div>
        <div class="col"></div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">16</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">DATE ECHEANCE FORMATION CHAUFFEUR</div>
        <div class="col-3">
        <input type="date" class="form-control bg-light text-primary text-center" id="transporteur" name="transporteur" ></input>          
        </div>
        <div class="col"><button type="button" class="btn btn-success">&nbsp</button></div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">17</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">DATE ECHEANCE DERNIERE VISITE MEDICALE</div>
        <div class="col-3">
            
        <input type="date" class="form-control bg-light text-primary text-center" id="transporteur" name="transporteur" ></input>          
        </div>
        <div class="col"><button type="button" class="btn btn-success">&nbsp</button></div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">18</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">PRECISER LE DERNIER TRAJET EFFECTUE (ALLER - RETOUR)</div>
        <div class="col-3">
        <input type="text" class="form-control bg-light text-primary text-center" id="transporteur" name="transporteur" ></input>          
        </div>
        <div class="col"></div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">19</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">DATE DEBUT ET FIN DU DERNIER TRAJET (ALLER - RETOUR)</div>
        <div class="col-3">
        <input type="date" class="form-control bg-light text-primary text-center" id="transporteur" name="transporteur" ></input>          
        </div>
        <div class="col"></div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">20</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">LE CHAUFFEUR A-T-IL COMMIS UNE VIOLATION ? ?</div>
        <div class="col-3">
                    <div class="form-check form-check-inline me-5">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Oui</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Non</label>
                    </div>
        </div>
        <div class="col"></div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">21</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">TYPE DE VIOLATION ENREGISTREE</div>
        <div class="col-3">
        <input type="text" class="form-control bg-light text-primary text-center" id="transporteur" name="transporteur" ></input>          
        </div>
        <div class="col"></div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">22</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">DATE DE LA VIOLATION</div>
        <div class="col-3">
        <input type="date" class="form-control bg-light text-primary text-center" id="transporteur" name="transporteur" ></input>          
        </div>
        <div class="col"></div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">23</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">NATURE DE LA SANCTION PRONONCEE</div>
        <div class="col-3">
        <input type="text" class="form-control bg-light text-primary text-center" id="transporteur" name="transporteur" ></input>          
        </div>
        <div class="col"></div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">24</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">NOMBRE DE JOURS RESTANTS SANCTION</div>
        <div class="col-3">
        <input type="text" class="form-control bg-light text-primary text-center" id="transporteur" name="transporteur" ></input>          
        </div>
        <div class="col"></div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">25</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">SOLDE DES POINTS SCP</div>
        <div class="col-3">
        <input type="text" class="form-control bg-light text-primary text-center" id="transporteur" name="transporteur" ></input>          
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
        <input type="date" class="form-control bg-light text-primary text-center" id="transporteur" name="transporteur" ></input>          
        </div>
        <div class="col"></div>
    </div>
  

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">27</label></div>
        <div class="col-5 fs-6 d-flex align-items-center">THEME(S) ABORDE(S) -   <span class="text-danger">   Joindre la liste d'émargement</span></div>
        <div class="col-3">
        <input type="text" class="form-control bg-light text-primary text-center" id="transporteur" name="transporteur" ></input>          
        </div>
        <div class="col"></div>
    </div>

  

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">28</label></div>
        <div class="col-5 fs-6 d-flex align-items-center"></div>
        <div class="col-3">
        <input type="text" class="form-control bg-light text-primary text-center" id="transporteur" name="transporteur" ></input>          
        </div>
        <div class="col"></div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="fs-6 btn btn-secondary text-center align-items-center" style="width:40px"><label for="">29</label></div>
        <div class="col-5 fs-6 d-flex align-items-center"></div>
        <div class="col-3">
        <input type="text" class="form-control bg-light text-primary text-center" id="transporteur" name="transporteur" ></input>          
        </div>
        <div class="col"></div>
    </div>

    <div class="ms-1 row mb-1">
        <div class="col mx-auto"></div>
        <div class="col mx-auto"></div>
        <div class="col mx-auto"><button type="button" class="btn btn-outline-danger w-100">Vérifier</button></div>
        <div class="col mx-auto"><button type="button" class="btn btn-outline-success w-100">Soumettre</button></div>
        
    </div>
    
   
</div>




</div>
<!-------------------------------------------------------------------->
<?php include "includes/footer.php"; ?>