<?php

namespace App\Managers;

use App\Http\Requests\CategoryRequest;
use App\Http\Requests\FuelTypeRequest;
use App\Http\Requests\GearboxRequest;
use App\Models\Category;
use App\Models\FuelType;
use App\Models\Gearbox;
use App\Models\Image;
use Illuminate\Database\Eloquent\Collection;

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
}
