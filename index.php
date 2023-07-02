<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title> CaribbeanProbiotics </title>
    <link rel="shortcut icon" href="imagenes/icono-png.png" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <!-- Contenedor Principal -->
    <div class="wrapp">

        <script>
            document.title = "Caribbean Probiotics - Inicio";

        </script>

        <header><?php include "header.php"; ?></header>

        <!-- Contenido -->
        <div class="content">

            <?php
    $content = $_GET['content'] ?? '';
    
    switch ($content) {
        case '':
            include 'home.php';
            break;
        case 'home':
            include 'home.php';
            break;
        case 'resumen';
            include 'sobre_nosotros.php';
            break;
        case 'sobre_nosotros':
            include 'sobre_nosotros.php';
            break;
        case 'productos':
            include 'productos.php';
            break;
        case 'distribuidores':
            include 'distribuidores.php';
            break;
        case 'contacto':
            include 'contacto.php';
            break;
        case 'ViyoRep':
            include 'producto1.php';
            break;
        default:
            echo '404 Error - Página no encontrada';
            break;
    }
?>
        </div>


        <footer> <?php include "footer.php";?> </footer>

    </div>

</body>

</html>
