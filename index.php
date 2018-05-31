//Hola mundo 5
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
<head>

    <meta charset="utf-8"></meta>
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css"></link>
    <link rel="stylesheet" type="text/css" href="estilos/style.css"></link>
    <title>Proyecto SGOA</title>
</head>
<body>
<form action="aplicacion/validar.php" method="post">
    <h2 style="color: #0000FF; font-size: 250%;">Objetos de Aprendizaje</h2>
    <select class= "form-control" name="tipo_usuario" dir="ltr" required>
        <option value="">Tipo de Usuario</option>
        <option value="ADM">Administrador</option>
        <option value="PRO">Docente</option>
        <option value="EST">Estudiante</option>
    </select></br>
    <input class="form-control" type="text" placeholder="&#128102; Nombre de Usuario." required name="user"></input></br>
    <input class="form-control" type="password" placeholder="&#128274; Contraseña de Usuario:" required name="pass"></input>
    <h2 style = "color: #0000FF; font-size: 80%"; align="right"> ¿Olvidó su contraseña? </h2>
    <input class="btn btn-primary" type="submit"  value="Log-In">
</form>
<form method="post">
    <h2 style="color: #0000FF; font-size: 250%;">Registrate</h2>
    <td width="50%"> <a href="aplicacion/formularios_registro/RegistrarProfesor.php"> Registrar Profesor</a></td></br>
    <label></label>
    <td width="50%" align="right" valign="middle"><a href="aplicacion/formularios_registro/RegistrarEstudiante.php"> Registrar Estudiante</a></td>
</form>
</body>
</html>