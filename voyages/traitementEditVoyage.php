<?php session_start(); ?>
<?php include "includes/voyages_header.php"; ?>
<?php include "includes/fonctionsVoyages.php"; ?>


<!-------------------------------------------------------------------->
<?php
//Recuperation de la Ref du voyage en cours
$ref=$_GET['refVoyage'];
//Recuperation du voyage precedent stockée sous la variable $voyPrec, appel a la fonction rechercherlePrecedentVoyage 
$voyPrec=rechercherlePrecedentVoyage($ref);
?>


<?php
if(isset($_POST['miseajourVoyage'])){
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_transport";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Les variables pour le voyage
$refVoyage=$_GET['refVoyage'];
$reqTransporteur=$_POST['reqTransporteur'];
$depotChargement=$_POST['depotChargement'];
$depotLivraison=$_POST['depotLivraison'];
$chauffeur=$_POST['chauffeur'];
$camion=$_POST['camion'];
$besonabhy=$_POST['besonabhy'];
$transitaire=$_POST['transitaire'];
$tournee=$_POST['tournee'];
$numoc=$_POST['numoc'];
$planvoyage=$_POST['planvoyage'];
$numbl=$_POST['numbl'];
$vollivre=$_POST['vollivre'];
$coulage=$_POST['coulage'];
$statutVoyage=$_POST['statutVoyage'];

// Les variables pour le cyclogramme
if($voyPrec!=null)
{
    $refVoyPrec=$voyPrec["ref_Voyage"];
}


$dateOC=$_POST["dateOC"];
$dateBonSbhy=$_POST["dateBonSbhy"];
$dateDepart=$_POST["dateDepart"];
$dateArrFrtAllee=$_POST["dateArrFrtAllee"];
$dateArrDeptChrgt=$_POST["dateArrDeptChrgt"];
$dateChrgt=$_POST["dateChrgt"];
$dateDeparDptChrgmt=$_POST["dateDeparDptChrgmt"];
$dateArrFrtRetour=$_POST["dateArrFrtRetour"];
$dateArrOuaga=$_POST["dateArrOuaga"]; 
if($voyPrec!=null)
{
$dateArrVoyPrec=$voyPrec["dateRetourDuSite"];  
}
$dateSortieBingo=$_POST["dateSortieBingo"];
$dateArrSurSite=$_POST["dateArrSurSite"];
$dateLivraison=$_POST["dateLivraison"];
$dateSortieSite=$_POST["dateSortieSite"]; 
$dateRetour=$_POST["dateRetour"];
$dateInspection=$_POST["dateInspection"]; 
$dateCorrInspect=$_POST["dateCorrInspect"];
$dateAnnalySuiv=$_POST["dateAnnalySuiv"];
$commentaires=$_POST["commentaires"]; 

//Dans le cas ou il sagit du premier voyage, la ref voyage precedente est inexistante, la mise a jour est faite sans tenir compte de ces champs
if($voyPrec==null){
    $sql = "UPDATE voyages SET req_Transporteur='$reqTransporteur', depot_de_chargement='$depotChargement', depot_de_livraison='$depotLivraison', ref_Chauffeur_Voyage='$chauffeur', ref_Camion_Voyage='$camion', ref_Transitaire='$transitaire', bon_dEnlevement_Sonabhy='$besonabhy', tournee_Marketer='$tournee', ordre_de_Chargement_Marketer='$numoc', plan_de_Voyage='$planvoyage', bL_Livraison_Client='$numbl', volume_livre='$vollivre', volume_coulage='$coulage', statutVoyage='$statutVoyage', dateOC='$dateOC', dateBonSbhy='$dateBonSbhy', dateDepart='$dateDepart', dateArrFrtAllee='$dateArrFrtAllee', dateArrDepChargmt='$dateArrDeptChrgt', dateChargmt='$dateChrgt', dateDepaDepChrgmt='$dateDeparDptChrgmt', dateArrFrtRetour='$dateArrFrtRetour', dateArrOuaga='$dateArrOuaga', dateSortieBingo='$dateSortieBingo', dateArrSurSite='$dateArrSurSite', dateLivraison='$dateLivraison', dateSortieDuSite='$dateSortieSite', dateRetourDuSite='$dateRetour', dateInspection='$dateInspection', dateCorrectionInspect='$dateCorrInspect', dateAnalyseOBCSuiv='$dateAnnalySuiv', Commentaires='$commentaires' WHERE ref_Voyage='$refVoyage'";
}
else // Dans le cas ou il exitse la ref voyage precedente, la mise a jour est faite en tenant compte de tous les champs
{
    $sql = "UPDATE voyages SET req_Transporteur='$reqTransporteur', depot_de_chargement='$depotChargement', depot_de_livraison='$depotLivraison', ref_Chauffeur_Voyage='$chauffeur', ref_Camion_Voyage='$camion', ref_Transitaire='$transitaire', bon_dEnlevement_Sonabhy='$besonabhy', tournee_Marketer='$tournee', ordre_de_Chargement_Marketer='$numoc', plan_de_Voyage='$planvoyage', bL_Livraison_Client='$numbl', volume_livre='$vollivre', volume_coulage='$coulage', statutVoyage='$statutVoyage', refVoyPrec='$refVoyPrec', dateArrVoyPrec='$dateArrVoyPrec', dateOC='$dateOC', dateBonSbhy='$dateBonSbhy', dateDepart='$dateDepart', dateArrFrtAllee='$dateArrFrtAllee', dateArrDepChargmt='$dateArrDeptChrgt', dateChargmt='$dateChrgt', dateDepaDepChrgmt='$dateDeparDptChrgmt', dateArrFrtRetour='$dateArrFrtRetour', dateArrOuaga='$dateArrOuaga', dateSortieBingo='$dateSortieBingo', dateArrSurSite='$dateArrSurSite', dateLivraison='$dateLivraison', dateSortieDuSite='$dateSortieSite', dateRetourDuSite='$dateRetour', dateInspection='$dateInspection', dateCorrectionInspect='$dateCorrInspect', dateAnalyseOBCSuiv='$dateAnnalySuiv', Commentaires='$commentaires' WHERE ref_Voyage='$refVoyage'";
}


if ($conn->query($sql) === TRUE) {

      echo'<div class="mt-3 row mx-auto w-75">
      <div class="alert alert-success" role="alert">
            Le Voyage est mise à jour avec Succés !
      </div>
    </div>';


  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

$conn->close();


}


?>

<div class="row d-flex">
  <div class="col"></div>
  <div class="col"></div>
  <div class="col"></div>
  <div class="col">
    <a class="btn btn-secondary btn-lg" href="page_voyages.php"><svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
  <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z"/>
</svg>Acceuil Operations Voyages 
    </a>
    
  </div>
</div>




<!-------------------------------------------------------------------->
<?php include "includes/footer.php"; ?>