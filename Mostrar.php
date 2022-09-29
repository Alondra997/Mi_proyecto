<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>mostrar</title>
        <meta http-equiv="Content-Type"; charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale1, maximum-scale=1" />
        <link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen">
    </head>

    <header>
    </header>

    <body>
        <center>
            <h2>Empresa</h2>
            <h3>Departamentos de Recursos Humanos</h3>
            <h5>Datos Personales de Empleados</h5>
            <table border=1>
                <thead>

                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Genero</th>
                        <th>Curp</th>
                        <th>Direccion</th>
                        <th>Ciudad</th>
                        <th>Servicio Medico</th>
                        <th>Estado Civil</th>
                        <th>Hijjos</th>
                        <th>Imagen</th>
                    </tr>
                </thead>
            <tbody>

            <?php
                include ("php/abre.php");
                $consulta = "SELECT * FROM personales";
                $resultado = $conexion->query($consulta);
                while($row=$resultado->fetch_assoc()){
                    ?>
                    <tr>
                        <td><?php echo $row['id_per']; ?></td>
                        <td><?php echo $row['nom_per']; ?></td>
                        <td><?php echo $row['ape_per']; ?></td>
                        <td><?php echo $row['gen_per']; ?></td>
                        <td><?php echo $row['curp_per']; ?></td>
                        <td><?php echo $row['dir_per']; ?></td>
                        <td><?php echo $row['ciu_per']; ?></td>
                        <td><?php echo $row['ser_per']; ?></td>
                        <td><?php echo $row['est_per']; ?></td>
                        <td><?php echo $row['hij_per']; ?></td>

                        <td><img height="50px" src="data:image/jpg;base64,<?php echo base64_encode($row['img_per']); ?>"></td>

                        <th><a href="php/modificar.php?id_per=<?php echo $row['id_per']; ?>"><img height="35px" src="img/modi.png"></a></th>

                        <th><a href="php/eliminar.php?id_per=<?php echo $row['id_per']; ?>"><img height="35px" src="img/borrar.png"></a></th>
                    </tr>
                </tbody>
                    
                    <?php
                }
                ?>
                <table>
                    <br>
                    <tr>
                        <th colspan="11"><a href="php/agregar.php">Agregar Empleados</th>
                    </tr>
            </table>
            </center>
            </body><br>

            <footer>

                <center>
                    <p>Desarrolladores IT / contacto: desarrollojuarez@gmail.com</p>
                    <p>Ciudad Ju&aacute;rez, Chih. Agosto - 2022</p>
                </center>
            </footer>
        </html>