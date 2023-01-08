<?php

/////////////////////EXPORTER TOUS LES SAFETODISPATCH EN EXCEL
if(isset($_POST["tousLesSafeToDispatchExcel"])){

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
  $filename = "SafeToDispatch.xls";

  // Download file
header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Type: application/vnd.ms-excel");

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

}


/////////////////////EXPORTER TOUS LES SAFETODISPATCH EN EXCEL
if(isset($_POST["tousLesVoyagesExcel"])){

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
  $filename = "Voyages.xls";

  // Download file
header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Type: application/vnd.ms-excel");

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

}


/////////////////////EXPORTER TOUS LES CAMIONS EN EXCEL
if(isset($_POST["tousLesCamionsExcel"])){

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
  $filename = "Camions.xls";

  // Download file
header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Type: application/vnd.ms-excel");

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

}



/////////////////////EXPORTER TOUS LES CHAUFFEURS EN EXCEL
if(isset($_POST["tousLesChauffeursExcel"])){

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
  $filename = "Chauffeurs.xls";

  // Download file
header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Type: application/vnd.ms-excel");

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

}


?>


