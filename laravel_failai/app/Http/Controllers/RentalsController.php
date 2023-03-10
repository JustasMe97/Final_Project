<?php

namespace App\Http\Controllers;

use App\Managers\ImagesManager;
use App\Models\Rental;
use Illuminate\Http\Request;

class RentalsController extends Controller
{
    public function __construct(protected ImagesManager $manager)
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
}
