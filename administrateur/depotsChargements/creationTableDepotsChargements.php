<?php

require "depotChargement.php";
$depotChargementObj=new DepotChargement(); 

$Req= "CREATE TABLE IF NOT EXISTS depotsChargements (
Ref_Depot_Chargement INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
Designation_Depot_Chargement VARCHAR(20) NOT NULL ,
Duree_Trajet_allee_Chargement_Target DECIMAL(6,2) NOT NULL ,
Duree_Avant_Chargement_Target DECIMAL(6,2) NOT NULL ,
Duree_Chargement_Target DECIMAL(6,2) NOT NULL ,
Duree_Formalite_Apres_Chargement_Target DECIMAL(6,2) NOT NULL ,
Duree_Trajet_Retour_DepotFrontiere_Target DECIMAL(6,2) NOT NULL ,
Duree_Formalite_Transit_Frontière_Target DECIMAL(6,2) NOT NULL ,
Duree_Trajet_Retour_FrontiereArrivee_Target DECIMAL(6,2) NOT NULL)";

$depotChargementObj->con->query($Req);

?>
