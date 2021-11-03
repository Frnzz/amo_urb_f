
<html>
    <head>
        <title>Ejercicio 3</title>
        <link href="../../3/a/form.css" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php include '../../header4.php'; ?>
        <div id="prueba">


            <form action="c.php" method="POST" >


            <select name="sexo">
                <option value="Hombre">Hombre</option> 
                <option value="Mujer">Mujer</option> 
            </select>

            <p><input type="text" name="edad" size="50" required placeholder="Edad"/>   
            <p><input type="text" name="altura" size="50" required placeholder="Altura (m)"/>
            <p><input type="text" name="peso"  size="50" required placeholder="Peso  (kg)"/>     

            <p><input type="submit" name="enviar" value="enviar"> 


            </form>


             
            
            
            
            
            
        </div>
        <br>
        <?php include '../../footer.php'; ?>
    </body>
</html>