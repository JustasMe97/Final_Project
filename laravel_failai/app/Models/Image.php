<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
* @property int $id
* @property string $alt
* @property string $path
* @property int $rental_id
* @property Rental $rental
* @property Carbon $created_at
* @property Carbon $updated_at
 */
class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'alt',
        'path',
        'rental_id',
    ];

    public function rental()
    {
        return $this->belongsTo(Rental::class, 'rental_id');
    }
}
