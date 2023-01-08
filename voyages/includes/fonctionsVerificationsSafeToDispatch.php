<?php




 /////////////// VERIFICATION SAFE TO DISPATCH  //////////////////////////////////////  

//////////////////////////////////////////////////////////////////////////////////////
function estCeQueLeCamionAppartientAuTransporteur($refTransporteur,$refCamion){

  $server="localhost";
  $username="root";
  $password="";
  $db="db_transport";
  
  $conn = new mysqli($server,$username,$password,$db);
  
  // Check connection
  if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
    exit();
  }
  
  $sql = "SELECT ref_Camion, immatriculation_Tracteur, immatriculation_Semi_Remorque, produit_affecté FROM camions WHERE ref_Transporteur='$refTransporteur' AND ref_Camion='$refCamion'";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    echo '<svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path fill="green" d="M29.548 3.043a2.5 2.5 0 0 0-3.513.4L16 16.067l-3.508-4.414a2.5 2.5 0 0 0-3.915 3.112l5.465 6.875c.474.597 1.195.943 1.957.943s1.482-.35 1.957-.944L29.95 6.555c.86-1.08.68-2.654-.402-3.513zM24.5 24.5h-17v-17h12.756l2.385-3H6c-.83 0-1.5.67-1.5 1.5v20c0 .828.67 1.5 1.5 1.5h20a1.5 1.5 0 0 0 1.5-1.5V12.85l-3 3.774V24.5z"/></svg>';
   
  } else {
    echo '<svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><path fill="red" d="M10 1.6a8.4 8.4 0 1 0 0 16.8a8.4 8.4 0 0 0 0-16.8zm4.789 11.461L13.06 14.79L10 11.729l-3.061 3.06L5.21 13.06L8.272 10L5.211 6.939L6.94 5.211L10 8.271l3.061-3.061l1.729 1.729L11.728 10l3.061 3.061z"/></svg>';
  }
  $conn->close();
  
  }

