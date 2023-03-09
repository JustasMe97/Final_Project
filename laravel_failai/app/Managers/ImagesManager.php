<?php

namespace App\Managers;

use App\Http\Requests\CategoryRequest;
use App\Http\Requests\FuelTypeRequest;
use App\Http\Requests\GearboxRequest;
use App\Models\Category;
use App\Models\FuelType;
use App\Models\Gearbox;
use App\Models\Image;
use App\Models\Rental;
use Illuminate\Database\Eloquent\Collection;
use mysql_xdevapi\CollectionRemove;

class ImagesManager
{
    public function createImage($imageFile, $rental): Image
    {
        $data= new Image();

            $file= $imageFile;
            $filename= $file->getClientOriginalName();
            $file-> move(public_path('img'), $filename);
            $data['path']= $filename;
            $data['alt']=$filename;
            $data['rental_id']=$rental->id;

        $data->save();

        return $data;
    }
    public function getImages(Rental $rental): Collection
    {
        $images= Image::where('rental_id', $rental->id)->get();
        return $images;
    }
}
