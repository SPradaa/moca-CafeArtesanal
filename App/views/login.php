<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-in - Moca - Cafe Artesanal</title>
    <link rel="stylesheet" href="./Assets/Css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&display=swap" rel="stylesheet">
      <link rel="icon" type="image/webp" href="./Assets/Images/GranoCafe.png">
</head>

<body>
    <div class="container">
        <form action="index.php?ruta=login" class="form-login" id="form-login" method="POST">
            <div class="login-icon">
                <img src="./Assets/Images/logo.png" alt="Logo-Moca-Cafe-Artesanal" class="logo-moca">
            </div>
            <h4 class="title">Moca - Cafe Artesanal</h4>
            <p class="subtitle">Ingresa tus Credenciales de Acceso</p>
            <label for="documento" class="labels">Documento</label>
            <input type="text" placeholder="Documento" id="documento" name="documento" class="inputs">
            <label for="password" class="labels">Contraseña</label>
            <input type="password" placeholder="Contraseña" id="password" name="password" class="inputs">
            <button type="submit" class="btn-form-login">Iniciar Sesión</button>

        </form>

        <form action="index.php?ruta=registro" class="form-registro" id="form-registro" method="POST">
            <div class="login-icon">
                <img src="./Assets/Images/logo.png" alt="Logo-Moca-Cafe-Artesanal" class="logo-moca">
            </div>
            <h4 class="title">Registro - Moca </h4>
            <p class="subtitle">Regístrese ahora y personalice su experiencia al máximo</p>
            <p id="error" class="error"></p>
            <label for="documento" class="labels">Documento</label>
            <input type="text" placeholder="Documento" id="documento-registro" name="documento" class="inputs" required>
            <label for="nombre" class="labels">Nombre</label>
            <input type="text" placeholder="Nombre" id="nombre" name="nombre" class="inputs" required>
            <label for="correo" class="labels">Correo</label>
            <input type="email" placeholder="Correo" id="correo" name="correo" class="inputs" required>
            <label for="telefono" class="labels">Telefono</label>
            <input type="tel" placeholder="Telefono" id="telefono" name="telefono" class="inputs" required>
            <label for="password" class="labels">Contraseña</label>
            <input type="password" placeholder="Contraseña" id="password-registro" name="password" class="inputs" required>
            <button type="submit" class="btn-form-login">Registrarse</button>
        </form>

        <span class="btns">
            <button class="btn-login" id="btn-login">Log-in</button>
            <button class="btn-registro" id="btn-registro">Registro</button>


        </span>
    </div>

    </div>

    <script src="./Assets/Js/login.js"></script>
</body>

</html>