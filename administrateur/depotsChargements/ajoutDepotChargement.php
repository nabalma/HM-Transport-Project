<?php
// Include Customer/class file
include 'depotChargement.php';
//Create customer object
$depotChargementObj = new DepotChargement();
// Insert Record into customer table
if(isset($_POST['submitDepotChargement'])){
    $depotChargementObj->insertData($_POST);
}
?>