<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>WebSockets</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-header mb-4">Prueba websockets</h5>
                    <span>Mensaje: </span>
                    <span id="mensaje" class="text-primary">No hay mensaje</span>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        const mensaje = document.querySelector('#mensaje');
        Echo.channel('trades').listen('NewTrade', (e) => {
            mensaje.textContent = e.trade;
        });
    </script>
</body>

</html>
