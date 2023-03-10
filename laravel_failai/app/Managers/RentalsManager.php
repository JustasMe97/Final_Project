<?php

namespace App\Managers;

use App\Http\Requests\RentalRequest;
use App\Models\Category;
use App\Models\Image;
use App\Models\Rental;
use Illuminate\Database\Eloquent\Collection;

class RentalsManager
{
    public function getRentals(): Collection
    {
        $rentals = Rental::query()->with(['category', 'fuelType', 'gearbox'])->get();


        return $rentals;
    }

    public function createRental(RentalRequest $request): Rental
    {
        $rental = Rental::create($request->all());

        return $rental;
    }

    public function updateRental(RentalRequest $request, Rental $rental): Rental
    {
        $rental->update($request->all());
        return $rental;
    }

    public function deleteRental(Rental $rental)
    {
        $rental->delete();
    }

    public function getRentalsByCategoryWithImages(Category $category): Collection
    {
        $rentals = Rental::where('category_id', $category->id)->with(['category', 'fuelType', 'gearbox'])->get();
        foreach ($rentals as $rental){
            $rental['image']=Image::where('rental_id', $rental->id)->first()->path;
        }
        return $rentals;
    }
}
