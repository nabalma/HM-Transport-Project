<?php

///////////////////////////////////////////////////////////////////////
      function genererDepotChargementCreationVoyage(){

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

      $sql = "SELECT Ref_Depot_Chargement, Designation_Depot_Chargement FROM depotschargements ORDER BY Designation_Depot_Chargement";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo '<option value="';echo $row["Ref_Depot_Chargement"];echo'">';echo $row["Designation_Depot_Chargement"];echo'</option>';
        }
      } else {
        echo "0 results";
      }
      $conn->close();

      }

/////////////////////////////////////////////////////////////////////////////
    function genererDepotLivraisonCreationVoyage(){

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
      
      $sql = "SELECT Ref_Depot_Livraison, Designation_Depot_Livraison FROM depotslivraisons ORDER BY Designation_Depot_Livraison";
      $result = $conn->query($sql);
      
      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo '<option value="';echo $row["Ref_Depot_Livraison"];echo'">';echo $row["Designation_Depot_Livraison"];echo'</option>';
        }
      } else {
        echo "0 results";
      }
      $conn->close();
      
      }

/////////////////////////////////////////////////////////////////////////////////////
      function genererChauffeursCreationVoyage(){

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
        
        $sql = "SELECT ref_Chauffeur, nom_Chauffeur, prenom_Chauffeur FROM chauffeurs ORDER BY nom_Chauffeur";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo '<option value="';echo $row["ref_Chauffeur"];echo'">';echo $row["nom_Chauffeur"]." - ".$row["prenom_Chauffeur"];echo'</option>';
          }
        } else {
          echo "0 results";
        }
        $conn->close();
        
        }
        
  //////////////////////////////////////////////////////////////////
        function genererCamionsCreationVoyage(){

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
          
          $sql = "SELECT Ref_Camion, immatriculation_tracteur, immatriculation_Semi_Remorque FROM camions ORDER BY immatriculation_tracteur";
          $result = $conn->query($sql);
          
          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo '<option value="';echo $row["Ref_Camion"];echo'">';echo $row["immatriculation_tracteur"]." / ".$row["immatriculation_Semi_Remorque"];echo'</option>';
            }
          } else {
            echo "0 results";
          }
          $conn->close();
          
          }

     //////////////////////////////////////////////////////////////////////////////////////
          function genererTransitairesCreationVoyage(){

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
            
            $sql = "SELECT Ref_Transitaire, Designation_Transitaire FROM transitaires ORDER BY Designation_Transitaire";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                echo '<option value="';echo $row["Ref_Transitaire"];echo'">';echo $row["Designation_Transitaire"];echo'</option>';
              }
            } else {
              echo "0 results";
            }
            $conn->close();
            
            }

