<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * @property int $id
 * @property string $name
 * @property string $country
 * @property string $city
 * @property string $additional_info
 * @property int $user_id
 * @property User $user
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'country',
        'city',
        'additional_info',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
