<?php

namespace App\Http\Controllers;

use App\Http\Requests\RentalRequest;
use App\Managers\CategoriesManager;
use App\Managers\FuelTypesManager;
use App\Managers\GearboxesManager;
use App\Managers\ImagesManager;
use App\Managers\RentalsManager;
use App\Models\Rental;
use Illuminate\Http\Request;

class RentalsController extends Controller
{

    public function __construct(
        protected ImagesManager $manager,
        protected RentalsManager $rentalsManager,
        protected GearboxesManager $gearboxManager,
        protected CategoriesManager $categoriesManager,
        protected FuelTypesManager $fuelTypesManager
    ) {
    }

    public function show(Rental $rental)
    {
        $images = $this->manager->getImages($rental);
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
        $categories = $this->categoriesManager->getCategories();
        $gearboxes = $this->gearboxManager->getGearboxes();
        $fuelTypes = $this->fuelTypesManager->getFuelTypes();
        return view('user.rentals.create', compact('categories', 'gearboxes', 'fuelTypes'));
    }

    public function userRentalsEdit(Rental $rental)
    {
        $images=$this->manager->getImages($rental);
        return view('user.rentals.edit', compact('rental','images'));
    }

    public function userRentalsStore(RentalRequest $request)
    {
        $rental = $this->rentalsManager->createRental($request);
        return redirect()->route('rental.show', $rental);
    }

    public
    function userRentalsUpdate(
        RentalRequest $request,
        Rental $rental
    ) {
        $rental = $this->rentalsManager->updateRental($request, $rental);
        return redirect()->route('rental.show', $rental);
    }

    public function userRentals(Request $request)
    {
        $rentals = $this->rentalsManager->getUserRentals($request->user);
        return view('user.rentals.index', compact('rentals'));
    }

    public function destroy(Rental $rental)
    {
        $this->rentalsManager->deleteRental($rental);
     return redirect()->route('home');
    }
}
