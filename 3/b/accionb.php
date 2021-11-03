<html >
    <head>
        <meta charset="UTF-8">
        <title>Generador CV</title>
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
                $exp = $_POST['experiencia'];
                $for = $_POST['formacion'];
                $idiom = $_POST['idioma'];
                $other = $_POST['otros'];

                ////NOMBRE////

                if (empty($nom) || empty($em) || empty($tel) || empty($exp) || empty($for) || empty($idiom)) {
                    ?> <p id="error"> *Tienes que rellenar todos los campos* </p> <?php
                } else {

                    if (is_numeric($nom)) {

                        ?> <p id="error"> *Un nombre no puede llevar numeros* </p> <?php
                        
                    } else if (strlen($nom) > 15) {
                        echo "Nombre y Apellidos: " . "$nom";
                        echo "<br/>";
                    } else {
                        echo "El nombre y apellidos tienen que tener mas de 15 caracteres";
                        echo "<br/>";
                    }

                    if (!filter_var($em, FILTER_VALIDATE_EMAIL)) {
 
                        ?> <p id="error"> *Tienes que escribir el correo correctamente* </p> <?php
                    } else {
                        echo "Correo: " . "$em";
                        echo "<br/>";
                    }


                    if (!is_numeric($tel)) {
                        
                        ?> <p id="error"> *Un telefono tiene que ser numerico* </p> <?php
                    } else if (strlen($tel) == 9) {
                        echo "Telefono: " . "$tel";
                        echo "<br/>";
                    } else {
                        
                        ?> <p id="error"> *El telefono tiene qué tener 9 numeros* </p> <?php
                    }

                    echo "Experiencia profesional: " . "$exp";
                    echo "<br/>";

                    echo "Formacion: " . "$for";
                    echo "<br/>";

                    echo "Idiomas: " . "$idiom";
                    echo "<br/>";

                    echo "Otros datos de interes: " . "$other";
                    echo "<br/>";
                }




            }
            ?>


            <p>Comprueba tus datos antes de enviarlos, si no estan bien, vuelve a escribirlos.</p>
            <p>Los datos son correctos: <a href="../a/enviar.php">Enviar</a>
            <p>Los datos no son correctos: <a href="b.php">Volver a escribirlos</a>





        </div>
        <br>
        <?php include '../../footer.php'; ?>



    </body>
</html>





