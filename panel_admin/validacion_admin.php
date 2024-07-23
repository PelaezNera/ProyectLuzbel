<?php
if (isset($var_session) && $var_session != NULL && $var_session != "" && $var_session != " " && $var_rank != "user" && $var_rank == "admin") {
echo '<script>
    Swal.fire({
        icon: "success",
        title: "Bienvenido",
        text: "Sesión iniciada con éxito 👌, Admin '.$_SESSION['usuario'].' ",
        showConfirmButton: false,
        timer: 2000
    });
</script>';
}elseif ($var_session == NULL || $var_session = "" || $var_session == " ") {
echo '<script>
Swal.fire({
    icon: "error",
    title: "ERROR",
    text: "NO HAS INICIADO SESIÓN",
    showConfirmButton: false,
    timer: 2000
}).then(function() {
    window.location = "./backend/cerrar_sesion.php";
});
</script>';
print 'ERROR ❌❗ <br> No tienes autorización para ingresar a este sitio <br>';
die('<br><a href="./backend/cerrar_sesion.php"><input type="reset" value="Vuelva al login"></a>');
}elseif (($var_rank == "user" || $var_rank == NULL || $var_rank = "" || $var_rank == " ") && $var_rank != "admin") {
echo '<script>
Swal.fire({
    icon: "warning",
    title: "NO ERES ADMIN",
    text: "NO TIENES PERMISO DE ESTAR AQUI!",
    showDenyButton: true,
    confirmButtonText: "Llévame a la pagina de usuario",
    denyButtonText: `Cierra sesión y llévame al login`
  }).then((result) => {
    if (result.isConfirmed) {
        Swal.fire({
            title: "Ok",
            icon: "success",
            timer: 1000,
            showConfirmButton: false
        }).then(function() {
        window.location = "pagina.php";
        });
    } else if (result.isDenied) {
        Swal.fire({
            title: "Ok",
            icon: "success",
            timer: 1000,
            showConfirmButton: false
        }).then(function() {
        window.location = "./backend/cerrar_sesion.php";
        });
    }
  });
</script>';
print 'TIENES QUE SER ADMIN ⚠️❗ <br> No tienes autorización para ingresar a este sitio <br>';
die('<br><a href="pagina.php"><input type="reset" value="Vuelva a la pagina"></a>
<br><a href="./backend/cerrar_sesion.php"><input type="reset" value="Vuelva al login"></a>');
}else{
echo '<script>
    Swal.fire({
        icon: "question",
        title: "UN RARO ERROR HA OCURRIDO",
        text: "POSIBLEMENTE NO HAS INICIADO SESIÓN",
        showConfirmButton: false,
        timer: 2000
    }).then(function() {
        window.location = "./backend/cerrar_sesion.php";
    });
</script>';
print 'ERROR 401 🩻🏴‍☠️ <br> No tienes autorización para ingresar a este sitio <br>';
die('<br><a href="./backend/cerrar_sesion.php"><input type="reset" value="Vuelva al login"></a>');
}
?>