//////////////////////////////////////////////////////////////////////////////////////
  function estCeQueLeProduitEstCeluiDuCamion($refCamion,$refProduit){

    $server="localhost";
    $username="root";
    $password="";
    $db="db_transport";
    
    $conn = new mysqli($server,$username,$password,$db);
    
    // Check connection
    if ($conn -> connect_errno) {
      echo "Failed to connect to MySQL: " . $conn -> connect_error;
      exit();
    }
    
    $sql = "SELECT produit_affecté FROM camions WHERE ref_Camion='$refCamion'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();       
      if($row["produit_affecté"]==$refProduit){
        echo '<svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path fill="green" d="M29.548 3.043a2.5 2.5 0 0 0-3.513.4L16 16.067l-3.508-4.414a2.5 2.5 0 0 0-3.915 3.112l5.465 6.875c.474.597 1.195.943 1.957.943s1.482-.35 1.957-.944L29.95 6.555c.86-1.08.68-2.654-.402-3.513zM24.5 24.5h-17v-17h12.756l2.385-3H6c-.83 0-1.5.67-1.5 1.5v20c0 .828.67 1.5 1.5 1.5h20a1.5 1.5 0 0 0 1.5-1.5V12.85l-3 3.774V24.5z"/></svg>';
      }else{
        echo '<svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><path fill="red" d="M10 1.6a8.4 8.4 0 1 0 0 16.8a8.4 8.4 0 0 0 0-16.8zm4.789 11.461L13.06 14.79L10 11.729l-3.061 3.06L5.21 13.06L8.272 10L5.211 6.939L6.94 5.211L10 8.271l3.061-3.061l1.729 1.729L11.728 10l3.061 3.061z"/></svg>';
      }                      
    } else {
      echo "";
    }
    $conn->close();
    
    }


  //////////////////////////////////////////////////////////////////////////////////////
  function estCeQueLeCritereEstConforme($refRequestDate,$dateEcheance){
    $dureeValidite=round((strtotime($dateEcheance)-strtotime($refRequestDate))/(60*60)/24,1);
       
      if($dureeValidite>90){
        echo '<svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path fill="green" d="M29.548 3.043a2.5 2.5 0 0 0-3.513.4L16 16.067l-3.508-4.414a2.5 2.5 0 0 0-3.915 3.112l5.465 6.875c.474.597 1.195.943 1.957.943s1.482-.35 1.957-.944L29.95 6.555c.86-1.08.68-2.654-.402-3.513zM24.5 24.5h-17v-17h12.756l2.385-3H6c-.83 0-1.5.67-1.5 1.5v20c0 .828.67 1.5 1.5 1.5h20a1.5 1.5 0 0 0 1.5-1.5V12.85l-3 3.774V24.5z"/></svg>';
      }elseif($dureeValidite>30)
      {
        echo '  <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 256"><path fill="orange" d="M236.7 188L148.8 36a24 24 0 0 0-41.6 0L19.3 188A23.9 23.9 0 0 0 40 224h176a23.9 23.9 0 0 0 20.7-36ZM120 104a8 8 0 0 1 16 0v40a8 8 0 0 1-16 0Zm8 88a12 12 0 1 1 12-12a12 12 0 0 1-12 12Z"/></svg>';
      }else{
        echo '<svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><path fill="red" d="M10 1.6a8.4 8.4 0 1 0 0 16.8a8.4 8.4 0 0 0 0-16.8zm4.789 11.461L13.06 14.79L10 11.729l-3.061 3.06L5.21 13.06L8.272 10L5.211 6.939L6.94 5.211L10 8.271l3.061-3.061l1.729 1.729L11.728 10l3.061 3.061z"/></svg>';
      }                      
   
    
    }

    //////////////////////////////////////////////////////////////////////////////////////
  function estCeQueLeSafeToLoadEstConforme($refRequestDate,$dateEcheance){
    $dureeValidite=round((strtotime($refRequestDate)-strtotime($dateEcheance))/(60*60)/24,1);
       
      if($dureeValidite<7){
        echo '<svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path fill="green" d="M29.548 3.043a2.5 2.5 0 0 0-3.513.4L16 16.067l-3.508-4.414a2.5 2.5 0 0 0-3.915 3.112l5.465 6.875c.474.597 1.195.943 1.957.943s1.482-.35 1.957-.944L29.95 6.555c.86-1.08.68-2.654-.402-3.513zM24.5 24.5h-17v-17h12.756l2.385-3H6c-.83 0-1.5.67-1.5 1.5v20c0 .828.67 1.5 1.5 1.5h20a1.5 1.5 0 0 0 1.5-1.5V12.85l-3 3.774V24.5z"/></svg>';
      }elseif($dureeValidite<15)
      {
        echo '<svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 256"><path fill="orange" d="M236.7 188L148.8 36a24 24 0 0 0-41.6 0L19.3 188A23.9 23.9 0 0 0 40 224h176a23.9 23.9 0 0 0 20.7-36ZM120 104a8 8 0 0 1 16 0v40a8 8 0 0 1-16 0Zm8 88a12 12 0 1 1 12-12a12 12 0 0 1-12 12Z"/></svg>';
      }else{
        echo '<svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><path fill="red" d="M10 1.6a8.4 8.4 0 1 0 0 16.8a8.4 8.4 0 0 0 0-16.8zm4.789 11.461L13.06 14.79L10 11.729l-3.061 3.06L5.21 13.06L8.272 10L5.211 6.939L6.94 5.211L10 8.271l3.061-3.061l1.729 1.729L11.728 10l3.061 3.061z"/></svg>';
      }                    
   
    
    }
  //////////////////////////////////////////////////////////////////////////////////////
  function estCeQueCameraOuOBCEstConforme($reponse){
          
      if($reponse=="1"){
        echo '<svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path fill="green" d="M29.548 3.043a2.5 2.5 0 0 0-3.513.4L16 16.067l-3.508-4.414a2.5 2.5 0 0 0-3.915 3.112l5.465 6.875c.474.597 1.195.943 1.957.943s1.482-.35 1.957-.944L29.95 6.555c.86-1.08.68-2.654-.402-3.513zM24.5 24.5h-17v-17h12.756l2.385-3H6c-.83 0-1.5.67-1.5 1.5v20c0 .828.67 1.5 1.5 1.5h20a1.5 1.5 0 0 0 1.5-1.5V12.85l-3 3.774V24.5z"/></svg>';
      
      }else{
        echo '<svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><path fill="red" d="M10 1.6a8.4 8.4 0 1 0 0 16.8a8.4 8.4 0 0 0 0-16.8zm4.789 11.461L13.06 14.79L10 11.729l-3.061 3.06L5.21 13.06L8.272 10L5.211 6.939L6.94 5.211L10 8.271l3.061-3.061l1.729 1.729L11.728 10l3.061 3.061z"/></svg>';
      }                    
   
    
    }

    //////////////////////////////////////////////////////////////////////////////////////
    function designationTransporteurSafeToDispatch($refTransporteur){

      $server="localhost";
      $username="root";
      $password="";
      $db="db_transport";
      
      $conn = new mysqli($server,$username,$password,$db);
      
      // Check connection
      if ($conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . $conn -> connect_error;
        exit();
      }
      
      $sql = "SELECT Ref_Transporteur, Designation_Transporteur FROM transporteurs WHERE Ref_Transporteur='$refTransporteur'";
      $result = $conn->query($sql);
      
      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
         echo $row["Designation_Transporteur"];                                   
        }
      } else {
        echo "0 results";
      }
      $conn->close();
      
      }


      //////////////////////////////////////////////////////////////////////////////////////
    function designationCamionSafeToDispatchVerification($refCamion){

      $server="localhost";
      $username="root";
      $password="";
      $db="db_transport";
      
      $conn = new mysqli($server,$username,$password,$db);
      
      // Check connection
      if ($conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . $conn -> connect_error;
        exit();
      }
      
      $sql = "SELECT ref_Camion, immatriculation_Tracteur, immatriculation_Semi_Remorque FROM camions WHERE ref_Camion='$refCamion'";
      $result = $conn->query($sql);
      
      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
         echo $row["immatriculation_Tracteur"]." / ".$row["immatriculation_Semi_Remorque"];                                   
        }
      } else {
        echo "0 results";
      }
      $conn->close();
      
      }

        //////////////////////////////////////////////////////////////////////////////////////
    function designationProduitSafeToDispatch($refProduit){

      $server="localhost";
      $username="root";
      $password="";
      $db="db_transport";
      
      $conn = new mysqli($server,$username,$password,$db);
      
      // Check connection
      if ($conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . $conn -> connect_error;
        exit();
      }
      
      $sql = "SELECT ref_Produit, designation_Produit FROM produits WHERE ref_Produit='$refProduit'";
      $result = $conn->query($sql);
      
      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
         echo $row["designation_Produit"];                                   
        }
      } else {
        echo "0 results";
      }
      $conn->close();
      
      }

          //////////////////////////////////////////////////////////////////////////////////////
    function designationSiteDepotageSafeToDispatch($refDepotLivraison){

      $server="localhost";
      $username="root";
      $password="";
      $db="db_transport";
      
      $conn = new mysqli($server,$username,$password,$db);
      
      // Check connection
      if ($conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . $conn -> connect_error;
        exit();
      }
      
      $sql = "SELECT Ref_Depot_Livraison, Designation_Depot_Livraison FROM depotslivraisons WHERE Ref_Depot_Livraison='$refDepotLivraison'";
      $result = $conn->query($sql);
      
      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
         echo $row["Designation_Depot_Livraison"];                                   
        }
      } else {
        echo "0 results";
      }
      $conn->close();
      
      }


         //////////////////////////////////////////////////////////////////////////////////////
    function designationChauffeurSafeToDispatchVerification($refChauffeur){

      $server="localhost";
      $username="root";
      $password="";
      $db="db_transport";
      
      $conn = new mysqli($server,$username,$password,$db);
      
      // Check connection
      if ($conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . $conn -> connect_error;
        exit();
      }
      
      $sql = "SELECT ref_Chauffeur, nom_Chauffeur, prenom_Chauffeur FROM chauffeurs WHERE ref_Chauffeur='$refChauffeur'";
      $result = $conn->query($sql);
      
      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
         echo $row["nom_Chauffeur"]." - ".$row["prenom_Chauffeur"];                                   
        }
      } else {
        echo "0 results";
      }
      $conn->close();
      
      }