//////////////////////////////////////////////////////////////////////////////
            function genererlisteVoyages($camion, $chauffeur){

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
              
              $sql = "SELECT * FROM voyages WHERE ref_Camion_Voyage='$camion' AND ref_Chauffeur_Voyage='$chauffeur' ORDER BY ref_Voyage";
              $result = $conn->query($sql);
              
              if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  echo 
                  '
                  <tr>
                      <th scope="row">';echo $row["ref_Voyage"];echo'</th>
                      <td scope="row">';echo $row["req_Transporteur"];echo'</td>
                      <td scope="row">';echo designationDepotChargement($row["depot_de_chargement"]);echo'</td>
                      <td scope="row">';echo designationDepotLivraison($row["depot_de_livraison"]);echo'</td>
                      <td scope="row">';echo designationChauffeur($row["ref_Chauffeur_Voyage"]);echo'</td>
                      <td scope="row">';echo designationCamion($row["ref_Camion_Voyage"]);echo'</td>
                      <td scope="row">';echo designationTransitaire($row["ref_Transitaire"]);echo'</td>                     
                      <td scope="row">';echo $row["bon_dEnlevement_Sonabhy"];echo'</td>
                      <td scope="row">';echo $row["tournee_Marketer"];echo'</td>
                      <td scope="row">';echo $row["ordre_de_Chargement_Marketer"];echo'</td>
                      <td scope="row">';echo $row["plan_de_Voyage"];echo'</td>
                      <td scope="row">';echo $row["bL_Livraison_Client"];echo'</td>
                      <td scope="row">';echo $row["volume_livre"];echo'</td>
                      <td scope="col"><a class="text-decoration-none" href="editVoyages.php?refVoy=';echo $row["ref_Voyage"];echo'"><div class="text-danger fs-5 text-center">&#9998</div></a></td>
                  </tr>
                    '

                  ;
                }
              } else {
                echo 
                '
                <div class="ms-5 mt-1 py-0 w-50 alert alert-danger" role="alert">
                    Aucun resultat trouvé !
                </div>
                ';
              }
              $conn->close();
              
              }

              //////////////////////////////////////////////////////////////////////////////
            function genererlistetouslesVoyages(){

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
              
              $sql = "SELECT * FROM voyages ORDER BY ref_Voyage";
              $result = $conn->query($sql);
              
              if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  echo 
                  '
                  <tr>
                      <th scope="row">';echo $row["ref_Voyage"];echo'</th>
                      <td scope="row">';echo $row["req_Transporteur"];echo'</td>
                      <td scope="row">';echo designationDepotChargement($row["depot_de_chargement"]);echo'</td>
                      <td scope="row">';echo designationDepotLivraison($row["depot_de_livraison"]);echo'</td>
                      <td scope="row">';echo designationChauffeur($row["ref_Chauffeur_Voyage"]);echo'</td>
                      <td scope="row">';echo designationCamion($row["ref_Camion_Voyage"]);echo'</td>
                      <td scope="row">';echo designationTransitaire($row["ref_Transitaire"]);echo'</td>                     
                      <td scope="row">';echo $row["bon_dEnlevement_Sonabhy"];echo'</td>
                      <td scope="row">';echo $row["tournee_Marketer"];echo'</td>
                      <td scope="row">';echo $row["ordre_de_Chargement_Marketer"];echo'</td>
                      <td scope="row">';echo $row["plan_de_Voyage"];echo'</td>
                      <td scope="row">';echo $row["bL_Livraison_Client"];echo'</td>
                      <td scope="row">';echo $row["volume_livre"];echo'</td>
                      <td scope="col"><a class="text-decoration-none" href="#"><div class="text-danger fs-5 text-center">&#9998</div></a></td>
                  </tr>
                    '

                  ;
                }
              } else {
                echo 
                '
                <div class="ms-5 mt-1 py-0 w-50 alert alert-danger" role="alert">
                    Aucun resultat trouvé !
                </div>
                ';
              }
              $conn->close();
              
              }
          
   //////////////////////////////////////////////////////////////////////////////////////
              function designationDepotChargement($ref){

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
                
                $sql = "SELECT Designation_Depot_Chargement FROM depotsChargements WHERE Ref_Depot_Chargement='$ref'";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    echo $row["Designation_Depot_Chargement"];                                     
                  }
                } else {
                  echo "0 results";
                }
                $conn->close();
                
                }
            
                //////////////////////////////////////////////////////////////////////////////////////
              function designationDepotLivraison($ref){

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
                
                $sql = "SELECT Designation_Depot_Livraison FROM depotslivraisons WHERE Ref_Depot_Livraison='$ref'";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    echo $row["Designation_Depot_Livraison"];                                     
                  }
                } else {
                  echo "0 results";
                }
                $conn->close();
                
                }


  //////////////////////////////////////////////////////////////////////////////////////
              function designationTransitaire($ref){

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
                
                $sql = "SELECT Designation_Transitaire FROM transitaires WHERE Ref_Transitaire='$ref'";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    echo $row["Designation_Transitaire"];                                     
                  }
                } else {
                  echo "0 results";
                }
                $conn->close();
                
                }

//////////////////////////////////////////////////////////////////////////////////////
              function designationChauffeur($ref){

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
                
                $sql = "SELECT nom_Chauffeur, prenom_Chauffeur FROM chauffeurs WHERE Ref_Chauffeur='$ref'";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    echo $row["nom_Chauffeur"]." ".$row["prenom_Chauffeur"];                                     
                  }
                } else {
                  echo "0 results";
                }
                $conn->close();
                
                }


//////////////////////////////////////////////////////////////////////////////////////
              function designationCamion($ref){

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
                
                $sql = "SELECT immatriculation_Tracteur, immatriculation_Semi_Remorque FROM camions WHERE Ref_Camion='$ref'";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    echo $row["immatriculation_Tracteur"]." / ".$row["immatriculation_Semi_Remorque"];                                     
                  }
                } else {
                  echo "0 results";
                }
                $conn->close();
                
                }



   //////////////////////////////////////////////////////////////////////////////////////
          function genererStatutVoyage(){

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
            
            $sql = "SELECT refStatutVoyage, designationStatutVoyage FROM statutsvoyage ORDER BY designationStatutVoyage";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                echo '<option value="';echo $row["refStatutVoyage"];echo'">';echo $row["designationStatutVoyage"];echo'</option>';
              }
            } else {
              echo "0 results";
            }
            $conn->close();
            
            }

/////////////////////////////////////////////////////////////////
            function designationStatutVoyage($ref){

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
              
              $sql = "SELECT refStatutVoyage, designationStatutVoyage FROM statutsvoyage WHERE refStatutVoyage='$ref'";
              $result = $conn->query($sql);
              
              if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  echo $row["designationStatutVoyage"];                                     
                }
              } else {
                echo "0 results";
              }
              $conn->close();
              
              }
          



  //////////////////////////////////////////////////////////////////////////////
            function rechercherleVoyage($ref){

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
              
              $sql = "SELECT * FROM voyages WHERE ref_Voyage='$ref'";
              $result = $conn->query($sql);
              
              if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                 return $row;
                                    ;
                }
              } else {
                echo 
                '
                <div class="ms-5 mt-1 py-0 w-50 alert alert-danger" role="alert">
                    Aucun resultat trouvé !
                </div>
                ';
              }
              $conn->close();
              
              }







?>