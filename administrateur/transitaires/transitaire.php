<?php

class Transitaire{

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

        
        $var_designation_transitaire =$this->con->real_escape_string($_POST['designation']);
        $duree_Traitement_BINGO_Target =$this->con->real_escape_string($_POST['dureeTraitementBINGOTarget']);
        


   
        $new_query = "INSERT INTO transitaires  (Designation_Transitaire, Duree_TraItement_BINGO_Target)
        VALUES('$var_designation_transitaire',$duree_Traitement_BINGO_Target)";


        $result = $this->con->query($new_query);
        if($result){
            echo 'Object inserted successfully! <br/>';
        }else{
            echo 'Failed to register, try again!';
        }
    }



    



}

?>