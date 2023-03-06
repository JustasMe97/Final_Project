<?php

namespace App\Managers;

use App\Http\Requests\CategoryRequest;
use App\Http\Requests\FuelTypeRequest;
use App\Models\Category;
use App\Models\FuelType;
use Illuminate\Database\Eloquent\Collection;

class FuelTypesManager
{
    public function getFuelTypes(): Collection
    {
        $fuelTypes = FuelType::query()->get();

        return $fuelTypes;
    }

    public function createFuelType(FuelTypeRequest $request): FuelType
    {
        $fuelType = FuelType::create($request->all());

        return $fuelType;
    }

    public function updateFuelType(FuelTypeRequest $request, FuelType $fuelType): FuelType
    {
        $fuelType->update($request->all());
        return $fuelType;
    }

    public function deleteFuelType(FuelType $fuelType)
    {
        $fuelType->delete();
    }
}
