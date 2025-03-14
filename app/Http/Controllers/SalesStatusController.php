<?php

namespace App\Http\Controllers;

use App\Models\SalesStatus;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\SalesStatusRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class SalesStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $salesStatuses = SalesStatus::paginate();

        return view('sales-status.index', compact('salesStatuses'))
            ->with('i', ($request->input('page', 1) - 1) * $salesStatuses->perPage());
    }
    public function index_sales(Request $request): View
    {
        $salesStatuses = SalesStatus::paginate();

        return view('sales-index_sales.blade.index', compact('salesStatuses'))
            ->with('i', ($request->input('page', 1) - 1) * $salesStatuses->perPage());
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $salesStatus = new SalesStatus();

        return view('sales-status.create', compact('salesStatus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SalesStatusRequest $request): RedirectResponse
    {
        SalesStatus::create($request->validated());

        return Redirect::route('sales-statuses.index')
            ->with('success', 'SalesStatus created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $salesStatus = SalesStatus::find($id);

        return view('sales-status.show', compact('salesStatus'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $salesStatus = SalesStatus::find($id);

        return view('sales-status.edit', compact('salesStatus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SalesStatusRequest $request, SalesStatus $salesStatus): RedirectResponse
    {
        $salesStatus->update($request->validated());

        return Redirect::route('sales-statuses.index')
            ->with('success', 'SalesStatus updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        SalesStatus::find($id)->delete();

        return Redirect::route('sales-statuses.index')
            ->with('success', 'SalesStatus deleted successfully');
    }
}
