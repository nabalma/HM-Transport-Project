<?php

class DepotChargement{

    // Cobfigurations DB
    private $servername = '127.0.0.1';
    private $username = 'root';
    private $password = '';
    private $database = 'db_transport';
    public $con;
    // Database Connection
    public function __construct(){
        $this->con = new mysqli($this->servername, $this->username,
         $this->password, $this->database);
         if(mysqli_connect_error()){
            trigger_error("Failed to connect MYSQL: " .mysqli_connect_error());
         }
         else {
           return $this->con;            
         }
    }
    // Insert data
    public function insertData($post){

        $var_Designation_Depot_Chargement= $this->con->real_escape_string($_POST['designation']);
        $var_Duree_Trajet_allee_Chargement_Target= $this->con->real_escape_string($_POST['dureeTrajetAlleeChargementTarget']);
        $var_Duree_Avant_Chargement_Target=$this->con->real_escape_string($_POST['dureeAvantChargementTarget']);
        $var_Duree_Chargement_Target= $this->con->real_escape_string($_POST['dureeChargementTarget']);
        $var_Duree_Formalite_Apres_Chargement_Target= $this->con->real_escape_string($_POST['dureeFormaliteApresChargementTarget']);
        $var_Duree_Trajet_Retour_DepotFrontiere_Target= $this->con->real_escape_string($_POST['dureeTrajetRetourVersFrontiereTarget']);
        $var_Duree_Formalite_Transit_Frontière_Target= $this->con->real_escape_string($_POST['dureeFormaliteTransitFrontiereTarget']);
        $var_Duree_Trajet_Retour_FrontiereArrivee_Target=$this->con->real_escape_string($_POST['dureeTrajetRetourFrontiereArriveeTarget']);

   
        $new_query = "INSERT INTO depotsChargements  (Designation_Depot_Chargement, Duree_Trajet_allee_Chargement_Target, Duree_Avant_Chargement_Target, Duree_Chargement_Target, Duree_Formalite_Apres_Chargement_Target, Duree_Trajet_Retour_DepotFrontiere_Target, Duree_Formalite_Transit_Frontière_Target, Duree_Trajet_Retour_FrontiereArrivee_Target)
        VALUES('$var_Designation_Depot_Chargement',$var_Duree_Trajet_allee_Chargement_Target,$var_Duree_Avant_Chargement_Target,$var_Duree_Chargement_Target, $var_Duree_Formalite_Apres_Chargement_Target,$var_Duree_Trajet_Retour_DepotFrontiere_Target,$var_Duree_Formalite_Transit_Frontière_Target, $var_Duree_Trajet_Retour_FrontiereArrivee_Target)";


        $result = $this->con->query($new_query);
        if($result){
            echo 'Object inserted successfully! <br/>';
            // Redirection
            header("Location:../../superviseur/page_superviseurs.php?action=ajout&depot=$var_Designation_Depot_Chargement");
        }else{
            echo 'Failed to register, try again!';
        }
    }



    



}

?>