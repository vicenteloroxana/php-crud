<?php
    include'conexion.php';
	
	if(isset($_POST['btn_actualizar'])){
		$v1 = $_POST['Nombre'];
		$v2 = $_POST['Apellido'];
		$v3 = $_POST['Dni'];
		$v4 = $_POST['Telefono'];
		$v5 = $_POST['Correo'];
		$v6 = $_POST['Codigo'];
		$v7 = $_FILES['imagen']['name'];
		$v8 = $_POST['Direccion'];
		$existe=0;
		$resultados=mysqli_query($con,"SELECT * FROM tabla_persona WHERE dni_persona='$v3'");
		while($consulta=mysqli_fetch_array($resultados)){
			$existe++;
		}
		if($existe==0){
			
			echo "El documento no existe";
		}else{
			
			$update="UPDATE tabla_persona Set 
			nom_persona='$v1', apell_persona='$v2', 
			dni_persona='$v3', tel_persona='$v4',email_persona='$v5',
			cp_persona='$v6',foto_persona='$v7',dir_persona='$v8' WHERE dni_persona='$v3'";
			mysqli_query($con,$update);
			header('location:index-admin.php');
		
		}
		
	}
	
	if(isset($_POST['btn_insertar'])){
		insertar($con);
	}
	function insertar($con)
	{
        $v1 = $_POST['Nombre'];
        $v2 = $_POST['Apellido'];
        $v3 = $_POST['Dni'];
        $v4 = $_POST['Telefono'];
        $v5 = $_POST['Correo'];
        $v6 = $_POST['Codigo'];
        $v7 = $_FILES['imagen']['name'];
        $v8 = $_POST['Direccion'];
		if(isset($v7) && $v7 != "")
		{
        	$tipo = $_FILES['imagen']['type'];
        	$temp  = $_FILES['imagen']['tmp_name'];
			if( !((strpos($tipo,'gif') || strpos($tipo,'jpeg') || strpos($tipo,'png')))){
					$_SESSION['mensaje'] = 'solo se permite archivos jpeg, gif, png';
					header('location:index-admin.php');
			}else{
				$consulta="INSERT INTO tabla_persona(id_persona,nom_persona, apell_persona, dni_persona, tel_persona,email_persona,cp_persona,foto_persona,dir_persona) 
						values (null,'$v1','$v2','$v3','$v4','$v5','$v6','$v7','$v8')";
				$resultado =mysqli_query($con,$consulta); 
				if($resultado){
					move_uploaded_file($temp,'imagenes/'.$v7);   
					$_SESSION['mensaje'] = 'se ha subido correctamente';          
					header('location:index-admin.php');
				}else{
					$_SESSION['mensaje'] = 'ocurrio un error en el servidor';				
				}  
			}
		}
                    
        mysqli_close($con);
    }
?>    