<?php

class DepotLivraison{

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

        
        $var_designation_Depot_Livraison =$this->con->real_escape_string($_POST['designationDepotLivraison']);
        $var_duree_Trajet_allee_Livraison_Target =$this->con->real_escape_string($_POST['dureeTrajetAlleeLivraisonTarget']);
        $var_duree_Avant_Livraison_Target = $this->con->real_escape_string($_POST['dureeAvantLivraisonTarget']);
        $var_duree_Livraison_Target =$this->con->real_escape_string($_POST['dureeLivraisonTarget']);
        $var_duree_Formalite_Apres_Livraison_Target = $this->con->real_escape_string($_POST['dureeFormaliteApresLivraisonTarget']);
        $var_duree_Trajet_Retour_Livraison_Target =$this->con->real_escape_string($_POST['dureeTrajetRetourLivraisonTarget']);


   
        $new_query = "INSERT INTO depotsLivraisons  (Designation_Depot_Livraison, Duree_Trajet_allee_Livraison_Target, Duree_Avant_Livraison_Target, Duree_Livraison_Target, Duree_Formalite_Apres_Livraison_Target, Duree_Trajet_Retour_Livraison_Target)
        VALUES('$var_designation_Depot_Livraison',$var_duree_Trajet_allee_Livraison_Target,$var_duree_Avant_Livraison_Target,$var_duree_Livraison_Target, $var_duree_Formalite_Apres_Livraison_Target,$var_duree_Trajet_Retour_Livraison_Target)";


        $result = $this->con->query($new_query);
        if($result){
            echo 'Object inserted successfully! <br/>';
            // Redirection
            header("Location:../../superviseur/page_superviseurs.php?action=ajoutDepotLivraison&adding=$var_designation_Depot_Livraison");
        }else{
            echo 'Failed to register, try again!';
        }
    }



    



}

?>