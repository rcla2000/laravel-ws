<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <title>Pruebas</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1 class="mt-4 mb-4">Listado de mascotas</h1>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Color de pelo</th>
                    <th>Estado</th>
                </thead>
                <tbody>
                    @foreach ($mascotas as $mascota)
                        <tr>
                            <td>{{ $mascota->id_mascota }}</td>
                            <td>{{ $mascota->nombre_mascota }}</td>
                            <td>{{ $mascota->color_pelo }}</td>
                            <td>{{ $mascota->esterilizado }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row">
                {{ $mascotas->links() }}
            </div>
        </div>
    </div>
    {{-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> --}}
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>