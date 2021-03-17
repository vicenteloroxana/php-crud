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
<h1>Bienvenido Operador</h1>
<h2>Formulario de Actualizacion</h2>
    <form action="operador.php" method="POST" enctype="multipart/form-data">
        <div>
            <label for="Nombre">Nombre:</label>
            <input type="text" name="Nombre" id="Nombre">
        </div>
        <br>
        <div>
            <label for="Apellido">Apellido:</label>
            <input type="text" name="Apellido" id="Apellido">
        </div>
        <br>
        <div>
            <label for="Dni">Dni:</label>
            <input type="text" name="Dni" id="Dni">
        </div>
        <br>
        <div>
            <label for="Telefono">Telefono:</label>
            <input type="number" name="Telefono" id="Telefono">
        </div>
        <br>
        <div>
            <label for="Correo">Correo:</label>
            <input type="email" name="Correo" id="Correo">
        </div>
        <br>
        <div>
            <label for="Codigo">Codigo Postal:</label>
            <input type="number" name="Codigo" id="Codigo">
        </div>
        <br>
        <div>
            <label for="Foto">Foto:</label>
            <input id="Foto"  type="file" name="imagen">
        </div>
        <br>
        <div>
            <label for="Direccion">Direccion:</label>
            <input type="text" name="Direccion" id="Direccion">
        </div>
        <br>
        <div >
            
            <input class="btn_actualizar"type="submit" name="btn_actualizar" value="Actualizar">
        </div>
    </form>  
    <hr>  
    <h2>Buscador</h2>
    <form action="index-operador.php" method="POST">
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
