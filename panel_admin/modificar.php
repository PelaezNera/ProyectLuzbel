<?php
session_start();

error_reporting(0);
$var_session = $_SESSION['email'];
if ($var_session == null || $var_session = "") {
    echo "<script>alert('No tiene permiso para ingresar a este sitio'); window.location='../main-pages/login.html'</script>";
    die();
}
include '../main-pages/conexion.php';
?>

<?php
$edit = $_GET['tarjeta'];
$registros = mysqli_query($conexion,"SELECT * FROM informacion where id_noticia = '$edit'") or die("Error en la consulta".mysqli_error($conexion));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <link rel="stylesheet" href="../normalize.css">
    <link rel="stylesheet" href="../frontend/style-mod.css">
    <link rel="stylesheet" href="../frontend/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.11.0/dist/sweetalert2.all.min.js"
        integrity="sha256-4lhPGIWv8kmCP7JRGJE4IdRod2IdQEZPui6f0uICZ6w=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.11.0/dist/sweetalert2.min.css"
        integrity="sha256-h2Gkn+H33lnKlQTNntQyLXMWq7/9XI2rlPCsLsVcUBs=" crossorigin="anonymous">
    
</head>
<body>
    <h2>Actualizar Tarjeta</h2>
    
    <form action="actualizar_tarjetas.php" method="post" onsubmit="return validar()">
    <?php
            while ($row = mysqli_fetch_array($registros)) { 
 
            echo "<p class='error' id='error_datos'>Faltan datos</p><br>";
            echo "<label>id_tarjeta</label><br>";
            echo "<input type='text' name='id_tarjeta' value='$row[id_noticia]' disabled><br>";
            
            echo "<label><img src='../img/$row[imagen]' alt='Lavender Fields'></label>";
            echo "<input type='file' name='imagen' id='img' value='$row[imagen]'><br>";
            
            echo "<label>Titulo</label><br>";
            echo "<input type='text' name='titulo' id='titulo' value='$row[titulo]'>";
            echo "<p id='error_titulo' class='error'>Falta el titulo</p><br>";
    
            echo "<label>informacion</label><br>";
            echo "<input type='text' name='informacion' id='info' value='$row[informacion]' class='txtarea'>";
            echo "<p id='error_info' class='error'>Falta la informacion</p><br>";
      
            }
            ?>

            <input type="hidden" name="codigo" value="<?php echo $edit?>">

            <input type="submit" name="" value="Actualizar" class="actu"><br><br>
            <a href="./gestion_foro.php"><input type="button" value="Cancelar" class="cance"></a>
          </form>
    <script defer src="../backend/validar_form_tarjet.js"></script>

</body>
</html>