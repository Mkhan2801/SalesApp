<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SalesList extends Model
{
    use HasFactory;

    protected  $fillable = [
        'sale_id','name','price','qty'
    ];

}