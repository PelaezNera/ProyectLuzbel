<?php
session_start();

error_reporting(0);
$var_session = $_SESSION['email'];
if ($var_session == null || $var_session = "") {
    echo "<script>alert('No tiene permiso para ingresar a este sitio'); window.location='../main-pages/login.php'</script>";
    die();
}
include '../main-pages/conexion.php';
?>

<?php
$edit = $_GET['noticia'];
$registros = mysqli_query($conexion,"SELECT * FROM noticias where id_noticia = '$edit'") or die("Error en la consulta".mysqli_error($conexion));
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
    <center>
    <h2>Actualizar noticia</h2>
    
    
    <form action="actualizar_noticia.php" method="post">
    <?php
            while ($row = mysqli_fetch_array($registros)) { 
 
            echo "<label>id_noticia</label><br>";
            echo "<input type='text' name='id_noticia' value='$row[id_noticia]' disabled><br><br>";
            
            echo "<label><img src='../img/$row[imagen]' alt='Lavender Fields'></label><br>";
            echo "<input type='file' name='imagen' value='$row[imagen]'><br><br>";
            
            echo "<label>Titulo</label><br>";
            echo "<input type='text' name='titulo' value='$row[titulo]'><br><br>";
    
            echo "<label>informacion</label><br>";
            echo "<input type='text' name='informacion' value='$row[informacion]' class='txtarea'><br><br>";
      
            }
            ?>

            <input type="hidden" name="codigo" value="<?php echo $edit?>">

            <input type="submit" name="" value="Actualizar" class="actu"><br><br>
            <a href="./gestion_foro.php"><input type="button" value="Cancelar" class="cance"></a>
          </form>
    </center>

</body>
</html>