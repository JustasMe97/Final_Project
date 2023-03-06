<?php

namespace App\Managers;

use App\Http\Requests\CategoryRequest;
use App\Http\Requests\FuelTypeRequest;
use App\Http\Requests\GearboxRequest;
use App\Models\Category;
use App\Models\FuelType;
use App\Models\Gearbox;
use Illuminate\Database\Eloquent\Collection;

class GearboxesManager
{
    public function getGearboxes(): Collection
    {
        $gearbox = Gearbox::query()->get();

        return $gearbox;
    }

    public function createGearbox(GearboxRequest $request): Gearbox
    {
        $gearbox = Gearbox::create($request->all());

        return $gearbox;
    }

    public function updateGearbox(GearboxRequest $request, Gearbox $gearbox): Gearbox
    {
        $gearbox->update($request->all());
        return $gearbox;
    }

    public function deleteGearbox(Gearbox $gearbox)
    {
        $gearbox->delete();
    }
}
