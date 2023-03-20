<?php

namespace App\Managers;

use App\Http\Requests\RentalRequest;
use App\Models\Category;
use App\Models\Image;
use App\Models\Rental;
use Illuminate\Database\Eloquent\Collection;

class RentalsManager
{
    public function __construct(protected ImagesManager $manager)
    {
    }

    public function getRentals(): Collection
    {
        $rentals = Rental::query()->with(['category', 'fuelType', 'gearbox'])->get();
        return $rentals;
    }
    public function getUserRentals($id): Collection
    {
        $rentals = Rental::where('user_id', $id)->with(['category', 'fuelType', 'gearbox'])->get();
        return $rentals;
    }

    public function createRental(RentalRequest $request): Rental
    {
        $rental = Rental::create($request->all());
        if ($request->file('images')) {
            foreach ($request->file('images') as $imagefile) {
                $this->manager->createImage($imagefile, $rental);
            }
        }
        return $rental;
    }

    public function updateRental(RentalRequest $request, Rental $rental): Rental
    {
        $rental->update($request->all());
        if ($request->file('images')) {
            foreach ($request->file('images') as $imagefile) {
                $this->manager->createImage($imagefile, $rental);
            }
        }
        return $rental;
    }

    public function deleteRental(Rental $rental)
    {
        $images=$this->manager->getImages($rental);
        foreach ($images as $image){
            $this->manager->destroy($image->id);
        }
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
