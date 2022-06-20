<?php ob_start();?> 
<?php session_start();?> 


  <!----------------------------------------------------------------------------------------------------------------->

  <?php

$_SESSION['sess_nom']= null;
$_SESSION['sess_prenom']= null;
$_SESSION['sess_email']= null;
$_SESSION['sess_profil']= null;

header("Location: ./login.php"); 
 exit;

?>

     

      

      

      

  


  <!----------------------------------------------------------------------------------------------------------------->
<?php include "includes/footer.php"; ?>
