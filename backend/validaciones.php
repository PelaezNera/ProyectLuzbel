<?php
    if (isset($var_session) && $var_session != NULL && $var_session != "" && $var_session != " ") {
    echo '<script>
        Swal.fire({
            icon: "success",
            title: "Bienvenido",
            text: "Sesión iniciada con éxito 👌, Usuario/a '.$_SESSION['usuario'].' ",
            showConfirmButton: false,
            timer: 1500
        });
    </script>';
}elseif ($var_session == NULL || $var_session = "" || $var_session == " ") {
    echo '<script>
    Swal.fire({
        icon: "error",
        title: "ERROR",
        text: "NO HAS INICIADO SESIÓN",
        showConfirmButton: false,
        timer: 1500
    }).then(function() {
        window.location = "./backend/cerrar_sesion.php";
    });
</script>';
    print 'ERROR ❌❗ <br> No tienes autorización para ingresar a este sitio <br>';
    die('<br><a href="./backend/cerrar_sesion.php"><input type="reset" value="Vuelva al login"></a>');
}else{
    echo '<script>
        Swal.fire({
            icon: "error",
            title: "UN RARO ERROR HA OCURRIDO",
            text: "NO HAS INICIADO SESIÓN",
            showConfirmButton: false,
            timer: 1500
        });
    </script>';
    print 'ERROR 401 🩻🏴‍☠️ <br> No tienes autorización para ingresar a este sitio <br>';
    die('<br><a href="./backend/cerrar_sesion.php"><input type="reset" value="Vuelva al login"></a>');
}
?>