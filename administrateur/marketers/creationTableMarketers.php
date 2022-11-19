<?php

require "marketer.php";
$marketerObj=new Marketer(); 

$Req= "CREATE TABLE IF NOT EXISTS marketers (
Ref_Marketer INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
Designation_Marketer VARCHAR(30) NOT NULL ,
Duree_Emission_OC_Target DECIMAL(6,2) NOT NULL,
Duree_Emission_BonSnabhy_Target DECIMAL(6,2) NOT NULL)";


$marketerObj->con->query($Req);

?>
