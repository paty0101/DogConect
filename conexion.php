<?php

try { 
  $db = new PDO('mysql:host=localhost;dbname=prueba;charset=utf8', 'root', ''); 
    
  echo 'Conectado a '.$db->getAttribute(PDO::ATTR_CONNECTION_STATUS); 
} catch(PDOException $ex) { 
    
  echo 'Error conectando a la BBDD. '.$ex->getMessage(); 
}

print_r($db->query($sql, PDO::FETCH_ASSOC)->fetchAll()); 

?>