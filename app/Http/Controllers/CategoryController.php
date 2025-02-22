<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $categories = Category::paginate();

        return view('category.index', compact('categories'))
            ->with('i', ($request->input('page', 1) - 1) * $categories->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $category = new Category();

        return view('category.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request): RedirectResponse
    {

        $validated = $request->validated();
        if ($request->hasFile('imagen')) {
            $imagePath = $request->file('imagen')->store('categories', 'public');
            $validated['imagen'] = $imagePath;
        }

        // Category::create($request->validated());
        Category::create($validated);

        return Redirect::route('categories.index')
            ->with('success', 'Category created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $category = Category::find($id);

        return view('category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {


        $category = Category::find($id);

        return view('category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, Category $category): RedirectResponse
    {

       

        $data = $request->except(['imagen']);
        
                // Si el usuario subió una nueva imagen, la procesamos
                if ($request->hasFile('imagen')) {
                    // Guardamos la imagen en storage y obtenemos la ruta
                    $imagenPath = $request->file('imagen')->store('categories', 'public');
            
                    // Eliminamos la imagen anterior si existe
                    if ($category->imagen && file_exists(public_path('storage/' . $category->imagen))) {
                        unlink(public_path('storage/' . $category->imagen));
                    }
            
                    // Guardamos la nueva ruta en la base de datos
                    $data['imagen'] = $imagenPath;
                }
            
                // Actualizar el producto con los datos (manteniendo la imagen si no se subió una nueva)
                $category->update($data);
        // $category->update($request->validated());

        return Redirect::route('categories.index')
            ->with('success', 'Category updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Category::find($id)->delete();

        return Redirect::route('categories.index')
            ->with('success', 'Category deleted successfully');
    }
}
