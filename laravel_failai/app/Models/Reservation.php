<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $rental_id
 * @property Rental $rental
 * @property Carbon $start_date
 * @property Carbon $end_date
 * @property string $child_seat
 * @property string $second_driver
 * @property string $gps
 * @property string $wifi
 * @property string $name_of_renter
 * @property string $email_of_renter
 * @property string $phone_of_renter
 * @property string $message_of_renter
 * @property string $status
 */
class Reservation extends Model
{
    use HasFactory;

    protected $fillable=[
        'rental_id',
        'start_date',
        'end_date',
        'child_seat',
        'second_driver',
        'gps',
        'wifi',
        'name_of_renter',
        'email_of_renter',
        'phone_of_renter',
        'message_of_renter',
        'status'
    ];


    public function rental()
    {
        return $this->belongsTo(Rental::class, 'rental_id');
    }
}
