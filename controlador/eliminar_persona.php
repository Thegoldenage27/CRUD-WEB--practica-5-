<?php

if (isset($_GET["id"]) && is_numeric($_GET["id"])) {
    $id = intval($_GET["id"]);
    if ($conexion) {
        $sql = $conexion->prepare("DELETE FROM persona WHERE id_persona = ?");
        $sql->bind_param('i', $id);
        if ($sql->execute()) {
            echo '<div class="alert alert-success">Persona eliminada correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">Error al eliminar...</div>';
        }
        $sql->close();
    } else {
        echo '<div class="alert alert-danger">Error al conectar con la base de datos</div>';
    }
}

?>