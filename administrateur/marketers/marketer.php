<?php

class Marketer{

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

        
        $var_designation_marketer =$this->con->real_escape_string($_POST['designationMarketer']);
        $duree_Emission_OC_Target=$this->con->real_escape_string($_POST['dureeEmissionOCTarget']);
        $duree_Emission_BonSonabhy_Target=$this->con->real_escape_string($_POST['dureeEmissionBonSonabhyTarget']);


   
        $new_query = "INSERT INTO marketers  (Designation_Marketer, Duree_Emission_OC_Target,Duree_Emission_BonSnabhy_Target)
        VALUES('$var_designation_marketer',$duree_Emission_OC_Target,$duree_Emission_BonSonabhy_Target)";


        $result = $this->con->query($new_query);
        if($result){
            echo 'Object inserted successfully! <br/>';
             // Redirection
             header("Location:../page_administrateurs.php?action=ajoutMarketer&adding=$var_designation_marketer");

        }else{
            echo 'Failed to register, try again!';
        }
    }



    



}

?>