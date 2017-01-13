<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>REPORTE DE CLIENTES</title>
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
            LFVENTA:REPORTE DE CLIENTES
        </h2>
        <p>
            Fecha: {{($date)}}
        </p>
    </div>
    <table class="table table-hover">
        <tr>
            <th>NOMBRE</th>
            <th>TIPO DE DOCUMENTO</th>
            <th>NUMERO DE DOCUMENTO</th>
            <th>TELEFONO</th>
            <th>EMAIL</th>
            
        </tr>
        @foreach($datav as $customer)
        <tr>
            <td>{{$customer->name}}</td>
            <td>{{$customer->type_document}}</td>
            <td>{{$customer->num_document}}</td>
            <td>{{$customer->phone}}</td>
            <td>{{$customer->email}}</td>
        </tr>
        @endforeach
        
    </table>
    

</body>

</html>