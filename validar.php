<?php
$usuarios = [
    'cliente' => ['username' => 'pedro', 'password' => '123'],
    'administrador' => ['username' => 'admin', 'password' => 'admin123'],
];

$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

if (isset($usuarios[$role]) && $usuarios[$role]['username'] === $username && $usuarios[$role]['password'] === $password) {
    if ($role === 'cliente') {
        header('Location: pagina_cliente.php');
    } elseif ($role === 'administrador') {
        header('Location: pagina_administrador.php');
    }
} else {
    header('Location: index.html');
}
?>