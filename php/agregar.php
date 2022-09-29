<!-- Agregar.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Formulario</title>
    <meta http-equiv="content-type"; charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Estilo-->

    <style type="text/css">
        *{margin:1; padding:0; }

        html{background-color: RGB(238, 232, 170);}

        body {width: 1040px; height: auto ; margin: auto; background-color: RGB(161, 130, 98);
        font: 14px/21px "Lucida sans", "Lucida Grande", "Lucida Sans Unicode", sans-serif; }

        th{background-color: #DFFB86; }
        td{background-color: #DFFB86; }
        ul{color: yellow;}
        a{color: green; text-decoration: none;}
        *:focus {outline: none;}

        /*----tipografia*/

        h2, . label { font-family: Georgia, Times, "Times New Roman", serif; }
        .form_hint, .requerid_notification {font-size: 11px;}

        /* -------Estilo_lista*/
        ul {width: 750px; list-style-type: none;
        list-style-position: outside; margin: 0px; padding: 0px;}

        li { 
            padding: 12px; border-bottom: 1px solid #eee;
            position: relative:  }
        li: first-child, li: last-child { border-bottom: 1px solid #777; }

        /*-----cabecera */
        h2 {margin: 0; display: inline; }
        .requerid_notification {color: #d45252; margin: 5px 0 0 0; display: inline; float: right; }

        /*---elementos_forma*/
        label {
            width: 150px; margin-top: 3px; display: inline-block; float: left; padding: 3px;
        }
        input{
            height: 30px; width: 220px; padding: 5px 8px; }

        button { margin-left: 156px; width:50px; height:100px}

        /*-------llenado*/

        .form_hint {background: #d45252; /* rojo*/
            border-radius: 3px 3px 3px 3px; color: white; margin-lrft: 8px;
            padding: 1px 6px; z-index: 999; position: absolute; display: none; }
        
        .form_hint::before {
            content: "\25C0"; color: #d45252; position: absolute;
            top: 1px; left: -6px; }

            input:focus + .form_hint { display: inline; }

            input:required:valid + .form_hint { background: #28921f; }

            input:required:valid + .form_hint::before { color: #28921f; }

            /*--------boton_estado*/

            button.submit {
                background-color: #68b12f;
                background: -webkit-gradient (linear, left top, left bottom, from(#68b12f), to(#50911e));
                background: -webkit-linear-gradient(top, #68b12f, #50911e);
                background: -moz-linear-gradient(top, #68b12f, #50911e);
                background: -ms-linear-gradient(top, #68b12f, #50911e);
                background: -o-linear-gradient(top, #68b12f, #50911e);
                border: 1px solid #509111; border-bottom: 1px solid #5b992b;

                border-radius: 3px;
                -webkit-border-radius: 3px;
            }
            </style>

            <!------fin_estilo----->

            </head>
                <body>
                    <center><br><br>
                    <h1>Registro de Empleados</h1>
                    <form action="guardar.php" method="POST" enctype="multipart/form-data"><br><br>
                    <ul>
                        <li> <h2>Detalles</h2>
                            <span class="required_notification">* Datos Requeridos </span>
                        </li>

                        <li> <label for="nom_per">Nombre:</label>
                             <input type="text" name="nom_per" placeholder="Nombre" maxlength="30" required />
                             <span class="form_hint">Formato: "Felipe"</span>
                    </li>

                    
                    <li> <label for="ape_per">Apellidos:</label>
                             <input type="text" name="ape_per" placeholder="Apellidos" maxlength="60" required />
                             <span class="form_hint">Formato: "Lopez Zuñiga"</span>
                    </li>
                    
                    
                    <li> <label for="gen_per">Genero:</label>
                             <input type="text" name="gen_per" placeholder="Genero" maxlength="30" required />
                             <span class="form_hint">Formato: "Masculino"</span>
                    </li>
                    
                        <li> <label for="curp_per">Curp:</label>
                             <input type="text" name="curp_per" placeholder="Curp" maxlength="40" required />
                             <span class="form_hint">Formato: "FDGH931230KDOYTE05"</span>
                    </li>
                    
                    
                    <li> <label for="dir_per">Direccion:</label>
                             <input type="text" name="dir_per" placeholder="Direccion" maxlength="60" required />
                             <span class="form_hint">Formato: "calle jesus #000, col. sol"</span>
                    </li>
                    
                    <li> <label for="ciu_per">Ciudad:</label>
                             <input type="text" name="ciu_per" placeholder="Ciudad" maxlength="30" required />
                             <span class="form_hint">Formato: "Ciudad Juarez"</span>
                    </li>
                    
                    
                    <li> <label for="ser_per">Servicio Medico:</label>
                             <input type="text" name="ser_per" placeholder="Servicio Medico" maxlength="30" required />
                             <span class="form_hint">Formato: "IMSS, ISSSTE..."</span>
                    </li>
                    
                    
                    <li> <label for="est_per">Estado Civil:</label>
                             <input type="text" name="est_per" placeholder="Estado Civil" maxlength="30" required />
                             <span class="form_hint">Formato: "Casado, Soltero..."</span>
                    </li>
                    
                    
                    <li> <label for="hij_per">Num. Hijjos:</label>
                             <input type="text" name="hij_per" placeholder="Hijos" maxlength="30" required />
                             <span class="form_hint">Formato: "1, 2, 3..."</span>
                    </li>
                    
                    
                    <li> <label for="img_per">Foto:</label>
                             <input type="file" name="img_per" placeholder="Foto" maxlength="30" required />
                             <span class="form_hint">Formato: "Cargar Imagen"</span>
                    </li>
                    

                    <input type="submit" value="Aceptar" />
                </ul>
            </form><br><br>
        </center>
    </body>
</html>