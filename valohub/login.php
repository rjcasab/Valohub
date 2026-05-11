<?php
session_start();
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = $conn->prepare("SELECT * FROM usuarios WHERE username = ? OR email = ?");
    $sql->bind_param("ss", $username, $username);
    $sql->execute();

    $result = $sql->get_result();

    if ($result->num_rows > 0) {

        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {

            $_SESSION['usuario'] = $user['username'];
			$_SESSION['usuario_id'] = $user['id'];

            header("Location: index.php");
            exit();

        } else {
            echo "Contraseña incorrecta";
        }

    } else {
        echo "Usuario no encontrado";
    }
}
?>