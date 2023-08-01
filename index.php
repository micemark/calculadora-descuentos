<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Descuentos</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <style>
        html, body {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align:center;
        }
        .container {
            width: 500px;
        }
        #resultado {
            margin:0;
        }
        input[type="text"] {
            text-align: center;
        }
    </style>
</head>
    <body>

        <div class="container">
            
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Calculadora para descuentos</h4>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="precio_original">Precio original:</label>
                            <input type="text" name="precio_original" id="precio_original" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="porcentaje_descuento">Porcentaje del descuento:</label>
                            <input type="text" name="porcentaje_descuento" id="porcentaje_descuento" class="form-control" required>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-muted">
                    <p id="resultado">Precio con descuento: </p>
                </div>
            </div>
            
        </div>

        <script>
            const precioInput = document.getElementById('precio_original');
            const descuentoInput = document.getElementById('porcentaje_descuento');
            const resultadoElement = document.getElementById('resultado');

            precioInput.addEventListener('input', calcularDescuento);
            descuentoInput.addEventListener('input', calcularDescuento);

            function calcularDescuento() {
                const precioOriginal = parseFloat(precioInput.value);
                const porcentajeDescuento = parseFloat(descuentoInput.value);

                if (!isNaN(precioOriginal) && !isNaN(porcentajeDescuento)) {
                    const descuento = precioOriginal * (porcentajeDescuento / 100);
                    const precioFinal = precioOriginal - descuento;
                    resultadoElement.textContent = `Precio con Descuento: $${precioFinal.toFixed(2)}`;
                } else {
                    resultadoElement.textContent = "Por favor, ingresa valores numéricos válidos.";
                }
            }
        </script>
    </body>
</html>
