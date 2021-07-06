<?php
    $score=$_GET["puntos"];

    if (!isset($score)) {
        header("Location: ../");
    } else {
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Meta's -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Language" content="es">
    <meta name="viewport" content="user-scalable=no,width=device-width,initial-scale=1">
    <meta name="distribution" content="global">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="rating" content="General">
    <meta name="company" content="CompuBac">
    <meta name="keywords" content="shrek, shrek test, tests, shrek lord, shrek games, handsome shrek, shreks kids, green ogre movie, shrek 1 prince, shrek 1 video game, shrek 4 game, shrek 2 disney, what's the dragons name in shrek">
    <meta name="description" content="Demuestra lo que sabes y que eres un gran fanático de Shrek con este test con preguntas difíciles que ni Burro puede resolver pero sin duda el Gato con Botas resolvería con facilidad. Adelante, inténtalo.">
    <meta property="og:title" content="Test sobre Shrek | Shrest">
    <meta property="og:url" content="https://shrest.com/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="shrest.com">
    <meta name="author" content="MacHip3r">
    <meta name="designer" content="Braulio Mac">
    <!-- Link's -->
    <link rel="stylesheet" href="../assets/css/bs-litera.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="shortcut icon" href="../assets/img/icon.png">
    <title>Tu resultado | Shrest</title>
</head>
<body>
    <div class="container-result fb-root">
        <div class="congratulation-text" id="container-congrats-text">
            <h1 id="congrats"></h1>
        </div>
        <div class="container-congrats">
            <div class="img-result" id="finish-img"></div>
            <div class="description-text">
                <h4 id="description-congrats"></h4>
            </div>
        </div>
        <div class="buttons-bar">
            <button class="btn btn-danger bar-button" onclick="window.location = '../'">Regresar al inicio</button>
            <a href="https://www.facebook.com/dialog/share?app_id=702193056879826&display=popup&href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2F&redirect_uri=https%3A%2F%2Fdevelopers.facebook.com%2Ftools%2Fexplorer"><button class="btn btn-primary bar-button">Compartir con Facebook</button></a>
        </div>
    </div>
</body>
<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="../assets/js/main.js"></script>
<script>
    $(document).ready(function() {
        showResult(<?php echo $score; ?>);
    });
</script>
</html>

<?php
    }
?>