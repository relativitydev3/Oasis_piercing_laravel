<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;
use App\Models\SalesStatus;
use App\Models\Material;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $products = Product::paginate();
        $categories = Category::all(); // Obtener todas las categorías

        return view('product.index', compact('products', 'categories'))
            ->with('i', ($request->input('page', 1) - 1) * $products->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $product = new Product();
        $categories = Category::all();
        $statuses = SalesStatus::all();
        $materials = Material::all();
    // Depuración
        return view('product.create', compact('product', 'categories', 'statuses', 'materials'));
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request): RedirectResponse
    {

        $validated = $request->validated();
        if ($request->hasFile('imagen')) {
            $imagePath = $request->file('imagen')->store('products', 'public');
            $validated['imagen'] = $imagePath;
        }

        // Convertir estado_id a número
        $validated['estado_id'] = intval($validated['estado_id']);
        $product = Product::create($validated);


        // Sincronizar categorías seleccionadas
        if ($request->has('categories')) {
            $product->categories()->sync($request->categories);
        }

        return Redirect::route('products.index')
            ->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $product = Product::find($id);
        $categories = Category::all(); // Obtener todas las categorías
        $statuses = SalesStatus::all(); // Obtener todos los estados de producto
        return view('product.show', compact('product', 'categories', 'statuses'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $product = Product::find($id);
        $categories = Category::all(); // Obtener todas las categorías
        $statuses = SalesStatus::all(); // Obtener todos los estados de producto
        $materials = Material::all();

        return view('product.edit', compact('product', 'categories', 'statuses', 'materials'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $product): RedirectResponse
    {
        $data = $request->except(['imagen']);

        // Si el usuario subió una nueva imagen, la procesamos
        if ($request->hasFile('imagen')) {
            // Guardamos la imagen en storage y obtenemos la ruta
            $imagenPath = $request->file('imagen')->store('products', 'public');

            // Eliminamos la imagen anterior si existe
            if ($product->imagen && file_exists(public_path('storage/' . $product->imagen))) {
                unlink(public_path('storage/' . $product->imagen));
            }

            // Guardamos la nueva ruta en la base de datos
            $data['imagen'] = $imagenPath;
        }


        // Actualizar el producto con los datos (manteniendo la imagen si no se subió una nueva)
        $product->update($data);

        
        // $product->update($request->validated());
        // Sincronizar categorías seleccionadas
        if ($request->has('categories')) {
            $product->categories()->sync($request->categories);
        } else {
            $product->categories()->sync([]); // Si no se selecciona ninguna, se limpia la relación
        }

     

        return Redirect::route('products.index')
            ->with('success', 'Product updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        // Product::find($id)->delete();
        $product = Product::find($id);

        if ($product->imagen) {
            Storage::disk('public')->delete($product->imagen);
        }




        $product->delete();
        return Redirect::route('products.index')
            ->with('success', 'Product deleted successfully');
    }
}
