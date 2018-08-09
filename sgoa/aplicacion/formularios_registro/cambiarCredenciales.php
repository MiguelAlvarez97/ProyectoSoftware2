<!DOCTYPE html >
<html  lang="es">
    <head>
        <meta charset="utf-8"></meta>
        <link rel="stylesheet" href="../../plugins/bootstrap/css/bootstrap.min.css"></link>
        <link rel="stylesheet" href="../../bootstrap/css/bootstrap-responsive.css"></link>
        <link rel="stylesheet" type="text/css" href="../../estilos/estilosProf.css"></link>
        <script type="text/javascript" src="../../plugins/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../../plugins/bootstrap/js/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="../../plugins/bootstrap/js/funciones_validar_formularios.js"></script>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0"></meta>
        <title>Proyecto SGOA</title>
    </head>
    <body>
        <?php
        require '../clases_negocio/funciones_administrador.php';
        $id_usuario = filter_input(INPUT_GET, 'id');
        $Usuario = obtenerUsuario($id_usuario);
        ?>
        <form method="post" action="../modulos_administrador/adm_ejecutar_cambiarUserName.php"   onsubmit=" return " >
            <legend style="font-size: 18pt;" ><b>Cambiar Nombre de Usuario</b></legend>
            <label>Nombre de Usuario Actual:</label>
            <?php echo $Usuario;?>
            <input class="form-control" placeholder="Ingresar nuevo nombre de usuario" id="username" type="text"required name="username">
            <input type="hidden" name="id" value="<?php echo $id_usuario;?>">
            <input style="font-size: 14pt;text-align: center;" class="btn btn-info btn-responsive btninter centrado" type="submit" value="Enviar">
        </form>

        <form method="post" action="../modulos_administrador/adm_ejecutar_cambiarContrasenia.php"   onsubmit=" return " >
            <legend style="font-size: 18pt;" ><b>Cambiar Contraseña</b></legend>
            <label>Contraseña Nueva:</label>
            <input class="form-control" placeholder="Ingrese la nueva contraseña" id="contrasenia" type="password" required name="contrasenia">
            <input type="hidden" name="id" value="<?php echo $id_usuario;?>">
            <input style="font-size: 14pt;text-align: center;" class="btn btn-info btn-responsive btninter centrado" type="submit" value="Enviar">
        </form>


    </body>
</html>