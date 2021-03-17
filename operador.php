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
			header('location:index-operador.php');
		
		}
		mysqli_close($con);
	}
	
	