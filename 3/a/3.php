
<html>
    <head>
        <title>Ejercicio 3</title>
        <link href="form.css" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        
        <?php include '../../header3.php'; ?>
        <div id="prueba">


            <h1>Formulario sencillo</h1>
            <p id="rellenar">Rellene los campos y pulse Enviar.</p>
            
            <form action="accion.php" method="POST"/>

            <p><input type="text" name="nombre"  size="50" placeholder="Nombre y apellidos"/>   
            <p><input type="email" name="email" required size="50" placeholder="Correo electrónico"/>
            <p><input type="tel" pattern="[0-9]{9}" name="telefono"  size="50" placeholder="Teléfono (opcional)"/>     
            <p><input type="text" name="web" size="50" placeholder="Sitio web personal (opcional)"/>
            


            <p>
            <textarea name="comentario" required rows="5" cols="50" placeholder="Escriba su consulta"></textarea>
            <p><input  type="submit" id="comprobar" name="comprobar" value="Enviar"> 
                
        </form>



    </div>
        <br>
         <?php include '../../footer.php'; ?>
</body>
</html>
