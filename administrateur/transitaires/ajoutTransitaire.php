<?php
// Include Customer/class file
include 'transitaire.php';
//Create customer object
$transitaireObj = new Transitaire();
// Insert Record into customer table
if(isset($_POST['submitTransitaire'])){
    $transitaireObj->insertData($_POST);
}
?>