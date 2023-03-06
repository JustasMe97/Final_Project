<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RentalRequest;
use App\Managers\RentalsManager;
use App\Models\Rental;

class RentalsController extends Controller
{
    public function __construct(protected RentalsManager $rentalsManager)
    {
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rentals = $this->rentalsManager->getRentals();
        return view('admin.rentals.index', compact('rentals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.rentals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RentalRequest $request)
    {
        $rental=$this->rentalsManager->createRental($request);
        return redirect()->route('rentals.show', $rental);
    }

    /**
     * Display the specified resource.
     */
    public function show(Rental $rental)
    {
        return view('admin.rentals.show', compact('rental'));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(Rental $rental)
    {
        return view('admin.rentals.edit', compact('rental'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RentalRequest $request, Rental $rental)
    {
        $rental=$this->rentalsManager->updateRental($request, $rental);
        return redirect()->route('rentals.show', $rental);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rental $rental)
    {
        $this->rentalsManager->deleteRental($rental);
        return redirect()->route('rentals.index');
    }
}
