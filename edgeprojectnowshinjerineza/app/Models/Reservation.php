<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory;

    // Specify the table if it differs from the default (e.g., 'reservations')
    protected $table = 'reservations';

    // Define the fillable attributes
    protected $fillable = [
        'name',
        'email',
        'phone',
        'reservation_date',
        'message',
    ];
}
