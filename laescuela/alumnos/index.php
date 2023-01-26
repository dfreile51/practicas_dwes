<?php
    require_once "../clases/conexion.php";
    $con = new Conexion();

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        try {
            $sql = "SELECT * FROM alumnos WHERE 1";
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $sql .= " AND id_alumno='$id'";
            } elseif (isset($_GET['curso'])) {
                $curso = $_GET['curso'];
                $sql .= " AND curso='$curso'";
            } elseif (isset($_GET['nombre']) || isset($_GET['apellidos'])) {
                if (isset($_GET['nombre'])) {
                    $nombre = $_GET['nombre'];
                    $sql .= " AND nombre='$nombre'";
                }
                if (isset($_GET['apellidos'])) {
                    $apellidos = $_GET['apellidos'];
                    $sql .= " AND apellidos='$apellidos'";
                } 
            } elseif (count($_GET)>0) {
                header("HTTP/1.1 400 Bad Request");
                exit;
            }
            $result = $con->query($sql);
            $alumnos = $result->fetch_all(MYSQLI_ASSOC);
            header("HTTP/1.1 200 OK");
            echo json_encode($alumnos);
        } catch (mysqli_sql_exception $e) {
            header("HTTP/1.1 404 Not Found");
        } 
        exit; 
    } else {
        header("HTTP/1.1 400 Bad Request");
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['nombre']) && isset($_POST['apellidos']) 
          && isset($_POST['fechanac']) && isset($_POST['ciudad']) 
          && isset($_POST['telefono']) && isset($_POST['curso'])) {
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $fechanac = $_POST['fechanac'];
            $ciudad = $_POST['ciudad'];
            $telefono = $_POST['telefono'];
            $curso = $_POST['curso'];
            $sql = "INSERT INTO alumnos (Nombre, Apellidos, FechaNac, Ciudad, 
              Telefono, Curso) VALUES ('$nombre', '$apellidos', '$fechanac', 
              '$ciudad', '$telefono', '$curso')";
            try {
                $con->query($sql);
                header("HTTP/1.1 201 Created");
                echo json_encode($con->insert_id);
            } catch (mysqli_sql_exception $e) {
                header("HTTP/1.1 400 Bad Request");
            }
        } else {
            header("HTTP/1.1 400 Bad Request");   
        }
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
        if (isset($_GET['id']) && isset($_GET['nombre']) 
          && isset($_GET['apellidos']) && isset($_GET['fechanac']) 
          && isset($_GET['ciudad']) && isset($_GET['telefono']) 
          && isset($_GET['curso'])) {
            $id = $_GET['id'];
            $nombre = $_GET['nombre'];
            $apellidos = $_GET['apellidos'];
            $fechanac = $_GET['fechanac'];
            $ciudad = $_GET['ciudad'];
            $telefono = $_GET['telefono'];
            $curso = $_GET['curso'];
            $sql = "UPDATE alumnos SET Nombre='$nombre', Apellidos='$apellidos', 
              FechaNac='$fechanac', Ciudad='$ciudad', Telefono='$telefono', 
              Curso='$curso' WHERE id_Alumno='$id'";
            try {
                $con->query($sql);
                header("HTTP/1.1 200 OK");
                echo json_encode($con->insert_id); 
            } catch (mysqli_sql_exception $e) {
                header("HTTP/1.1 400 Bad Request");
            }
        } else {
            header("HTTP/1.1 400 Bad Request");   
        }
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
        if (isset($_GET['curso'])) {
            $curso = $_GET['curso'];
            $sql = "DELETE FROM alumnos WHERE curso='$curso'";
            try {
                $con->query($sql);
                header("HTTP/1.1 200 OK");
                echo json_encode($curso);
            } catch (mysqli_sql_exception $e) {
                header("HTTP/1.1 400 Bad Request");
            }
        } else {
            header("HTTP/1.1 400 Bad Request");
        }

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "DELETE FROM alumnos WHERE id_Alumno='$id'";
            try {
                $con->query($sql);
                header("HTTP/1.1 200 OK");
                echo json_encode($id);
            } catch (mysqli_sql_exception $e) {
                header("HTTP/1.1 400 Bad Request");
            }
        } else {
            header("HTTP/1.1 400 Bad Request");   
        }
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
        $sql = "DELETE FROM profesores WHERE";
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql .= " id_profesor = '$id'";
            try {
                $db->query($sql);
                header("HTTP/1.1 200 OK");
                echo json_encode($id);
            } catch (mysqli_sql_exception $e) {
                header("HTTP/1.1 400 Bad Request");
            }
        } else {
            header("HTTP/1.1 400 Bad Request");
        }
        exit;
    }
?>