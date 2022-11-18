<?php

require "depotLivraison.php";
$depotLivraisonObj=new DepotLivraison(); 

$Req= "CREATE TABLE IF NOT EXISTS depotsLivraisons (
Ref_Depot_Livraison INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
Designation_Depot_Livraison VARCHAR(30) NOT NULL ,
Duree_Trajet_allee_Livraison_Target DECIMAL NOT NULL ,
Duree_Avant_Livraison_Target DECIMAL NOT NULL ,
Duree_Livraison_Target DECIMAL NOT NULL ,
Duree_Formalite_Apres_Livraison_Target DECIMAL NOT NULL ,
Duree_Trajet_Retour_Livraison_Target DECIMAL NOT NULL)";


$depotLivraisonObj->con->query($Req);

?>
