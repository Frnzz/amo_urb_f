<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario PHP</title>
        <link href="../../3/a/form.css" rel="stylesheet">
    </head>
    <body>


        <?php include '../../header3.php'; ?>
        <div id="prueba">


            <?php
            if (isset($_POST['comprobar'])) {
                $nom = $_POST['nombre'];
                $em = $_POST['email'];
                $tel = $_POST['telefono'];
                $pag = $_POST['web'];
                $com = $_POST['comentario'];

                ////NOMBRE////




                if (empty($nom) || empty($em) || empty($com)) {
                    ?>

                    <p id="error"> *Tienes que rellenar todos los campos* </p>
                    

                    <?php
                } else {

                    if (is_numeric($nom)) {
                        echo "Un nombre no puede llevar numeros";
                        echo "<br/>";
                    } else if (strlen($nom) > 15) {
                        echo "Nombre y Apellidos: " . "$nom";
                        echo "<br/>";
                    } else {
                        echo "El nombre y apellidos tienen que tener mas de 15 caracteres";
                        echo "<br/>";
                    }


                    if (!filter_var($em, FILTER_VALIDATE_EMAIL)) {
                        echo "Tienes que escribir el correo correctamente";
                        echo "<br/>";
                    } else {
                        echo "Correo: " . "$em";
                        echo "<br/>";
                    }

                    if (!is_numeric($tel)) {
                        echo "Un telefono tiene que ser numerico";
                        echo "<br/>";
                    } else if (strlen($tel) == 9) {
                        echo "Telefono: " . "$tel";
                        echo "<br/>";
                    } else {
                        echo "El telefono tiene que tener 9 numeros";
                        echo "<br/>";
                    }

                    echo "Sitio web personal: " . "$pag";
                    echo "<br/>";
                    echo "Consulta: " . "$com";
                    echo "<br/>";
                }
            }
            ?>


            <p>Comprueba tus datos antes de enviarlos, si no estan bien, vuelve a escribirlos.</p>
            <p>Los datos son correctos: <a href="enviar.php">Enviar</a>
            <p>Los datos no son correctos: <a href="3.php">Volver a escribirlos</a>




        </div>

        <br>
        <?php include '../../footer.php'; ?>

    </body>
</html>





