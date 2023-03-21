<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationRequest;
use App\Managers\ReservationsManager;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ReservationController extends Controller
{
    public function __construct(protected ReservationsManager $manager)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $reservations=$this->manager->getUserReservations($request->email);
        return view('user.reservations.index', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReservationRequest $request)
    {
        $this->manager->CreateReservation($request);
        return Redirect::back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        return view('user.reservations.edit', compact('reservation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReservationRequest $request, Reservation $reservation)
    {
        $this->manager->UpdateReservation($request, $reservation);
        return Redirect::route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        $this->manager->deleteReservation($reservation);
        return redirect()->back();
    }
}
