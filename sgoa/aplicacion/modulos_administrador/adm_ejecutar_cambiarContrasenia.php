<?php
session_start();
require '../clases_negocio/funciones_administrador.php';

$password= filter_input(INPUT_POST, 'contrasenia');
$id_usuario = filter_input(INPUT_POST, 'id');
if (cambiar_password($id_usuario, $password)) {
    echo '<script charset="UTF-8">alert("La contraseña se cambio correctamente")</script> ';
    echo '<script>location.href = "adm_buscar_profesores.php"</script>';
} else {
    echo '<script charset="UTF-8">alert("No se pudo insertar su comentario. ")</script> ';
    echo '<script>location.href = "adm_buscar_profesores.php"</script>';
}
?>
