<?php

/*try { 
  $db = new PDO('mysql:host=localhost;dbname=prueba;charset=utf8', 'root', ''); 
    
  //echo 'Conectado a '.$db->getAttribute(PDO::ATTR_CONNECTION_STATUS); 
} catch(PDOException $ex) { 
    
  echo 'Error conectando a la BBDD. '.$ex->getMessage(); 
}


//INSERTAR
$usuario=$_POST['usuario'];
$contra=$_POST['contra'];
$direccion=$_POST['direccion'];
$cp=$_POST['cp'];

$sqlInsert="INSERT INTO usuario VALUES(null,'$usuario','$contra','$direccion','$cp')";

if($db->exec($sqlInsert)>0){
    echo "se insertó correctamente.";
}else{
    echo "ocurrió un error, revise.";
}
