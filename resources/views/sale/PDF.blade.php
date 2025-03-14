<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Venta #{{ $sale->id ." ".  $sale->Nombre_Cliente}}</title>
    <style>
        body {
            font-family: 'Helvetica', 'Arial', sans-serif;
            margin: 0;
            padding: 20px;
            font-size: 14px;
            color: #333;
            background: #f7f7f7;
        }

        .container {
            background: #fff;
            padding: 20px;
            border: 1px solid #e1e1e1;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 0 auto;
        }

        .banner img {
            width: 100%;
            max-height: 150px;
            object-fit: cover;
            margin-bottom: 20px;
        }

        .header {
            text-align: center;
            border-bottom: 2px solid #ddd;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .header .title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 5px;
            color: #007BFF;
        }

        .header .date {
            font-size: 14px;
            color: #777;
        }

        h3 {
            background: #007BFF;
            color: #fff;
            padding: 10px;
            margin: 0 0 20px;
            font-size: 18px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table th,
        table td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        table th {
            background-color: #f2f2f2;
            text-align: left;
        }

        table tr:nth-child(even) {
            background-color: #fafafa;
        }

        .total {
            text-align: right;
            font-size: 18px;
            font-weight: bold;
            padding: 10px;
            border-top: 2px solid #ddd;
        }

        .customer-info table td {
            vertical-align: top;
        }
        
    </style>
<!-- <style>
    {!! file_get_contents(public_path('assets/css/black-dashboard copy.css')) !!}
</style> -->

    



</head>

<body>
    <div class="container">
        <!-- Banner de imagen -->
        <div class="banner">
            <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('assets/img/img_factura.png'))) }}" alt="Banner de facturación">
        </div>
        <div class="header">
            <div class="title">Gracias por elegirnos. <br> Prepárate para lucir un piercing único que resalte tu estilo. ¡Nos vemos pronto!</div>
            <div class="date">Fecha: {{  $sale->created_at }}</div>
        </div>

        <h3>Información de la Venta</h3>
        <div class="customer-info">
            <table>
                <tr>
                    <td><strong>Nombre Cliente:</strong></td>
                    <td>{{ $sale->Nombre_Cliente }}</td>
                    <td><strong>Apellido Cliente:</strong></td>
                    <td>{{ $sale->Apellido_Cliente }}</td>
                </tr>
                <tr>
                    <td><strong>Dirección Cliente:</strong></td>
                    <td>{{ $sale->Direccion_Cliente }}</td>
                    <td><strong>Ciudad Cliente:</strong></td>
                    <td>{{ $sale->Ciudad_Cliente }}</td>
                </tr>
                <tr>
                    <td><strong>Departamento Cliente:</strong></td>
                    <td>{{ $sale->Departamento_Cliente }}</td>
                    <td><strong>Teléfono Cliente:</strong></td>
                    <td>{{ $sale->Telefono_Cliente }}</td>
                </tr>
                <tr>
                    <td><strong>Correo Cliente:</strong></td>
                    <td>{{ $sale->Correo_Cliente }}</td>
                    <td><strong>Usuario:</strong></td>
                    <td>{{ $sale->user->name }} {{ $sale->user->last_name }}</td>
                </tr>
                <tr>
                    <td><strong>Estado:</strong></td>
                    <td colspan="3">{{ $sale->status->name }}</td>
                </tr>
            </table>
        </div>

        <h3>Detalles de la Venta</h3>

        @if ($sale->details->isNotEmpty())
        <table>
            <thead>
                <tr>
                    <th>IMG</th>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio Unitario</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sale->details as $detail)
                <tr>
                    <td class="text-center">
                        @if ($detail->product && !empty($detail->product->imagen) && $detail->product->imagen != 0)
                        <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('storage/' . $detail->product->imagen))) }}" alt="Imagen del producto" style="width: 20%; height: auto;">
                        @else
                        <span class="text-muted">N/A</span>
                        @endif
                    </td>


                    <td>{{ $detail->product->nombre ?? 'Sin nombre' }}</td>
                    <td>{{ $detail->cantidad }}</td>
                    <td>{{ number_format($detail->precio, 2) }}</td>
                    <td>{{ number_format($detail->sub_total, 2) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="total">
            Total: {{ number_format($sale->details->sum('total'), 2) }}
        </div>
        @else
        <p>No hay detalles de venta disponibles.</p>
        @endif
    </div>

    
</body>

</html>