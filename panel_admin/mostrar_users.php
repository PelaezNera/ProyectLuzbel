<?php
include '../main-pages/conexion.php';

session_start();
error_reporting(0);
$var_session = $_SESSION['usuario'];
$var_rank = $_SESSION['tipo'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de noticias</title>
    <link rel="stylesheet" href="../normalize.css">
    <link rel="stylesheet" href="../frontend/style-muser.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.11.0/dist/sweetalert2.all.min.js"
        integrity="sha256-4lhPGIWv8kmCP7JRGJE4IdRod2IdQEZPui6f0uICZ6w=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.11.0/dist/sweetalert2.min.css"
        integrity="sha256-h2Gkn+H33lnKlQTNntQyLXMWq7/9XI2rlPCsLsVcUBs=" crossorigin="anonymous">
</head>
<body>
<?php
        include_once "panel_admin/validacion_admin.php";
    ?>
    <h1 class="informacion">
        Modificar Usuarios
    </h1>

    <header>
        <h1>Mi sitio web</h1>

        <form action="mostrar_users.php" method="get" id="search-form">
            <input type="text" name="search" id="search" placeholder="Buscar">
            <button type="submit" name="buscador" value="buscar" class="searchcss">Buscar</button>
        </form>
    </header>

    <main>
        <div id="tabla">
    <table>
                <tr>
                <th>id_usuario</th>
                <th>Nombre de usuario</th>
                <th>correo de usuarios</th>
                <th>tipo de usuario</th>
                <th colspan="2">botones de accion</th>
                </tr>
                
                <tbody>
                <?php
                $registros = mysqli_query($conexion,"SELECT * FROM usuarios") or die("Error en la consulta".mysqli_error($conexion));
                while ($row = mysqli_fetch_array($registros)) { ?>
                <tr>
                <td> <?php echo $row['id_usuarios']; ?> </td>
                <td> <?php echo $row['usuario']; ?> </td>
                <td> <?php echo $row['email']; ?> </td>
                <td> <?php echo $row['tipo']; ?> </td>
                
                <td class="btn"><a class="ctb-button" href="modificar_user.php?editar= <?php echo $row['id_usuarios']; ?>">Actualizar</a></td>
                <td class="btn1"><a class="ctb-button" href="eliminar_users.php?del= <?php echo $row['id_usuarios']; ?>">Eliminar</a></td>
                
                </tr>
                <?php } 
                ?>
                </tbody>
                </table>
                </div>
        <?php
        include "../main-pages/conexion.php";

        if (isset($_GET['buscador'])) {
            $buscar= $_GET['search'];

            if (empty($buscar)) {
                echo "<p class='vcampo'>Ingrese un dato, el campo esta vacio.</p>";
            } else {
                $buscar = mysqli_real_escape_string($conexion,$buscar);

                $consulta = "SELECT * FROM usuarios where usuario LIKE '%$buscar%'";
                $mostrar = mysqli_query($conexion, $consulta);
                $var_total = mysqli_num_rows($mostrar);

                if ($var_total > 0) {
                    ?>

                    <script>
                        var tabla = document.getElementById('tabla');
                        tabla.style.display = "none";
                    </script>

                    <?php
                    echo "<div class='ssearch'><p>Los resultados para esta busqueda son: <strong>$buscar</strong></p>";
                    echo "<p>El total de datos encontrados fueron: <strong>$var_total</strong></p></div>";
<<<<<<< HEAD
                    echo "<hr>";
=======
>>>>>>> 312a70c12e8dce89d51a3195c247b158cae5983d
                    
                    echo"<table>";
                    echo"<tr>";
                    echo"<th>id_usuario</th>";
                    echo"<th>Nombre de usuario</th>";
                    echo"<th>correo de usuarios</th>";
                    echo"<th>tipo de usuario</th>";
                    echo"<th colspan='2'>botones de accion</th>";
                    echo"</tr>";
                    echo"<tbody>";
                    while ($row = mysqli_fetch_array($mostrar)) {
                        echo "<tr></tr>";
                        echo "<td>".htmlspecialchars($row['id_usuarios'])."</td>";
                        echo "<td>".htmlspecialchars($row['usuario'])."</td>";
                        echo "<td>".htmlspecialchars($row['email'])."</td>";
                        echo "<td>".htmlspecialchars($row['tipo'])."</td>";

                        echo "<td class='btn'><a class='ctb-button' href='modificar_user.php?editar=$row[id_usuarios]'>Actualizar</a></td>";
                        echo "<td class='btn1'><a class='ctb-button' href='eliminar_users.php?del=$row[id_usuarios]'>Eliminar</a></td>";
                        echo "</tr>";
                    }
                        echo "</tbody>";
                        echo "</table>";
                }else {
                    echo"No hay datos para esta busqueda<strong>$buscar</strong>";
                    ?>
                <table>
                <tr>
                <th>id_usuario</th>
                <th>Nombre de usuario</th>
                <th>correo de usuarios</th>
                <th>tipo de usuario</th>
                <th colspan="2">botones de accion</th>
                </tr>
                
                <tbody>
                <?php
                $registros = mysqli_query($conexion,"SELECT * FROM usuarios") or die("Error en la consulta".mysqli_error($conexion));
                while ($row = mysqli_fetch_array($registros)) { ?>
                <tr>
                <td> <?php echo $row['id_usuarios']; ?> </td>
                <td> <?php echo $row['usuario']; ?> </td>
                <td> <?php echo $row['email']; ?> </td>
                <td> <?php echo $row['tipo']; ?> </td>
                
                <td class="btn"><a class="ctb-button" href="modificar_user.php?editar= <?php echo $row['id_usuarios']; ?>">Actualizar</a></td>
                <td class="btn1"><a class="ctb-button" href="eliminar_users.php?del= <?php echo $row['id_usuarios']; ?>">Eliminar</a></td>
                
                </tr>
                <?php } 
                ?>
                </tbody>
                </table>
                    <?php
                }
            }
        }
        
        ?>
    </main>

    

    <a href="../panel_admin.php" title="Volver" class='cta-button' >Volver</a>

</body>
</html>