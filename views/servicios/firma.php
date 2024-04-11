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
    <form action="insertfirma.php" method="post" enctype="multipart/form-data"> <!-- Agrega enctype="multipart/form-data" para permitir la subida de archivos -->
        <div>
            <br>
            <br>
            <label for="firma_recibido" style="display: block; text-align: center;">Firma Recibido:</label><br>
            <span class="signature-instructions">Por favor, utiliza el área de firma a continuación para agregar tu firma. Puedes dibujarla utilizando el ratón en un dispositivo de escritorio o el dedo en dispositivos móviles con pantalla táctil.</span><br><br>
            <canvas id="canvas_recibido" width="400" height="200"></canvas><br><br>
            <button type="button" onclick="limpiarFirma('canvas_recibido')">Limpiar</button><br><br>
            <!-- Cambia el nombre del campo oculto de "imagen" a "firma_recibido" -->
            <input type="hidden" id="firma_recibido" name="firma_recibido">
            <!-- Agregar un campo oculto para almacenar el folio -->
            <input type="hidden" name="folio" value="<?php echo $_GET['folio']; ?>">
        </div>
        <div>
            <label for="firma_tecnico" style="display: block; text-align: center;">Firma Ingeniero/Técnico:</label><br>
            <canvas id="canvas_tecnico" width="400" height="200"></canvas><br><br>
            <button type="button" onclick="limpiarFirma('canvas_tecnico')">Limpiar</button><br><br>
            <!-- Cambia el nombre del campo oculto de "imagen" a "firma_tecnico" -->
            <input type="hidden" id="firma_tecnico" name="firma_tecnico">
            <!-- Agregar un campo oculto para almacenar el folio -->
            <input type="hidden" name="folio" value="<?php echo $_GET['folio']; ?>">
        </div>
        <input type="submit" value="Agregar">
    </form>


    <script>
        function limpiarFirma(canvasId) {
            var canvas = document.getElementById(canvasId);
            var context = canvas.getContext('2d');
            context.clearRect(0, 0, canvas.width, canvas.height);
            // Limpia también el valor del campo oculto asociado al canvas
            document.getElementById(canvasId.replace('canvas', 'firma')).value = '';
        }

        function updateFirma(canvasId) {
            var canvas = document.getElementById(canvasId);
            var firmaInput = document.getElementById(canvasId.replace('canvas', 'firma'));
            firmaInput.value = canvas.toDataURL();
        }

        function initCanvas(canvasId) {
            var canvas = document.getElementById(canvasId);
            var context = canvas.getContext('2d');
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
                updateFirma(canvasId);
            });

            canvas.addEventListener('mouseleave', function (e) {
                if (drawing) {
                    drawing = false;
                    updateFirma(canvasId);
                }
            });
        }

        initCanvas('canvas_recibido');
        initCanvas('canvas_tecnico');
    </script>
</body>
</html>
