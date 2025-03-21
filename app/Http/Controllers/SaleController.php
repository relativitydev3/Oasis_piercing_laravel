<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\SaleRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $sales = Sale::with('user')->paginate(100); // Limitar a 100 registros por página
    //     return view('sales.index', compact(var_name: 'sales'));
    // }

    public function index(Request $request)
    {
        $query = Sale::query()->with('user');

        // Filtrar por Nombre_Cliente
        if ($nombre = $request->input('nombre')) {
            $query->where('Nombre_Cliente', 'like', '%' . $nombre . '%');
        }

        // Filtrar por estado
        if ($estado = $request->input('estado')) {
            $query->where('estado', 'like', '%' . $estado . '%');
        }

        // Filtrar por Método de Pago
        if ($metodo_pago = $request->input('metodo_pago')) {
            $query->where('Metodo_pago', 'like', '%' . $metodo_pago . '%');
        }

        // Paginar resultados
        $sales = $query->paginate(15);

        return view('sale.index', compact('sales'));
    }
    // Ya no necesitarás el método search si usas esta implementación
    // pero puedes mantenerlo si prefieres implementar ambos métodos
    public function index_sales(Request $request): View
    {
        $sales = Sale::paginate();

        return view('sale.index_sales', compact('sales'))
            ->with('i', ($request->input('page', 1) - 1) * $sales->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $sale = new Sale();
        $users = User::all();
        $products = Product::all();
        $saleDetails = DB::table('sale_details')
            ->where('sale_id', $sale->id)
            ->pluck('cantidad', 'product_id')
            ->toArray();

        $salesStatuses = DB::table('sales_status')->pluck('name', 'id');

        return view('sale.create', compact('sale', 'users', 'products', 'saleDetails', 'salesStatuses'));
    }



    public function store(SaleRequest $request): RedirectResponse
    {
        // 1️⃣ Crear la venta en la tabla sales
        $sale = Sale::create($request->validated());

        // 2️⃣ Obtener los productos seleccionados desde el formulario
        $productosSeleccionados = $request->input('productos', []);

        $totalVenta = 0; // Variable para almacenar el total de la venta

        // 3️⃣ Recorrer los productos seleccionados y guardarlos en sale_details
        foreach ($productosSeleccionados as $productId => $producto) {
            // Verificar si el producto tiene una cantidad válida
            if (!isset($producto['cantidad']) || $producto['cantidad'] <= 0) {
                continue;
            }

            // 4️⃣ Buscar el producto en la base de datos para obtener su precio y stock
            $product = Product::find($productId);

            if (!$product) {
                continue; // Si el producto no existe, saltarlo
            }

            $cantidad = intval($producto['cantidad']);
            $precio = floatval($product->precio);
            $subTotal = $cantidad * $precio;
            $totalVenta += $subTotal; // Acumulando el total

            // 5️⃣ Verificar si hay suficiente stock disponible
            if ($product->stock < $cantidad) {
                return Redirect::route('sales.index')
                    ->with('error', "Stock insuficiente para el producto {$product->nombre}.");
            }

            // 6️⃣ Descontar el stock del producto
            $product->decrement('stock', $cantidad); // Resta la cantidad vendida al stock actual

            // 7️⃣ Guardar el detalle en sale_details
            DB::table('sale_details')->insert([
                'sale_id'   => $sale->id,
                'product_id' => $product->id,
                'cantidad'  => $cantidad,
                'precio'    => $precio,
                'sub_total' => $subTotal,
                'total'     => $totalVenta,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // 8️⃣ Actualizar el total de la venta en la tabla sales
        $sale->update(['total' => $totalVenta]);

        return Redirect::route('sales.index')
            ->with('success', 'Venta creada correctamente y stock actualizado.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $sale = Sale::with(['details.product', 'user', 'status'])->findOrFail($id);
        return view('sale.show', compact('sale'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $sale = Sale::find($id);
        $users = User::all();
        $products = Product::all();
        // Obtener los detalles de la venta
        $saleDetails = DB::table('sale_details')
            ->where('sale_id', $sale->id)
            ->pluck('cantidad', 'product_id')
            ->toArray();

        $salesStatuses = DB::table('sales_status')->pluck('name', 'id');

        return view('sale.edit', compact('sale', 'users', 'products', 'saleDetails', 'salesStatuses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SaleRequest $request, Sale $sale): RedirectResponse
    {
        // 1️⃣ Actualizar la venta en la tabla `sales`
        $sale->update($request->validated());

        // 2️⃣ Obtener los productos ya existentes en la venta con sus cantidades
        $productosAnteriores = DB::table('sale_details')
            ->where('sale_id', $sale->id)
            ->pluck('cantidad', 'product_id')
            ->toArray(); // Recupera los productos con sus cantidades

        // 3️⃣ Obtener los productos seleccionados desde el formulario
        $productosSeleccionados = $request->input('productos', []);
        $totalVenta = 0;

        // 4️⃣ Eliminar los detalles antiguos de `sale_details`
        DB::table('sale_details')->where('sale_id', $sale->id)->delete();

        // 5️⃣ Recorrer los productos seleccionados y ajustar stock si se cambia la cantidad
        foreach ($productosSeleccionados as $productId => $producto) {
            if (!isset($producto['cantidad']) || $producto['cantidad'] <= 0) {
                continue;
            }

            // Buscar el producto para obtener su precio y stock
            $product = Product::find($productId);
            if (!$product) {
                continue; // Si no existe, pasarlo
            }

            $cantidadNueva = intval($producto['cantidad']);
            $precio = floatval($product->precio);
            $subTotal = $cantidadNueva * $precio;
            $totalVenta += $subTotal;

            // Verificar si el producto ya existía antes en la venta
            if (array_key_exists($productId, $productosAnteriores)) {
                $cantidadAnterior = $productosAnteriores[$productId];
                $diferencia = $cantidadNueva - $cantidadAnterior;

                if ($diferencia > 0) {
                    // Si la cantidad nueva es mayor, descontar la diferencia
                    if ($product->stock < $diferencia) {
                        return Redirect::route('sales.index')
                            ->with('error', "Stock insuficiente para el producto {$product->nombre}.");
                    }
                    $product->decrement('stock', $diferencia);
                } elseif ($diferencia < 0) {
                    // Si la cantidad nueva es menor, devolver stock
                    $product->increment('stock', abs($diferencia));
                }
            } else {
                // ✅ Si es un producto nuevo, descontar todo el stock necesario
                if ($product->stock < $cantidadNueva) {
                    return Redirect::route('sales.index')
                        ->with('error', "Stock insuficiente para el producto {$product->nombre}.");
                }
                $product->decrement('stock', $cantidadNueva);
            }

            // Guardar el detalle en `sale_details`
            DB::table('sale_details')->insert([
                'sale_id'   => $sale->id,
                'product_id' => $product->id,
                'cantidad'  => $cantidadNueva,
                'precio'    => $precio,
                'sub_total' => $subTotal,
                'total'     => $totalVenta,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // 6️⃣ Actualizar el total de la venta en `sales`
        $sale->update(['total' => $totalVenta]);

        return Redirect::route('sales.index')
            ->with('success', 'Venta actualizada correctamente.');
    }


    public function destroy($id): RedirectResponse
    {
        Sale::find($id)->delete();

        return Redirect::route('sales.index')
            ->with('success', 'Sale deleted successfully');
    }
}
