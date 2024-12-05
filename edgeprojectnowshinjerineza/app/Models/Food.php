<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Food extends Model
{
    use HasFactory;

    // Define the fillable attributes
    protected $fillable = [
        'name',        // Allow mass assignment for 'name'
        'description', // Allow mass assignment for 'description'
        'price',  
        'image',     // Allow mass assignment for 'price'
    ];
}
