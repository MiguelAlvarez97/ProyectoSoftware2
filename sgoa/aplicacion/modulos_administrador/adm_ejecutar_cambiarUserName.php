<?php
session_start();
require '../clases_negocio/funciones_administrador.php';

$username = filter_input(INPUT_POST, 'username');
$id_usuario = filter_input(INPUT_POST, 'id');
if (cambiar_username($id_usuario, $username)) {

    echo '<script charset="UTF-8">alert("El nombre de usuario se inserto correctamente")</script> ';
    echo '<script>location.href = "adm_buscar_profesores.php"</script>';
} else {
    echo '<script charset="UTF-8">alert("No se pudo insertar su comentario. ")</script> ';
    echo '<script>location.href = "adm_buscar_profesores.php"</script>';
}
?>
