<?php
    session_start();
    include_once("../../config/DBConect.php");
    include_once("../../config/Config.php");

    if(isset($_POST['nombre']))     $nombre = $_POST['nombre']; 
    if(isset($_POST['estado']))     $estado = $_POST['estado']; 
    if(isset($_POST['horas']))     $horas = $_POST['horas']; 
    if(isset($_POST['id']))         $id = $_POST['id']; 

    $conexion = new Database;  
    $result = $conexion->updateMateria($nombre,$estado,$horas,$id);
    echo $nombre;
    header("Location:".ROOT."modulos/materias/materias.php?mensaje=".$result);

?>