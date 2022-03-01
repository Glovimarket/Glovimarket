<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'id',
        'amount',
        'name',
        'value',
        
    ];
}
