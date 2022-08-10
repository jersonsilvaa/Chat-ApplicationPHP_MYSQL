<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/2936/2936956.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>Chat app online</title>
</head>
<body>
    <div class="container">
        <section class="form signup">
            <header>Chat app online</header>
            <form action="#" enctype="multipart/form-data" autocomplete="off" >
                <div class="error-txt"></div>
                <div class="name-details">
                    <div class="field input">
                        <label>Nombres</label>
                        <input type="text" name="fname" placeholder="Nombres" required >
                    </div>
                    <div class="field input">
                        <label>Apellidos</label>
                        <input type="text" name="lname" placeholder="Apellidos" required >
                </div>
                <div class="field input">
                    <label>Correo</label>
                    <input type="text" name="email" placeholder="Correo" required >
                </div>
                <div class="field input">
                    <label>Contraseña</label>
                    <input type="password" name="password" placeholder="Contraseña" required >
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <label>Seleccionar imagen de perfil</label>
                    <input type="file" name="image" required >
                </div>
                <div class="field button">
                    <input type="submit" value="Continuar">
                </div>
            </div>
            </form>
            <div class="link">¿Ya tienes una cuenta? <a href="./pages/login.php">Inicia sesión</a> </div>
        </section>
    </div>
</body>
<script src="./js/pass-show-hide.js"></script>
<script src="./js/signup.js"></script>
</html>