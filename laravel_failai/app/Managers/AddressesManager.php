<?php

namespace App\Managers;

use App\Http\Requests\AddressRequest;
use App\Http\Requests\CategoryRequest;
use App\Models\Address;
use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;

class AddressesManager
{
    public function getAddresses(): Collection
    {
        $addresses = Address::query()->with(['user'])->get();


        return $addresses;
    }

    public function createAddress(AddressRequest $request): Address
    {
        $address = Address::create($request->all());

        return $address;
    }

    public function updateAddress(AddressRequest $request, Address $address): Address
    {
        $address->update($request->all());
        return $address;
    }

    public function deleteAddress(Address $address)
    {
        $address->delete();
    }
}
