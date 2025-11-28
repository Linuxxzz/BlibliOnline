<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIBLIONLINE - Iniciar Sesión Alumno</title>
    <link rel="stylesheet" href="../../../public/css/login.css">
</head>
<body>
    <div class="cajota">
        <div class="contenedorLogin">
        <div class="logoLibro">📚</div>
        
        <h1 class="tituloLogin">BIBLIONLINE</h1>
        <p class="subTituloLogin">Recuperar contraseña</p>
        <p class="subTituloLogin">Para poder reestablecer su contraseña se le enviara un mensaje al correo destinado a la cuenta</p>
        <br>
        <form class="formularioLogin" id="formularioLogin" action="../../services/EmailService.php" method="POST">
            <div class="grupoInput">
                <label for="correoElectronico" class="etiquetaInput">Correo Electrónico Con El Que Se Registro</label>
                <input 
                    type="email" 
                    id="correoElectronico" 
                    name="correoElectronico" 
                    class="campoInput" 
                    placeholder="ejemplo@dominio.com"
                    required
                >
            </div>
            <input type="submit" value="Enviar" class="botonIngresar">
        </form>
        
        <div class="enlacesAdicionales">
            <p class="textoRegistro">¿Ya tienes cuenta? <a href="#" onclick="history.back(); return false;" class="enlaceRegistro">Inicia sesión aquí</a></p>
            <a href="../../../index.php" class="enlaceVolver">← Volver al inicio</a>
        </div>
        </div>
    </div>
    

</body>
</html>