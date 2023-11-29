<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>
    <link rel="stylesheet" href="../css/estiloLogin.css">
</head>


<body>
    <header>
        <div class="container">
            <div class="logo">
                <img src="../image/logos.ico.png" alt="Logo de la pagina">
            </div>

            <div class="Perú">
                <img src="../image/Peru.ico" alt="Nacionalidad">
            </div>
        </div>
    </header>

    <form action="controlador/conexionDBlogin.php" method="post"  class="login-form">
        <h1>Ingrese su Correo</h1>

        <div class="form-input material">
            <label for="correo">Correo</label>
            <input type="text" name="correo" id="correo" class="form-control-material" required>
        </div>

        <div class="form-input material">
            <label for="contraseña">Contraseña</label>
            <input type="password" name="clave" id="contraseña" class="form-control-material" required>
        </div>
        <button type="submit" class="btn btn-primary btn-ghost">Acceder</button>

        <div class="forgot-password">
            <a href="#">¿Olvidaste tu contraseña?</a>
        </div>

        <div class="firs-time">
            <p>¿Primera vez?
                <a href="index2.html" class="btn btn-primary btn-ghost">Registrarse</a>
        </div>
    </form>

</body>

</html>