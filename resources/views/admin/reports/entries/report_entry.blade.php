<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>REPORTE DE COMPRA DE ARTICULOS</title>
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
            LFVENTA:REPORTE DE COMPRA DE ARTICULOS
        </h2>
        <p>
            Fecha: {{($date)}}
        </p>
    </div>
    <table class="table table-hover">
        <tr>
            <th>PROVEEDORES</th>
            <th>TIPO COMPROBANTE</th>
            <th>NUMERO DE COMPROBANTE</th>
            <th>FECHA  DE COMPROBANTE</th>
            <th>TOTAL</th>
        </tr>
        @foreach($datav as $entry)
        <tr>
            <td>{{$entry->provider->name}}</td>
            <td>{{$entry->type_voucher}}</td>
            <td>{{$entry->serie_voucher}}-{{$entry->num_voucher}}</td>
            <td>{{$entry->date}}</td>
            <td>{{$entry->total}}</td>
        </tr>
        @endforeach
        
    </table>
    

</body>

</html>