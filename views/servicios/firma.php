
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario para firmar el documento</title>
    <style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    form {
        background-color: #f0f0f0;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    label {
        font-weight: bold;
    }

    canvas {
        border: 1px solid #ccc;
        display: block;
        margin-bottom: 10px;
    }

    button {
        padding: 5px 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    input[type="submit"] {
        padding: 8px 15px;
        background-color: #28a745;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }
    </style>    

</head>
<body>
    <form action="insertfirma.php" method="post">
        <label for="firma" style="display: block; text-align: center;">Firma:</label><br>
        <span class="signature-instructions">Por favor, utiliza el área de firma a continuación para agregar tu firma. Puedes dibujarla utilizando el ratón en un dispositivo de escritorio o el dedo en dispositivos móviles con pantalla táctil.</span><br><br>
        <canvas id="canvas" width="400" height="200"></canvas><br><br>
        <button type="button" onclick="limpiarFirma()">Limpiar</button><br><br>
        <input type="hidden" id="firma" name="firma">
        <!-- Agregar un campo oculto para almacenar el folio -->
        <input type="hidden" name="folio" value="<?php echo $_GET['folio']; ?>">
        <input type="submit" value="Agregar">
    </form>

    <script>
        var canvas = document.getElementById('canvas');
        var context = canvas.getContext('2d');
        var firmaInput = document.getElementById('firma');
        var drawing = false;
        var prevX, prevY;

        canvas.addEventListener('mousedown', function (e) {
            drawing = true;
            prevX = e.clientX - canvas.offsetLeft;
            prevY = e.clientY - canvas.offsetTop;
        });

        canvas.addEventListener('mousemove', function (e) {
            if (drawing) {
                var x = e.clientX - canvas.offsetLeft;
                var y = e.clientY - canvas.offsetTop;

                context.beginPath();
                context.moveTo(prevX, prevY);
                context.lineTo(x, y);
                context.strokeStyle = '#000';
                context.lineWidth = 2;
                context.stroke();

                prevX = x;
                prevY = y;
            }
        });

        canvas.addEventListener('mouseup', function (e) {
            drawing = false;
            updateFirma();
        });

        canvas.addEventListener('mouseleave', function (e) {
            if (drawing) {
                drawing = false;
                updateFirma();
            }
        });

        function updateFirma() {
            firmaInput.value = canvas.toDataURL();
        }

        function limpiarFirma() {
            context.clearRect(0, 0, canvas.width, canvas.height);
            firmaInput.value = '';
        }
    </script>
</body>
</html>
