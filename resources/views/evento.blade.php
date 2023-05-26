<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Generar eventos</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-header mb-4">Prueba websockets | Generar eventos</h5>
                    <span>Mensaje: </span>
                    <div class="form-group">
                        <label for="mensaje">Escriba su mensaje:</label>
                        <input type="text" id="mensaje" placeholder="mensaje" required>
                    </div>
                    <button type="button" class="btn btn-primary" id="btn-enviar">Enviar</button>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        const btn = document.querySelector('#btn-enviar');
        const mensaje = document.querySelector('#mensaje').value;
        btn.addEventListener('click', () => {
            Echo.private('trades').whisper('NewTrade', {
               trade: mensaje
            });
        });
        
    </script>
</body>
</html>