//////////////////////////////////////////////////////////////////////////////////////
function estCeQueLeChauffeurAppartientAuTransporteur($refTransporteur,$refChauffeur){

  $server="localhost";
  $username="root";
  $password="";
  $db="db_transport";
  
  $conn = new mysqli($server,$username,$password,$db);
  
  // Check connection
  if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
    exit();
  }
  
  $sql = "SELECT camion_associe FROM chauffeurs WHERE ref_Chauffeur='$refChauffeur'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  $refCamion = $row["camion_associe"];

  $sql = "SELECT ref_Transporteur FROM camions WHERE ref_Camion='$refCamion'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  $refTransporteurduChauffeur = $row["ref_Transporteur"];

  if ($refTransporteurduChauffeur==$refTransporteur) {
    echo '<svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path fill="green" d="M29.548 3.043a2.5 2.5 0 0 0-3.513.4L16 16.067l-3.508-4.414a2.5 2.5 0 0 0-3.915 3.112l5.465 6.875c.474.597 1.195.943 1.957.943s1.482-.35 1.957-.944L29.95 6.555c.86-1.08.68-2.654-.402-3.513zM24.5 24.5h-17v-17h12.756l2.385-3H6c-.83 0-1.5.67-1.5 1.5v20c0 .828.67 1.5 1.5 1.5h20a1.5 1.5 0 0 0 1.5-1.5V12.85l-3 3.774V24.5z"/></svg>';
   
  } else {
    echo '<svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><path fill="red" d="M10 1.6a8.4 8.4 0 1 0 0 16.8a8.4 8.4 0 0 0 0-16.8zm4.789 11.461L13.06 14.79L10 11.729l-3.061 3.06L5.21 13.06L8.272 10L5.211 6.939L6.94 5.211L10 8.271l3.061-3.061l1.729 1.729L11.728 10l3.061 3.061z"/></svg>';
  }
  $conn->close();
  
  }


  //////////////////////////////////////////////////////////////////////////////////////
