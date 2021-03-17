<?php
    include'conexion.php';
    if(!isset($_POST['buscarDato'])){
        $_POST['buscarDato']="";
        $buscar = $_POST['buscarDato']; 
        
    }
    $buscar = $_POST['buscarDato']; 
    $sql="SELECT * FROM tabla_persona WHERE dni_persona LIKE '%$buscar%'";
    $sql_query=mysqli_query($con,$sql);




?>