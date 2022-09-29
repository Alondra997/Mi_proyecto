<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen">
    </head>
    <body>
        <?php
            include("abre.php");
            $id_per = $_REQUEST['id_per'];

            $consulta = "SELECT * FROM personales WHERE id_per = '$id_per'";
 
            $resultado = $conexion->query($consulta);
            $row=$resultado->fetch_assoc();
        ?>
        <center>
        <h1>Actualizacion de Datos</h1>
            <form action="actualizar.php?id_per=<?php echo $row['id_per']; ?>" method= "POST" enctype="multipart/form-data"> <br><br>

            <input type="text" name="nom_per" placeholder="Nombre..........." value = "<?php echo $row['nom_per']; ?>"/><br><br>
            <input type="text" name="ape_per" placeholder="Apellidos........" value = "<?php echo $row['ape_per']; ?>"/><br><br>
            <input type="text" name="gen_per" placeholder="Genero..........." value = "<?php echo $row['gen_per']; ?>"/><br><br>
            <input type="text" name="curp_per" placeholder="Curp............" value = "<?php echo $row['curp_per']; ?>"/><br><br>
            <input type="text" name="dir_per" placeholder="Direccion........" value = "<?php echo $row['dir_per']; ?>"/><br><br>
            <input type="text" name="ciu_per" placeholder="Ciudad..........." value = "<?php echo $row['ciu_per']; ?>"/><br><br>
            <input type="text" name="ser_per" placeholder="Servicio Medico.." value = "<?php echo $row['ser_per']; ?>"/><br><br>
            <input type="text" name="est_per" placeholder="Estado Civil....." value = "<?php echo $row['est_per']; ?>"/><br><br>
            <input type="text" name="hij_per" placeholder="Num Hijos........" value = "<?php echo $row['hij_per']; ?>"/><br><br>

            <td><img  height="50px" src="data:image/jpg;base64,<?php echo base64_encode($row['img_per']); ?>"></td>
            <input type="file" name="img_per"/>
            <input type="submit" value="Aceptar"/>
        </form> 
    </center>
</body> 