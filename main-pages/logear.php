<?php
include("conexion.php");

$email = $_POST["email"];
$user = $_POST["user"];
$pass = $_POST["pass"];
$verify_pass = $_POST["verify_pass"];

if ($pass != $verify_pass) {
    echo "<script>alert('Las contraseñas son diferentes'); window.location.href = 'login.html'</script>";
}

