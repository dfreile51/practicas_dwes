<?php
    require_once "../clases/conexion.php";
    $con = new Conexion();

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        try {
            $sql = "SELECT * FROM profesores WHERE 1";
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $sql .= " AND id_profesor='$id'";
            } elseif (isset($_GET['tutoria'])) {
                $tutoria = $_GET['tutoria'];
                $sql .= " AND tutoria='$tutoria'";
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
          && isset($_POST['usuario']) && isset($_POST['pass']) 
          && isset($_POST['tipo']) && isset($_POST['tutoria'])) {
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $usuario = $_POST['usuario'];
            $pass = $_POST['pass'];
            $tipo = $_POST['tipo'];
            $tutoria = $_POST['tutoria'];
            $sql = "INSERT INTO profesores (Nombre, Apellidos, Usuario, Pass, 
              Tipo, Tutoria) VALUES ('$nombre', '$apellidos', '$usuario', 
              '$pass', '$tipo', '$tutoria')";
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
          && isset($_GET['apellidos']) && isset($_GET['usuario']) && isset($_GET['pass']) 
          && isset($_GET['tipo']) && isset($_GET['tutoria'])) {
            $id = $_GET['id'];
            $nombre = $_GET['nombre'];
            $apellidos = $_GET['apellidos'];
            $usuario = $_GET['usuario'];
            $pass = $_GET['pass'];
            $tipo = $_GET['tipo'];
            $tutoria = $_GET['tutoria'];
            $sql = "UPDATE profesores SET Nombre='$nombre', Apellidos='$apellidos', 
              usuario='$usuario', pass='$pass', tipo='$tipo', 
              tutoria='$tutoria' WHERE id_profesor='$id'";
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
?>