
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <link href="./includes/css/log.css" rel="stylesheet" />
    <title>Página de inicio</title>
    <style>
        /* Estilos adicionales para el formulario de inicio de sesión */
        body {
            margin: 0;
            padding: 0;
            font-size: 15px;
            background-image: url('./includes/img/Fondo-Inicio.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .sesion {
            font-size: 24px;
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }
        .contenedor {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 500px;
        }
        #inp1,
        #inp3 {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }
        #inp1::placeholder,
        #inp3::placeholder {
            color: #999;
        }
        input[type="submit"],
        input[type="reset"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 15px;
            margin-right: 20px;
        }
        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #0056b3;
        }
        .logo-img {
            max-width: 1000px;
            margin-right: 200px;
        }
        .blue-text {
            color: blue;
        }
        .container {
             display: flex;
        }

        .item {
            flex: 1;
        }


    </style>
</head>
<body>
    
    <div class="contenido-derecha">
        <div>
            <h1 class="blue-text sesion">INICIAR SESIÓN</h1>
        </div>
        <div class="contenedor">
            <form id="form1" method="post" action="./includes/php/valida.php">
                <div id="datos">
                    Ingresa tu usuario:<br /><br>
                    <input title="Ingresa tu Usuario" id="inp1" maxlength="30" name="usuario"
                        placeholder="Solo letras y números" required/><br><br />
                    Ingresa tu contraseña:<br /><br>
                    <input title="Ingresa tu Password" id="inp3" maxlength="10" name="password" type="password"
                        placeholder="Teclea tu contraseña" required/><br /><br>
                    <div class="container" style="width: 130px">
                        <div class="item"><input type="submit" value="Enviar" name="Enviar"/></div>
                        <div class="item"><input type="reset" value="Limpiar"/></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
 
</body>
</html>
