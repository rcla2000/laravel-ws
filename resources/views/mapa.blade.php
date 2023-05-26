<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/mapa.css') }}">
    <title>Ubicación geográfica de votantes</title>
</head>

<body>
    <div class="container">
        <div class="card mt-md-5 p-2 mb-md-5">
            <div class="card-body">
                <h2 class="card-title mb-3 text-center">Ubicación geográfica de votantes</h5>
                <div class="row">
                    <div class="contenedor-mapa" id="mapa-votacion">
                    </div>
                </div>
            </div>
        </div>
    </div>

    @routes
    {{-- <script type="text/javascript" src="{{ asset('assets/js/mapa.js') }}"></script> --}}
    <script type="text/javascript" src="{{ asset('assets/js/localizacion.js') }}"></script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCAqjCXrK4eR4aJZn5VmjeZDFtSy01Na88&callback=initMap"
        type="text/javascript"></script>
        {{-- <script type="text/javascript" src="{{ asset('assets/js/latlng.js') }}"></script> --}}
</body>

</html>
