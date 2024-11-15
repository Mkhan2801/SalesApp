<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PurchaseList extends Model
{
    use HasFactory;

    protected  $fillable = [
        'purchase_id','name','price','qty'
    ];
}
