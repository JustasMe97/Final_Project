<?php

namespace App\Managers;

use App\Models\Reservation;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class ReservationsManager
{
//    public function getCategories(): Collection
//    {
//        $rentals = Category::query()->with(['parent'])->get();
//
//
//        return $rentals;
//    }

//    public function getCategoryById($category_id): Category
//    {
//        $category = Category::where('id', $category_id)->with(['parent'])->first();
//
//
//        return $category;
//    }
    public function createReservation(Request $request): Reservation
    {
        $reservation = Reservation::create($request->all());

        return $reservation;
    }

//    public function updateCategory(CategoryRequest $request, Category $category): Category
//    {
//        $category->update($request->all());
//        return $category;
//    }

//    public function deleteCategory(Category $category)
//    {
//        $category->delete();
//    }
}
