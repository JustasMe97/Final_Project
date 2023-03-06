<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FuelTypeRequest;
use App\Managers\FuelTypesManager;
use App\Models\FuelType;
use Illuminate\Http\Request;

class FuelTypesController extends Controller
{
    public function __construct(protected FuelTypesManager $fuelTypesManager)
    {
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fuelTypes = $this->fuelTypesManager->getFuelTypes();
        return view('admin.fuelTypes.index', compact('fuelTypes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.fuelTypes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FuelTypeRequest $request)
    {
        $fuelType=$this->fuelTypesManager->createFuelType($request);
        return redirect()->route('fuelTypes.show', $fuelType);
    }

    /**
     * Display the specified resource.
     */
    public function show(FuelType $fuelType)
    {
        return view('admin.fuelTypes.show', compact('fuelType'));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(FuelType $fuelType)
    {
        return view('admin.fuelTypes.edit', compact('fuelType'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FuelTypeRequest $request, FuelType $fuelType)
    {
        $fuelType=$this->fuelTypesManager->updateFuelType($request, $fuelType);
        return redirect()->route('fuelTypes.show', $fuelType);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FuelType $fuelType)
    {
        $this->fuelTypesManager->deleteFuelType($fuelType);
        return redirect()->route('fuelTypes.index');
    }
}
