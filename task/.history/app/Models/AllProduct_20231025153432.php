<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllProduct extends Model
{
    use HasFactory;

    protected $table = 'perfume';
    protected $primaryKey = 'id';
    protected $fillable = [
        'imgurl',
        'perfume_name',
        'price',
        'mili',
        'category_name',
        'fsletter',
        'brand_name',
    ];


    

    
}