function ajouterUnSafeToDispatch($refRequestDate,$refTransporteur,$refCamion,$refProduit,$dateDernierVoyage,$refLieuLivraison,$dateDernierSafeLoad,$dateEcheanceAssurCamion,$dateEcheanceAssurProduit,$dateEcheanceCcva,$dateEcheanceAssurBumigeb,$dateEcheanceAssurControlTech,$extractionVideo,$etatObc,$etatCamera,$refChauffeur,$numPermis,$dateFormationChauffeur,$echeanceVisiteMedicale,$dernierTrajet,$datedernierTrajet,$commitViolation,$typeViolation,$dateViolation,$natureSanction,$nbreJoursRestantSanction,$soldePointsScp,$dateDerniereSensibilisation,$themesAbordes){

  $server="localhost";
  $username="root";
  $password="";
  $db="db_transport";
  
  $conn = new mysqli($server,$username,$password,$db);
  
  // Check connection
  if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
    exit();
  }
  
  $themesAbordes=$conn->real_escape_string($themesAbordes);
  $typeViolation=$conn->real_escape_string($typeViolation);
  $natureSanction=$conn->real_escape_string($natureSanction);

  $sql = "INSERT INTO safetodispatchs (date_Etablissement, ref_Transporteur, refCamion, refProduit, dateDernierVoyage, refLieuLivraison, dateDernierSafeLoad, dateEcheanceAssurCamion, dateEcheanceAssurProduit, dateEcheanceCcva, dateEcheanceAssurBumigeb, dateEcheanceAssurControlTech, extractionVideo, etatObc, etatCamera, refChauffeur, numPermis, dateFormationChauffeur, echeanceVisiteMedicale, dernierTrajet, datedernierTrajet, commitViolation, typeViolation, dateViolation, natureSanction, nbreJoursRestantSanction, soldePointsScp, dateDerniereSensibilisation, themesAbordes) VALUES ('$refRequestDate', '$refTransporteur', '$refCamion', '$refProduit', '$dateDernierVoyage', '$refLieuLivraison', '$dateDernierSafeLoad', '$dateEcheanceAssurCamion', '$dateEcheanceAssurProduit', '$dateEcheanceCcva', '$dateEcheanceAssurBumigeb', '$dateEcheanceAssurControlTech', '$extractionVideo', '$etatObc', '$etatCamera', '$refChauffeur', '$numPermis', '$dateFormationChauffeur', '$echeanceVisiteMedicale', '$dernierTrajet', '$datedernierTrajet', '$commitViolation', '$typeViolation', '$dateViolation', '$natureSanction', '$nbreJoursRestantSanction', '$soldePointsScp', '$dateDerniereSensibilisation', '$themesAbordes')";

