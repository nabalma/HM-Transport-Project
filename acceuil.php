<?php ob_start();?>
<?php session_start();?>  
<?php include "includes/header.php"; ?>
 <!----------------------------------------------------------------------------------------------------------------->

<?php
$profilconnecte = $_SESSION['sess_profil'] ;
switch ($profilconnecte) {
    case "Administrateur":
         header("Location: ./administrateur/page_acceuil_administrateur.php"); 
        break;

        case "Superviseur":
            header("Location: ./superviseur/page_acceuil_superviseurs.php"); 
        break;

        case "Gestionnaire des Chauffeurs":
            header("Location: ./chauffeurs/page_acceuil_chauffeurs.php"); 
        
        break;

        case "Gestionnaire des Voyages":
            header("Location: ./voyages/page_acceuil_voyages.php"); 
       
        break;

        case "Gestionnaire des Camions":
            header("Location: ./camions/page_acceuil_camions.php"); 
       
        break;

        case "Autre":
        
        break;
  
        default:
          # code...
          break;
}




?>





   <!----------------------------------------------------------------------------------------------------------------->
<?php include "includes/footer.php"; ?>