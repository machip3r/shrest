/* Variables */

var counter = 1,
    counter_num_question = 0,
    score = 0,
    option_0 = "",
    option_1 = "",
    option_2 = "",
    option_3 = "",
    answer = "",
    random = [];

/* Inicio */

function start() {
    window.location = "questions/";
}

/* Preguntas */

function getRandom() {
    random_num = numQuestionRandom();
    random = random_num;

    showQuestion(random);
}

function showQuestion(random_num) {
    document.title = "Pregunta " + counter + " | Shrest";
    numQuestion();

    $.post("../assets/js/questions.json",
        function(data) {
            option_0 = data["shrest"][0]["q" + random_num[counter_num_question]].options[0];
            option_1 = data["shrest"][0]["q" + random_num[counter_num_question]].options[1];
            option_2 = data["shrest"][0]["q" + random_num[counter_num_question]].options[2];
            option_3 = data["shrest"][0]["q" + random_num[counter_num_question]].options[3];
            answer = data["shrest"][0]["q" + random_num[counter_num_question]].answer;

            $("#question-text").text(data["shrest"][0]["q" + random_num[counter_num_question]].title);
            $("#movie-id").text(data["shrest"][0]["q" + random_num[counter_num_question]].movie);
            $("#option-1").text(data["shrest"][0]["q" + random_num[counter_num_question]].options[0]);
            $("#option-2").text(data["shrest"][0]["q" + random_num[counter_num_question]].options[1]);
            $("#option-3").text(data["shrest"][0]["q" + random_num[counter_num_question]].options[2]);
            $("#option-4").text(data["shrest"][0]["q" + random_num[counter_num_question]].options[3]);
            $("#image").css("background-image", "url(" + data["shrest"][0]["q" + random_num[counter_num_question]].image + ")");
        }
    );

    counter_num_question++;
}

function checkAnswer(answer_click) {
    if (answer_click == 0) {
        if (option_0 == answer) {
            $("#label-option-1").css("background-color", "#5ECE98");

            score++;
        } else {
            $("#label-option-1").css("background-color", "#E27269");

            if (option_1 == answer) {
                $("#label-option-2").css("background-color", "#5ECE98");
            } else if (option_2 == answer) {
                $("#label-option-3").css("background-color", "#5ECE98");
            } else if (option_3 == answer) {
                $("#label-option-4").css("background-color", "#5ECE98");
            }
        }
    } else if (answer_click == 1) {
        if (option_1 == answer) {
            $("#label-option-2").css("background-color", "#5ECE98");

            score++;
        } else {
            $("#label-option-2").css("background-color", "#E27269");

            if (option_0 == answer) {
                $("#label-option-1").css("background-color", "#5ECE98");
            } else if (option_2 == answer) {
                $("#label-option-3").css("background-color", "#5ECE98");
            } else if (option_3 == answer) {
                $("#label-option-4").css("background-color", "#5ECE98");
            }
        }
    } else if (answer_click == 2) {
        if (option_2 == answer) {
            $("#label-option-3").css("background-color", "#5ECE98");

            score++;
        } else {
            $("#label-option-3").css("background-color", "#E27269");

            if (option_0 == answer) {
                $("#label-option-1").css("background-color", "#5ECE98");
            } else if (option_1 == answer) {
                $("#label-option-2").css("background-color", "#5ECE98");
            } else if (option_3 == answer) {
                $("#label-option-4").css("background-color", "#5ECE98");
            }
        }
    } else if (answer_click == 3) {
        if (option_3 == answer) {
            $("#label-option-4").css("background-color", "#5ECE98");

            score++;
        } else {
            $("#label-option-4").css("background-color", "#E27269");

            if (option_0 == answer) {
                $("#label-option-1").css("background-color", "#5ECE98");
            } else if (option_1 == answer) {
                $("#label-option-2").css("background-color", "#5ECE98");
            } else if (option_2 == answer) {
                $("#label-option-3").css("background-color", "#5ECE98");
            }
        }
    }

    window.setTimeout(function() {
        document.title = "";
        counter++;
        numQuestion();
        cleanQuestion();
        if (counter <= 10) {
            showQuestion(random);
        } else {
            window.location = "../finish/?puntos=" + score;
        }
    }, 1500);
}

function numQuestionRandom() {
    var random_num = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37];

    random_num = random_num.sort(function() {
        return Math.random() - 0.5
    });

    return random_num;
}

function numQuestion() {
    $("#num-question").text(counter + " de 10");
}

function cleanQuestion() {
    $("#label-option-1").css("background-color", "#FFFFFF");
    $("#label-option-2").css("background-color", "#FFFFFF");
    $("#label-option-3").css("background-color", "#FFFFFF");
    $("#label-option-4").css("background-color", "#FFFFFF");

    $("#question-text").empty();
    $("#movie-id").empty();
    $("#option-1").empty();
    $("#option-2").empty();
    $("#option-3").empty();
    $("#option-4").empty();
    $("#image").empty();
}

/* Resultado */

function showResult(puntaje) {
    var congrats = "",
        description_congrats = "",
        image_congrats = "../assets/img/img-finish/.jpg",
        color_bg = "";

    if (puntaje == 0) {
        congrats = "¿Qué haces aquí?";
        description_congrats = "Pequeño campesino, parece que te has equivocado. Es más, ¿En realidad sabes qué es Shrek?";
        image_congrats = "../assets/img/img-finish/shrekbigote.jpg";
        color_bg = "#BC120F";
    } else if (puntaje >= 1 && puntaje <= 3) {
        congrats = "Shrek te comería";
        description_congrats = "No eres un fan real de Shrek, puedes mejorar viendo a Burro haciendo tamales.";
        image_congrats = "../assets/img/img-finish/burrocrazy.jpg";
        color_bg = "#E46F55";
    } else if (puntaje >= 4 && puntaje <= 6) {
        congrats = "Enograte más";
        description_congrats = "Debes de poner más atención en la vida de Shrek, porque podrías ser un buen candidato para que te coma. Apuesto que no sabías que fueron a los MTVMiaw";
        image_congrats = "../assets/img/img-finish/fionayshrekchacas.jpg";
        color_bg = "#797979";
    } else if (puntaje >= 7 && puntaje <= 9) {
        congrats = "Shrektástico";
        description_congrats = "Un buen chingüengüenchon, muy bien ahora puedes dedicarte a hacer productos de Shrek.";
        image_congrats = "../assets/img/img-finish/shrektastic.jpg";
        color_bg = "#80DC3F";
    } else if (puntaje == 10) {
        congrats = "Shrek is life, Shrek is love";
        description_congrats = "No puedes mejorar más, eres un auténtico fan de Shrek. Hasta podrías actuar en una de las obras originales.";
        image_congrats = "../assets/img/img-finish/shrekobra.jpg";
        color_bg = "#07B405";
    }

    $("#congrats").text(congrats);
    $("#description-congrats").text(description_congrats);
    $("#finish-img").css("background-image", "url(" + image_congrats + ")");
    $("#container-congrats-text").css("background-color", color_bg);
    $('head').append('<meta property="og:image" content="' + image_congrats + '">');
    $('head').append('<meta property="og:description" content="' + description_congrats + '">');
}

function cleanResult() {
    $("#congrats").empty();
    $("#description-congrats").empty();
    $("#finish-img").empty();
    $("#congratulation-text").css("background-color", "#000000");
    $('meta[property=og:image]').attr('content', "");
    $('meta[property=og:description]').attr('content', "");
}

function shareOnFB(puntaje) {
    window.location = "http://www.facebook.com/sharer.php?u=http://www.azul.com/?puntos=" + puntaje;
}