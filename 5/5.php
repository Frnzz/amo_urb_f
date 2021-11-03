
<html>
    <head>
        <title>Ejercicio 5</title>
        <link href="../1/1.css" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php include '../header.php'; ?>
        <div id="contenedor">
            
            <h1>Ejercicio 5.</h1>
            <br>

            <h3>1.A. ¿Qué es un control de versiones? ¿Qué diferencias hay entre uno centralizado y otro distribuido?.</h3>
            <p>               
                <b>Control de versiones:</b> <br>
                <br>
                Herramientas de software que ayudan a los equipos de software a gestionar los cambios en el código fuente a lo largo del tiempo.<br>
                <br>
                <b>El control de versiones distribuido</b> toma un enfoque entre iguales (peer-to-peer), opuesto al enfoque de cliente-servidor de los sistemas centralizados. 
                En lugar de un único repositorio central en el cual los clientes se sincronizan, la copia local del código base de cada peer es un repositorio completo. <br>
                <br>
                <b>El control de versiones distribuido</b> sincroniza los repositorios intercambiando ajustes (conjuntos de cambios) entre iguales
                
            </p>
            
            <h3>1.B. ¿Qué es Git? ¿Y GitHub? ¿En qué se diferencian y cómo se relacionan entre sí?.</h3>
            <p>               
                La diferencia principal entre <b> Git y GitHub</b> es que Git es una herramienta de código abierto, <br>
                que los desarrolladores instalan localmente para gestionar el código fuente, <br>
                mientras que GitHub es un servicio en línea al que los desarrolladores que utilizan Git pueden conectarse y cargar o descargar recursos.<br>
                <br>
                En resumen, Git es el sistema de control de versiones y GitHub es un servicio de alojamiento para los repositorios de Git.
                
            </p>
            
            <h3>1.C. Hazte una cuenta, si no la tienes, en GitHub con un nombre de usuario serio y profesional.</h3>
            <p>               
                <img src="perfil.jpg"/><br>
                
            </p>
            
            <h3>1.D. Crea un proyecto en GitHub de una aplicación web tuya y usa Git para subir el código.</h3>
            <p>               
                <b>1.</b> En la página web de Github seleccionar Nuevo Repositorio.<br>
                <br>
                <img src="1.jpg"/><br>
                <br>
                <b>2.</b> Nombrar el nuevo proyecto, y escribir cualquier descripción.<br>
                <br>
                <img src="2.jpg"/><br>
                <br>
                <b>3.</b> Una vez creado el proyecto en Github, dirigirse a Netbeans.<br>
                En netbeans, ir a la opción, Inicializar un repositorio Git. <br>
                <br>
                <img src="3.jpg"/><br>
                <br>
                <b>4.</b> En el proyecto inicializado, click derecho, Git y seleccionamos Commit .<br>
                <br>
                <img src="4.jpg"/><br>
                <br> 
                <b>5.</b> Ahora, volvemos al proyecto inicializado, click derecho, Git, remote y push.<br>
                <br> Elegimos la ruta de Github, en la que queremos subir el proyecto y listo.<br>
                <br>
                <img src="6.jpg"/><br>
                
            </p>
            
        </div>
        <br>
        <?php include '../footer.php'; ?>
    </body>
</html>
