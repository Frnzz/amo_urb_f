
<html>
    <head>
        <meta charset="UTF-8">
        <title>4 c PHP</title>
        <link href="../../3/a/form.css" rel="stylesheet">
    </head>
    <body>

        <?php include '../../header4.php'; ?>
        <div id="prueba">
        <?php
        if (isset($_POST['enviar'])) {
            $sex = $_POST['sexo'];
            $ed = $_POST['edad'];
            $al = $_POST['altura'];
            $pes = $_POST['peso'];

            if (is_numeric($ed) and is_numeric($pes) and is_numeric($al)) {

                if ($sex == "Hombre") {
                    $imc = $pes / (pow($al, 2));

                    $imchombre = (10 * $pes + 6.25 * ($al * 100) - 5 * $ed + 5);

                    echo "IMC : " . $imc;
                    echo "<br/>";
                    echo "Metabolismo basal : " . $imchombre;
                    echo "<br/>";
                } else {

                    $imc = $pes / (pow($al, 2));

                    $imcmujer = (10 * $pes + 6.25 * ($al * 100) - 5 * $ed - 161);

                    echo "IMC : " . $imc;
                    echo "<br/>";
                    echo "Metabolismo basal : " . $imcmujer;
                    echo "<br/>";
                }
            } else {
                echo "Datos erroneos";
            }
        }


        
        
        ?>
        </div>
        <br>
        <?php include '../../footer.php'; ?>




    </body>
</html>


