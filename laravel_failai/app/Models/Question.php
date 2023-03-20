<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $wmessage
 */
class Question extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'email',
        'phone',
        'message',
    ];

}
