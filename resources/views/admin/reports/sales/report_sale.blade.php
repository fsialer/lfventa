<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>REPORTE DE VENTA DE ARTICULOS</title>
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
            LFVENTA:REPORTE DE VENTAS DE ARTICULOS
        </h2>
        <p>
            Fecha: {{($date)}}
        </p>
    </div>
    <table class="table table-hover">
        <tr>
            <th>CLIENTES</th>
            <th>TIPO COMPROBANTE</th>
            <th>NUMERO DE COMPROBANTE</th>
            <th>FECHA  DE COMPROBANTE</th>
            <th>TOTAL</th>
        </tr>
        @foreach($datav as $sale)
        <tr>
            <td>{{$sale->customer->name}}</td>
            <td>{{$sale->type_voucher}}</td>
            <td>{{$sale->serie_voucher}}-{{$sale->num_voucher}}</td>
            <td>{{$sale->date}}</td>
            <td>{{$sale->total}}</td>
        </tr>
        @endforeach
        
    </table>
    

</body>
