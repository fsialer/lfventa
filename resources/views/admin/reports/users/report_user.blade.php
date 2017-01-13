<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>REPORTE DE USUARIOS</title>
</head>
<style>
    .header-report {
        text-align: center;
        border-style: solid;
         font-family:sans-serif;
    }
    
    table {
        font-family:sans-serif;
        justify-content: center;
        width: 100%;
    }
    
    th,
    td {
        padding: 15px;
        text-align: center;
    }
    
    tr:nth-child(even) {
        background-color: #f2f2f2
    }
    
    th {
        text-align: center;
        background-color: steelblue;
        color: white;
    }
</style>

<body>
    <div class="header-report">
        <h2>
            LFVENTA:REPORTE DE USUARIOS
        </h2>
        <p>
            Fecha: {{($date)}}
        </p>
    </div>
    <table class="table table-hover">
        <tr>
            <th>NOMBRE</th>
            <th>EMAIL</th>
            <th>TIPO</th>
        </tr>
        @foreach($datav as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->type}}</td>
        </tr>
        @endforeach
        
    </table>
    

</body>

</html>