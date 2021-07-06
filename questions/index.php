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
    <meta property="og:image" content="../assets/img/img-questions/burroshrek.jpg">
    <meta property="og:description" content="Demuestra lo que sabes y que eres un gran fanático de Shrek con este test con preguntas difíciles que ni Burro puede resolver pero sin duda el Gato con Botas resolvería con facilidad. Adelante, inténtalo.">
    <meta property="og:site_name" content="shrest.com">
    <meta name="author" content="MacHip3r">
    <meta name="designer" content="Braulio Mac">
    <!-- Link's -->
    <link rel="stylesheet" href="../assets/css/bs-litera.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="shortcut icon" href="../assets/img/icon.png">
    <title>Pregunta | Shrest</title>
</head>
<body>
    <div class="container-question">
        <div class="container-question-text">
            <h2 id="question-text"></h2>
        </div>
        <div class="container-movie-id">
            <h6 id="movie-id"></h6>
        </div>
        <div class="container-option">
            <div class="container-label" onclick="checkAnswer(0);">
                <label for="option-1" class="label-div-option" id="label-option-1">
                    <div class="option-radio" id="option-1"></div>
                </label>
            </div>
            <div class="container-label" onclick="checkAnswer(1);">
                <label for="option-2" class="label-div-option" id="label-option-2">
                    <div class="option-radio" id="option-2"></div>
                </label>
            </div>
            <div class="container-label" onclick="checkAnswer(2);">
                <label for="option-3" class="label-div-option" id="label-option-3">
                    <div class="option-radio" id="option-3"></div>
                </label>
            </div>
            <div class="container-label" onclick="checkAnswer(3);">
                <label for="option-4" class="label-div-option" id="label-option-4">
                    <div class="option-radio" id="option-4"></div>
                </label>
            </div>
        </div>
        <div class="number-questions" id="num-question"></div>
        <div class="img-question" id="image"></div>
    </div>
</body>
<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="../assets/js/main.js"></script>
<script>
    $(document).ready(function() {
        getRandom();
    });
</script>
</html>