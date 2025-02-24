<?php

namespace App\Http\Controllers;

use App\Models\ProductStatus;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ProductStatusRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProductStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $productStatuses = ProductStatus::paginate();

        return view('product-status.index', compact('productStatuses'))
            ->with('i', ($request->input('page', 1) - 1) * $productStatuses->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $productStatus = new ProductStatus();

        return view('product-status.create', compact('productStatus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductStatusRequest $request): RedirectResponse
    {
        ProductStatus::create($request->validated());

        return Redirect::route('product-statuses.index')
            ->with('success', 'ProductStatus created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $productStatus = ProductStatus::find($id);

        return view('product-status.show', compact('productStatus'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $productStatus = ProductStatus::find($id);

        return view('product-status.edit', compact('productStatus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductStatusRequest $request, ProductStatus $productStatus): RedirectResponse
    {
        $productStatus->update($request->validated());

        return Redirect::route('product-statuses.index')
            ->with('success', 'ProductStatus updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        ProductStatus::find($id)->delete();

        return Redirect::route('product-statuses.index')
            ->with('success', 'ProductStatus deleted successfully');
    }
}
