<?php session_start(); ?>
<?php include "includes/voyages_header.php"; ?>


<!-------------------------------------------------------------------->


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
$statutVoyage=$_POST['statutVoyage'];

// Les variables pour le cyclogramme
$refVoyPrec=$_POST["refVoyPrec"];
$dateOC=$_POST["dateOC"];
$dateBonSbhy=$_POST["dateBonSbhy"];
$dateDepart=$_POST["dateDepart"];
$dateArrFrtAllee=$_POST["dateArrFrtAllee"];
$dateArrDeptChrgt=$_POST["dateArrDeptChrgt"];
$dateChrgt=$_POST["dateChrgt"];
$dateDeparDptChrgmt=$_POST["dateDeparDptChrgmt"];
$dateArrFrtRetour=$_POST["dateArrFrtRetour"];
$dateArrOuaga=$_POST["dateArrOuaga"]; 



$dateArrVoyPrec=$_POST["dateArrVoyPrec"];
                
$dateSortieBingo=$_POST["dateSortieBingo"];
$dateArrSurSite=$_POST["dateArrSurSite"];
$dateLivraison=$_POST["dateLivraison"];
$dateSortieSite=$_POST["dateSortieSite"]; 
$dateRetour=$_POST["dateRetour"];
$dateInspection=$_POST["dateInspection"]; 
$dateCorrInspect=$_POST["dateCorrInspect"];
$dateAnnalySuiv=$_POST["dateAnnalySuiv"];
$commentaires=$_POST["commentaires"]; 












$sql = "UPDATE voyages (req_Transporteur, depot_de_chargement, depot_de_livraison, ref_Chauffeur_Voyage, ref_Camion_Voyage, ref_Transitaire, bon_dEnlevement_Sonabhy, tournee_Marketer, ordre_de_Chargement_Marketer, plan_de_Voyage, bL_Livraison_Client, volume_livre) VALUES ('$reqTransporteur', '$depotChargement', '$depotLivraison', '$chauffeur', '$camion', '$transitaire', '$besonabhy', '$tournee', '$numoc', '$planvoyage', '$numbl', '$vollivre')";

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