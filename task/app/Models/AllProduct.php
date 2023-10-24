<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllProduct extends Model
{
    use HasFactory;

    protected $table = 'all_products';
    protected $primaryKey = 'id';
    protected $fillable = [
        'photo',
        'name',
        'stock',
        'price',
        'categorary',
        'order',
        'date'
    ];


    

    
}
