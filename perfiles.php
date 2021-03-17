<?php
    include'conexion.php';
    
    $usuario = $_POST["usu"];
    $password = $_POST["con"];
    session_start();
    $_SESSION['usu']=$usuario;			
	$consulta="SELECT *  FROM 
              usuarios WHERE nic_usuario = '$usuario' and clave_usuario= '$password'";  
    $ejecucion_consulta=mysqli_query($con,$consulta);	
    $array=mysqli_fetch_array($ejecucion_consulta);
    
    if($array['id_usuario']==1){

        header("location:index-admin.php");
    }else 
        if($array['id_usuario']==2){
            header("location:index-operador.php");
        }else 
            if($array['id_usuario']==3){
            
            header("location:index-invitado.php");
            }else {
                
                header("location:index.html");
                
            }
    mysqli_free_result($ejecucion_consulta);
    mysqli_close($con);		        
			
          