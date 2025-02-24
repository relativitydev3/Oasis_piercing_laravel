<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\MaterialRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $materials = Material::paginate();

        return view('material.index', compact('materials'))
            ->with('i', ($request->input('page', 1) - 1) * $materials->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $material = new Material();

        return view('material.create', compact('material'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MaterialRequest $request): RedirectResponse
    {
        Material::create($request->validated());

        return Redirect::route('materials.index')
            ->with('success', 'Material created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $material = Material::find($id);

        return view('material.show', compact('material'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $material = Material::find($id);

        return view('material.edit', compact('material'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MaterialRequest $request, Material $material): RedirectResponse
    {
        $material->update($request->validated());

        return Redirect::route('materials.index')
            ->with('success', 'Material updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Material::find($id)->delete();

        return Redirect::route('materials.index')
            ->with('success', 'Material deleted successfully');
    }
}
