<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudio Mayed</title>
    <link rel="stylesheet" href="../css/estiloRegistro.css">
</head>


<body>
    <header>
        <div class="container">
            <div class="logo">
                <img src="Image/logos.ico.png" alt="Logo de la pagina">
            </div>

            <div class="Perú">
                <img src="Image/Peru.ico" alt="Nacionalidad">
            </div>
        </div>
    </header>

    <form action="#.php" method="post" class="login-form">
        <h1>Registro</h1>

        <div class="form-input material">
            <label for="correo">Correo</label>
            <input type="text" name="correo" id="correo" class="form-control-material" required>
        </div>

        <div class="form-input material">
            <label for="contraseña">Contraseña</label>
            <input type="password" name="contraseña" id="contraseña" class="form-control-material" required>
        </div>

        <div class="form-input material">
            <label for="edad">Edad</label>
            <input type="date" name="edad" id="edad" class="form-control-material" required>
        </div>

        <div class="form-input material">
            <label for="ubicacion">Dirección</label>
            <input type="address" name="ubicacion" id="ubicacion" class="form-control-material" required>
        </div>

        <div class="form-input material">
            <label>¿Qué buscas?</label>
            <input type="text" name="busqueda" class="form-control-material" required>
        </div>

        <div class="form-input material">
            <label>¿Cómo nos encontraste?</label>
            <div class="encontraste-options">
                <input type="radio" id="redes_sociales" name="encontraste" value="redes_sociales" required>
                <label for="redes_sociales">Redes Sociales</label>

                <input type="radio" id="recomendacion" name="encontraste" value="recomendacion" required>
                <label for="recomendacion">Recomendación</label>
            </div>
        </div>

        <div class="form-input material">
            <button type="submit" class="btn btn-primary">Continuar</button>
        </div>
    </form>

    <div class="form-input material">
        <button class="btn btn-primary" href="index2.html">Retroceder</button>
    </div>
    <div class="logo">
        <img src="Image/logos.ico.png" alt="Logo de la pagina">
    </div>

</body>

</html>
``