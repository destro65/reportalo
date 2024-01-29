<!DOCTYPE html>
<html>
<head>
    <title>Reportalo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <h1>Reporte de Multas</h1>
    <p>{{ $date }}</p>

    <table class="table table-bordered" border=1>
        <thead>
            <tr border=1>
                
                <th>Fecha y Hora</th>
                <th>Unidad</th>
                <th>Ruta</th>
            </tr>
        </thead>
        <tbody>
            @foreach($multas as $index => $multa)
                <tr border=1>
                    
                    <td>{{ $multa->created_at }}</td>
                    
                    @if(isset($unidades[$index]))
                        <td>{{ $unidades[$index]->registro }}</td>
                    @else
                        <td>N/A</td>
                    @endif
    
                    @if(isset($rutas[$index]))
                        <td>{{ $rutas[$index]->nombre }}</td>
                    @else
                        <td>N/A</td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>