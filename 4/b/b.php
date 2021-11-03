
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario PHP</title>
        <link href="../../3/a/form.css" rel="stylesheet">
    </head>
    <body>

        <?php include '../../header4.php'; ?>
        <div id ="prueba";>

        <?php
        
        if (isset($_POST['enviar'])) {
            $rad = $_POST['radio'];

            
          
        
        
        
        
        
        
        ////// RADIO //////
            
        if (is_string($rad)) {

        if (is_numeric($rad))  {
            echo "El radio es : " . $rad . " cm"; 
            echo "<br/>";
            $exp = 2;
            $pi = M_PI;
            $area = $pi * pow($rad, 2);
            $longitud = 2 * $pi * $rad;
            
            echo "El area del circulo es: " . bcdiv($area,'1',2) . " cm" . "<sup>" . $exp . "</sup>";
            echo "<br/>";
            echo "La longitud de la circunferencia es: " .bcdiv($longitud,'1',2) . " cm" . "<sup>" . $exp . "</sup>";
            
            echo "<br/>";
        }
        else {
            echo   "El radio tiene que ser numerico";
        }   
        }

        }
        
        
        
        
        ?>



            </div>
        <br>
        <?php include '../../footer.php'; ?>
    </body>
</html>

