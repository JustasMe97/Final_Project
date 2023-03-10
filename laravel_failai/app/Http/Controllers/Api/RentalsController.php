<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductCollection;
use App\Http\Resources\RentalsCollection;
use App\Models\Image;
use App\Models\Product;
use App\Models\Rental;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RentalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return RentalsCollection
     */
    public function index()
    {
        $rentals = Rental::all();
        foreach ($rentals as $rental){
            $rental['image']=Image::where('rental_id', $rental->id)->first()->path;
            $rental['category_id']=$rental->category->name;
            $rental['fuel_type_id']=$rental->fuelType->name;
            $rental['gearbox_id']=$rental->gearbox->name;
        }
        return new RentalsCollection($rentals);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}

