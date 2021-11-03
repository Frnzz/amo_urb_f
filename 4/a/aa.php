
<html>
    <head>
        <title>Ejercicio 4 a</title>
        <link href="../../3/a/form.css" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
         <?php include '../../header4.php'; ?>
        <div id="prueba">

            <form action="a.php" method="POST"/>

            <p>Seleccion su tirada </p>
            <select name="tirada">
                <option value="Piedra">Piedra</option> 
                <option value="Papel">Papel</option> 
                <option value="Tijeras">Tijeras</option> 
                <option value="Lagarto">Lagarto</option> 
                <option value="Spock">Spock</option> 
            </select>

             

            <p><input type="submit" name="enviar" value="enviar"> 
            
                
             

            </form>
             
            
        </div>
        <br>
         <?php include '../../footer.php'; ?>
    </body>
</html>
