<?php

namespace App\Managers;

use App\Models\Reservation;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class ReservationsManager
{
    public function getReservations(): Collection
    {
        $reservations = Reservation::query()->with(['rental'])->get();


        return $reservations;
    }
    public function getLatestReservations(): Collection
    {
        $reservations = Reservation::latest()->take(5)->with(['rental'])->get();


        return $reservations;
    }
    public function getUserReservations(string $email): Collection
    {
        $reservations = Reservation::where('email_of_renter', $email)->with(['rental'])->get();


        return $reservations;
    }

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
