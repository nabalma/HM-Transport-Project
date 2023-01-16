<?php
   
      
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

        // File Name
        $filename = "sauvegarde".date("d/m/Y").".xls";

        // Download file
        header("Content-Disposition: attachment; filename=\"$filename\"");
        header("Content-Type: application/vnd.ms-excel");


         ///////////////////// CAMIONS ////////////

        $sql = "SELECT * FROM camions";

        $result = $conn->query($sql);
        // Write data to file

        $flag = false;
        while ($row = $result->fetch_assoc()){
        if (!$flag) {
                // display field/column names as first row
                echo implode("\t", array_keys($row)) . "\r\n";
                $flag = true;        
            }
            echo implode("\t", array_values($row)) . "\r\n";
        }

 ///////////////////// CHAUFFEURS ////////////
 echo "\n";
        $sql = "SELECT * FROM chauffeurs";

        $result = $conn->query($sql);
        // Write data to file

        $flag = false;
        while ($row = $result->fetch_assoc()){
        if (!$flag) {
                // display field/column names as first row
                echo implode("\t", array_keys($row)) . "\r\n";
                $flag = true;        
            }
            echo implode("\t", array_values($row)) . "\r\n";
        }


///////////////////// DEPOTS DE CHARGEMENTS ////////////
echo "\n";
        $sql = "SELECT * FROM depotschargements";

        $result = $conn->query($sql);
        // Write data to file

        $flag = false;
        while ($row = $result->fetch_assoc()){
        if (!$flag) {
                // display field/column names as first row
                echo implode("\t", array_keys($row)) . "\r\n";
                $flag = true;        
            }
            echo implode("\t", array_values($row)) . "\r\n";
        }
        

///////////////////// DEPOTS DE CHARGEMENTS ////////////
echo "\n";
        $sql = "SELECT * FROM depotslivraisons";

        $result = $conn->query($sql);
        // Write data to file

        $flag = false;
        while ($row = $result->fetch_assoc()){
        if (!$flag) {
                // display field/column names as first row
                echo implode("\t", array_keys($row)) . "\r\n";
                $flag = true;        
            }
            echo implode("\t", array_values($row)) . "\r\n";
        }

///////////////////// DEPOTS DE CHARGEMENTS ////////////
echo "\n";
        $sql = "SELECT * FROM marketers";

        $result = $conn->query($sql);
        // Write data to file

        $flag = false;
        while ($row = $result->fetch_assoc()){
        if (!$flag) {
                // display field/column names as first row
                echo implode("\t", array_keys($row)) . "\r\n";
                $flag = true;        
            }
            echo implode("\t", array_values($row)) . "\r\n";
        }




///////////////////// DEPOTS DE CHARGEMENTS ////////////
echo "\n";
        $sql = "SELECT * FROM produits";

        $result = $conn->query($sql);
        // Write data to file

        $flag = false;
        while ($row = $result->fetch_assoc()){
        if (!$flag) {
                // display field/column names as first row
                echo implode("\t", array_keys($row)) . "\r\n";
                $flag = true;        
            }
            echo implode("\t", array_values($row)) . "\r\n";
        }





///////////////////// DEPOTS DE CHARGEMENTS ////////////
echo "\n";
        $sql = "SELECT * FROM safetodispatchs";

        $result = $conn->query($sql);
        // Write data to file

        $flag = false;
        while ($row = $result->fetch_assoc()){
        if (!$flag) {
                // display field/column names as first row
                echo implode("\t", array_keys($row)) . "\r\n";
                $flag = true;        
            }
            echo implode("\t", array_values($row)) . "\r\n";
        }


///////////////////// DEPOTS DE CHARGEMENTS ////////////
echo "\n";
        $sql = "SELECT * FROM statutsvoyage";

        $result = $conn->query($sql);
        // Write data to file

        $flag = false;
        while ($row = $result->fetch_assoc()){
        if (!$flag) {
                // display field/column names as first row
                echo implode("\t", array_keys($row)) . "\r\n";
                $flag = true;        
            }
            echo implode("\t", array_values($row)) . "\r\n";
        }



///////////////////// DEPOTS DE CHARGEMENTS ////////////
echo "\n";
        $sql = "SELECT * FROM tblutilisateurs";

        $result = $conn->query($sql);
        // Write data to file

        $flag = false;
        while ($row = $result->fetch_assoc()){
        if (!$flag) {
                // display field/column names as first row
                echo implode("\t", array_keys($row)) . "\r\n";
                $flag = true;        
            }
            echo implode("\t", array_values($row)) . "\r\n";
        }

///////////////////// DEPOTS DE CHARGEMENTS ////////////
echo "\n";
        $sql = "SELECT * FROM transitaires";

        $result = $conn->query($sql);
        // Write data to file

        $flag = false;
        while ($row = $result->fetch_assoc()){
        if (!$flag) {
                // display field/column names as first row
                echo implode("\t", array_keys($row)) . "\r\n";
                $flag = true;        
            }
            echo implode("\t", array_values($row)) . "\r\n";
        }



///////////////////// DEPOTS DE CHARGEMENTS ////////////
echo "\n";
        $sql = "SELECT * FROM transporteurs";

        $result = $conn->query($sql);
        // Write data to file

        $flag = false;
        while ($row = $result->fetch_assoc()){
        if (!$flag) {
                // display field/column names as first row
                echo implode("\t", array_keys($row)) . "\r\n";
                $flag = true;        
            }
            echo implode("\t", array_values($row)) . "\r\n";
        }

///////////////////// DEPOTS DE CHARGEMENTS ////////////
echo "\n";
        $sql = "SELECT * FROM voyages";

        $result = $conn->query($sql);
        // Write data to file

        $flag = false;
        while ($row = $result->fetch_assoc()){
        if (!$flag) {
                // display field/column names as first row
                echo implode("\t", array_keys($row)) . "\r\n";
                $flag = true;        
            }
            echo implode("\t", array_values($row)) . "\r\n";
        }









        

?>