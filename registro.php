<?php

try { 
  $db = new PDO('mysql:host=localhost;dbname=prueba;charset=utf8', 'root', ''); 
    
  //echo 'Conectado a '.$db->getAttribute(PDO::ATTR_CONNECTION_STATUS); 
} catch(PDOException $ex) { 
    
  echo 'Error conectando a la BBDD. '.$ex->getMessage(); 
}

//INSERTAR
$email=$_POST['email'];
$contra=$_POST['contra'];

$contras = md5 ($contra);

$direccion=$_POST['direccion'];
$cp=$_POST['cp'];
$muni=$_POST['inputState'];
$sqlInsert="INSERT INTO usuario VALUES(null,'$email','$contras','$direccion','$cp','$muni')";

if($db->exec($sqlInsert)>0){
    echo "se insertó correctamente.";
}else{
    echo "ocurrió un error, revise.";
}