if ($conn->query($sql) === TRUE) {

      echo'<div class="mt-3 row mx-auto w-75">
      <div class="alert alert-success alert-dismissible fade show" role="alert">
            Safe to Dispatch crée avec Succés !
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
      </div>
    </div>';


  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

$conn->close();
}
  



 //////////////////////////////////////////////////////////////////////////////////////
 function modifierUnSafeToDispatch($refSafeToDispatch,$refRequestDate,$refTransporteur,$refCamion,$refProduit,$dateDernierVoyage,$refLieuLivraison,$dateDernierSafeLoad,$dateEcheanceAssurCamion,$dateEcheanceAssurProduit,$dateEcheanceCcva,$dateEcheanceAssurBumigeb,$dateEcheanceAssurControlTech,$extractionVideo,$etatObc,$etatCamera,$refChauffeur,$numPermis,$dateFormationChauffeur,$echeanceVisiteMedicale,$dernierTrajet,$datedernierTrajet,$commitViolation,$typeViolation,$dateViolation,$natureSanction,$nbreJoursRestantSanction,$soldePointsScp,$dateDerniereSensibilisation,$themesAbordes){

  $server="localhost";
  $username="root";
  $password="";
  $db="db_transport";
  
  $conn = new mysqli($server,$username,$password,$db);
  
  // Check connection
  if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
    exit();
  }
  
  $themesAbordes=$conn->real_escape_string($themesAbordes);
  $typeViolation=$conn->real_escape_string($typeViolation);
  $natureSanction=$conn->real_escape_string($natureSanction);

  $sql = "UPDATE safetodispatchs SET date_Etablissement='$refRequestDate', ref_Transporteur='$refTransporteur', refCamion='$refCamion', refProduit='$refProduit', dateDernierVoyage='$dateDernierVoyage', refLieuLivraison='$refLieuLivraison', dateDernierSafeLoad='$dateDernierSafeLoad', dateEcheanceAssurCamion='$dateEcheanceAssurCamion', dateEcheanceAssurProduit='$dateEcheanceAssurProduit', dateEcheanceCcva='$dateEcheanceCcva', dateEcheanceAssurBumigeb='$dateEcheanceAssurBumigeb', dateEcheanceAssurControlTech='$dateEcheanceAssurControlTech', extractionVideo='$extractionVideo', etatObc='$etatObc', etatCamera='$etatCamera', refChauffeur='$refChauffeur', numPermis='$numPermis', dateFormationChauffeur='$dateFormationChauffeur', echeanceVisiteMedicale='$echeanceVisiteMedicale', dernierTrajet='$dernierTrajet', datedernierTrajet='$datedernierTrajet', commitViolation='$commitViolation', typeViolation='$typeViolation', dateViolation='$dateViolation', natureSanction='$natureSanction', nbreJoursRestantSanction='$nbreJoursRestantSanction', soldePointsScp='$soldePointsScp', dateDerniereSensibilisation='$dateDerniereSensibilisation', themesAbordes='$themesAbordes' WHERE ref_SafeToDispatch='$refSafeToDispatch'";

if ($conn->query($sql) === TRUE) {

      echo'<div class="mt-3 row mx-auto w-75">
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
      Safe to Dispatch mise à jour avec Succés !
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
</div>
    </div>';


  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

$conn->close();
}
  



      
      
                  
      







?>