<?php 

 //////////////////////////////////////////////////////////////////////////////////////
 function typeprofil($refprofil){

  switch ($refprofil) {
    case 1:
    echo "Administrateur";
    break;

    case 2:
      echo "Superviseur";
    break;

    case 3:
      echo "Gestionnaire des Chauffeurs";
    break;

    case 4:
      echo "Gestionnaire des Voyages";
    break;

    case 5:
      echo "Gestionnaire des Camions";
    break;

    case 6:
      echo "Autre";
    break;

    default:
      # code...
      break;
}
  
  }
    
    
    //////////////////////////////////////////////////////////////////////////////////////
    function listeDesUtilisateursAApprouver(){

        $server="localhost";
        $username="root";
        $password="";
        $db="db_transport";
        
        $conn = new mysqli($server,$username,$password,$db);
        
        // Check connection
        if ($conn -> connect_errno) {
          echo "Failed to connect to MySQL: " . $conn -> connect_error;
          exit();
        }
        
        $sql = "SELECT * FROM tblutilisateurs WHERE statutApprobation=0";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
           echo '<tr>
           <td>';echo $row["refUtilisateur"];echo'</td>
           <td>';echo $row["nom"];echo'</td>
           <td>';echo $row["prenom"];echo'</td>
           <td>';echo $row["email"];echo'</td>
           <td class="text-center">';echo $row["profilutilisateur"];echo'</td>
           <td >';echo typeprofil($row["profilutilisateur"]);echo'</td>
           <td class="text-center">';echo $row["statutApprobation"];echo'</td>
           <td><a href="approbationUtilisateur.php?refUtil=';echo $row["refUtilisateur"];echo'">';echo'<svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentcolor" d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68L23 12m-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8Z"/></svg></a></td>
           </tr>';                                   
          }
        } else {
          echo 
          '
          <div class="alert alert-danger" role="alert">
          <h6 class="alert-heading">Oups !</h6>
          <p>Aucune approbation utilisateur en attente !!!</p>
          <hr>
        </div>


          ';
        }
        $conn->close();
        
        }


//////////////////////////////////////////////////////////////////////////////////////
function approuverUtilisateur($refUtilisateur){
  
if(isset($_GET["refUtil"])){

  $server="localhost";
  $username="root";
  $password="";
  $db="db_transport";
  
  $conn = new mysqli($server,$username,$password,$db);
  
  // Check connection
  if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
    exit();
  }
  
  $sql = "UPDATE tblutilisateurs SET statutApprobation=1 WHERE refUtilisateur='$refUtilisateur'";
  $result = $conn->query($sql);

  echo 
          '
          <div class="alert alert-success" role="alert">
          <h6 class="alert-heading">Félicitations !</h6>
          <p> Utilisateur approuvé !!! </p>
          <hr>
        </div>


          ';
  


}
  
  }
    



?>