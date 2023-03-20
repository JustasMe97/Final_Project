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

    public function createReservation(Request $request): Reservation
    {
        $reservation = Reservation::create($request->all());

        return $reservation;
    }
}
