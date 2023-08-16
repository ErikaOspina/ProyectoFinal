<?php
    session_start();
    include_once("../../config/DBConect.php");
    include_once("../../config/Config.php");    

    if(isset($_POST['nombre']))      $nombre = $_POST['nombre']; 
    if(isset($_POST['estado']))      $estado = $_POST['estado']; 
    if(isset($_POST['horas']))      $horas = $_POST['horas']; 

    $conexion = new Database;  
    $result = $conexion->CrearMateria($nombre,$estado,$horas);

    header("Location:".ROOT."modulos/materias/materias.php?mensaje=".$result);

?>