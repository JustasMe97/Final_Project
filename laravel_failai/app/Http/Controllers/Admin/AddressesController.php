<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddressRequest;
use App\Managers\AddressesManager;
use App\Models\Address;
use Illuminate\Http\Request;

class AddressesController extends Controller
{
    public function __construct(protected AddressesManager $addressesManager)
    {
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $addresses = $this->addressesManager->getAddresses();
        return view('admin.addresses.index', compact('addresses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.addresses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddressRequest $request)
    {
        $address=$this->addressesManager->createAddress($request);
        return redirect()->route('addresses.show', $address);
    }

    /**
     * Display the specified resource.
     */
    public function show(Address $address)
    {
        return view('admin.addresses.show', compact('address'));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(Address $address)
    {
        return view('admin.addresses.edit', compact('address'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AddressRequest $request, Address $address)
    {
        $address=$this->addressesManager->updateAddress($request, $address);
        return redirect()->route('addresses.show', $address);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Address $address)
    {
        $this->addressesManager->deleteAddress($address);
        return redirect()->route('addresses.index');
    }
}
