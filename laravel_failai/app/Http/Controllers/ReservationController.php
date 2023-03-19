<?php

namespace App\Http\Controllers;

use App\Managers\ReservationsManager;
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
    public function store(Request $request)
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
