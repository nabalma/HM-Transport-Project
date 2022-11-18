<?php

require "transitaire.php";
$transitaireObj=new Transitaire(); 

$Req= "CREATE TABLE IF NOT EXISTS transitaires (
Ref_Transitaire INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
Designation_Transitaire VARCHAR(30) NOT NULL ,
Duree_Traitement_BINGO_Target DECIMAL(6,2) NOT NULL)";


$transitaireObj->con->query($Req);

?>
