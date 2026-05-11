<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Verificar si ya existe
    $check = $conn->prepare("SELECT id FROM usuarios WHERE email = ? OR username = ?");
    $check->bind_param("ss", $email, $username);
    $check->execute();
    $result = $check->get_result();

    if ($result->num_rows > 0) {
        echo "Usuario o email ya registrado";
        exit();
    }

    // Insertar usuario
    $sql = $conn->prepare("INSERT INTO usuarios (username, email, password) VALUES (?, ?, ?)");
    $sql->bind_param("sss", $username, $email, $password);

    if ($sql->execute()) {
        header("Location: login.html");
        exit();
    } else {
        echo "Error al registrar";
    }
}
?>