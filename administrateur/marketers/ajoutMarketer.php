<?php
// Include Customer/class file
include 'marketer.php';
//Create customer object
$marketerObj = new Marketer();
// Insert Record into customer table
if(isset($_POST['submitMarketer'])){
    $marketerObj->insertData($_POST);
}
?>