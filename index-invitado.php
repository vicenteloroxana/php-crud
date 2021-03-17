<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
                background-color:#9b9b9b;
        }
        th{
            background-color: orange;
        }
        .btn_actualizar ,  .btn_insertar{
            background-color:orange;
            font-weight: bold; 
            
        }
    </style>
</head>
<body>
    <h1>Bienvenido Invitado</h1>
    <h2>Buscador</h2>
    <form action="index-invitado.php" method="POST">
        <input type="text" name="buscarDato">
        <input type="submit" value="Buscar">       
    </form>
    <hr>
    <h2>Resultados</h2>
    <table >
        <thead >
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Dni</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Codigo Postal</th>
            <th>Foto</th>
            <th>Direccion</th>
        </thead>
        <tbody> 
        <?php
            
            include 'buscarDatos.php';
            while($fila=mysqli_fetch_array($sql_query)){?>

                <tr>
                    <td><?=$fila['id_persona']?></td>
                    <td><?=$fila['nom_persona']?></td>
                    <td><?=$fila['apell_persona']?></td>
                    <td><?=$fila['dni_persona']?></td>
                    <td><?=$fila['tel_persona']?></td>
                    <td><?=$fila['email_persona']?></td>
                    <td><?=$fila['cp_persona']?></td>
                    <td><?=$fila['foto_persona']?></td>
                    <td><?=$fila['dir_persona']?></td>
		            	
                </tr>

            <?php }   mysqli_free_result($sql_query);
            
        
            ?>
        </tbody>
    </table>
</body>
</html>
