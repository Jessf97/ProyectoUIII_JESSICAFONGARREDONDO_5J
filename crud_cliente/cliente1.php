<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM cliente1";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA CLIENTE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="id_cliente" placeholder="id cliente">
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre">
                                    <input type="text" class="form-control mb-3" name="apellidos" placeholder="apellidos">
                                    <input type="text" class="form-control mb-3" name="telefono" placeholder="telefono">
                                    <input type="text" class="form-control mb-3" name="correo_electronico" placeholder="correo electronico">
                                    <input type="text" class="form-control mb-3" name="direccion" placeholder="direccion">
                                    <input type="text" class="form-control mb-3" name="fecha_ap" placeholder="fecha activacion de paquete">
                                    <input type="submit" class="btn btn-primary">
                                    <a href="../index.php">Inicio</a></li>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>id_cliente</th>
                                        <th>nombre</th>
                                        <th>apellidos</th>
                                        <th>telefono</th>
                                        <th>correo_electronico</th>
                                        <th>direccion</th>
                                        <th>fecha_ap</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id_cliente']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['apellidos']?></th>
                                                <th><?php  echo $row['telefono']?></th>   
                                                <th><?php  echo $row['correo_electronico']?></th>  
                                                <th><?php  echo $row['direccion']?></th>  
                                                <th><?php  echo $row['fecha_ap']?></th>  
                                                <th><a href="actualizar.php?id=<?php echo $row['id_cliente'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id_cliente'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>