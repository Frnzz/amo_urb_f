<html>
    <head>
        <title>Ejercicio 3</title>
        <link href="formb.css" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php include '../../header3.php'; ?>
        <div id="prueba">


            <h1>Generador CV</h1>
            <p id="rellenar">Rellene los campos y pulse enviar</p>
            
            <form action="accionb.php" method="POST"/>

            <p><input type="text" name="nombre"  size="50" placeholder="Nombre y apellidos"/>   
            <p><input type="text" name="email" required size="50" placeholder="Correo electrónico"/>
            <p><input type="tel" pattern="[0-9]{9}" name="telefono" required size="50" placeholder="Teléfono"/>      
            <p><textarea name="experiencia" required rows="5" cols="50" placeholder="Experiencia profesional"></textarea>
            <p><textarea name="formacion" required rows="2" cols="50" placeholder="Formacion"></textarea>
            <p><textarea name="idioma" required rows="2" cols="50" placeholder="Idiomas"></textarea>
            <p><textarea name="otros" rows="2" cols="50" placeholder="Otros datos de interes"></textarea>
            <p><input type="submit" id="comprobar" name="comprobar" value="Enviar"> 
                
        </form>
    </div>
        <br>
        <?php include '../../footer.php'; ?>
</body>
</html>