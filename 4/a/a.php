
<html>
    <head>
        <meta charset="UTF-8">
        <title>4 a PHP</title>
        <link href="../../3/a/form.css" rel="stylesheet">
    </head>
    <body>


        <?php include '../../header4.php'; ?>
        <div id ="prueba";>
            <?php
            if (isset($_POST['enviar'])) {
                $tir = $_POST['tirada'];

                $programa = array("Piedra", "Tijeras", "Lagarto", "Spock", "Papel");

                $azar = $programa[random_int(0, 4)];

                echo "Mi tirada es: " . $tir;
                echo "</br>";
                echo "Tirada del contrincante al azar : " . $azar;
                echo "</br>";

                if ($tir == "Piedra") {
                    if ($azar == "Piedra") {
                        echo "Empate";
                    } else if ($azar == "Papel") {
                        echo "Gana el papel";
                    } else if ($azar == "Tijeras") {
                        echo "Gana la piedra";
                    } else if ($azar == "Lagarto") {
                        echo "Gana la piedra";
                    } else if ($azar == "Spock") {
                        echo "Gana el spock";
                    }
                }

                if ($tir == "Papel") {
                    if ($azar == "Piedra") {
                        echo "Gana el papel";
                    } else if ($azar == "Papel") {
                        echo "Empate";
                    } else if ($azar == "Tijeras") {
                        echo "Ganan las tijeras";
                    } else if ($azar == "Lagarto") {
                        echo "Gana el lagarto";
                    } else if ($azar == "Spock") {
                        echo "Gana el papel";
                    }
                }

                if ($tir == "Tijeras") {
                    if ($azar == "Piedra") {
                        echo "Gana la piedra";
                    } else if ($azar == "Papel") {
                        echo "Ganan las tijeras";
                    } else if ($azar == "Tijeras") {
                        echo "Empate";
                    } else if ($azar == "Lagarto") {
                        echo "Ganan las tijeras";
                    } else if ($azar == "Spock") {
                        echo "Gana el spock";
                    }
                }

                if ($tir == "Lagarto") {
                    if ($azar == "Piedra") {
                        echo "Gana la piedra";
                    } else if ($azar == "Papel") {
                        echo "Gana el lagarto";
                    } else if ($azar == "Tijeras") {
                        echo "Ganan las tijeras";
                    } else if ($azar == "Lagarto") {
                        echo "Empate";
                    } else if ($azar == "Spock") {
                        echo "Gana el lagarto";
                    }
                }

                if ($tir == "Spock") {
                    if ($azar == "Piedra") {
                        echo "Gana el spock";
                    } else if ($azar == "Papel") {
                        echo "Gana el papel";
                    } else if ($azar == "Tijeras") {
                        echo "Ganan el spock";
                    } else if ($azar == "Lagarto") {
                        echo "Gana el lagarto";
                    } else if ($azar == "Spock") {
                        echo "Empate";
                    }
                }
            }
            ?>

        </div>
        <br>
            <?php include '../../footer.php'; ?>



    </body>
</html>
