<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Allow mass assignment for these fields
    protected $primaryKey = 'id';
    protected $table = 'products';
    protected $fillable = [
        'name',
        'description',
        'price',
    ];
}
