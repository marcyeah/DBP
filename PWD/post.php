<?php
    include("database.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $idioma = implode(", ", $_POST['idioma']);
        $habilidades = isset($_POST['habilidades']) ? implode(", ", $_POST['habilidades']) : '';
        $descripcion = $_POST['perf'];
        $institucion = implode(", ", $_POST['institucion']);
        $titulo = $_POST['titulo'];
        if (empty($nombre) || empty($apellido) || empty($idioma) || empty($titulo) || empty($institucion)) {
            echo "Falta completar uno o varios campos.";
        }
        else {
            $sql = "INSERT INTO data (Nombre, Apellidos, Titulo, Institución, Idiomas, Habilidades, Descripción)
                    VALUES ('$nombre', '$apellido', '$titulo', '$institucion', '$idioma', '$habilidades', '$descripcion')";

            mysqli_query($conn, $sql);
            mysqli_close($conn);
        }
    }
?>