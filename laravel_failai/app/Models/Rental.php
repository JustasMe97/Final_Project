<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $brand
 * @property string $model
 * @property string $power
 * @property int $fuel_type_id
 * @property FuelType $fuelType
 * @property int $category_id
 * @property Category $category
 * @property int $gearbox_id
 * @property Gearbox $gearbox
 * @property int $user_id
 * @property User $user
 * @property string $price
 * @property string $year
 * @property string $additional_info
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Rental extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'brand',
        'model',
        'power',
        'fuel_type_id',
        'category_id',
        'gearbox_id',
        'user_id',
        'price',
        'year',
        'additional_info',
    ];

    public function fuelType()
    {
        return $this->belongsTo(FuelType::class, 'fuel_type_id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function gearbox()
    {
        return $this->belongsTo(Gearbox::class, 'gearbox_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function images()
    {
        return $this->hasMany(Image::class, 'rental_id');
    }
    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'rental_id');
    }


}
