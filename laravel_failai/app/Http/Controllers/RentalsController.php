<?php

namespace App\Http\Controllers;

use App\Http\Requests\RentalRequest;
use App\Managers\ImagesManager;
use App\Managers\RentalsManager;
use App\Models\Rental;
use Illuminate\Http\Request;

class RentalsController extends Controller
{

    public function __construct(protected ImagesManager $manager,
        protected RentalsManager $rentalsManager)
    {

    }
    public function show(Rental $rental) {
        $images=$this->manager->getImages($rental);
        return view('public.rental.show', compact('rental', 'images'));
    }

    public function index()
    {
        return view('public.rentals');
    }

    public function create()
    {
//        return view('user.rentals.create');
    }

    public function userRentalsCreate()
    {
        return view('user.rentals.create');
    }
    public function userRentalsEdit(Rental $rental)
    {
        return view('user.rentals.edit', compact('rental'));
    }

    public function userRentalsStore(RentalRequest $request)
    {
        $rental = $this->rentalsManager->createRental($request);
        if ($request->file('images')) {
            foreach ($request->file('images') as $imagefile) {
                $this->manager->createImage($imagefile, $rental);
            }
        }
        return redirect()->route('user.rentals', $rental);
    }

    public
    function userRentalsUpdate(RentalRequest $request, Rental $rental) {
        $rental = $this->rentalsManager->updateRental($request, $rental);
        if ($request->file('images')) {
            foreach ($request->file('images') as $imagefile) {
                $this->manager->createImage($imagefile, $rental);
            }
        }
        return redirect()->route('user.rentals', $rental);
    }

    public function userRentals(Request $request) {
        $rentals=$this->rentalsManager->getUserRentals($request->user);
        return view('user.rentals.index', compact('rentals'));
    }
}
