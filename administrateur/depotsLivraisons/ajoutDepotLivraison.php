<?php
// Include Customer/class file
include 'depotLivraison.php';
//Create customer object
$depotLivraisonObj = new DepotLivraison();
// Insert Record into customer table
if(isset($_POST['submitDepotLivraison'])){
    $depotLivraisonObj->insertData($_POST);
}
?>