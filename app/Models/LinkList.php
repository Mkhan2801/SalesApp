<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LinkList extends Model
{
    use HasFactory;

    protected  $fillable = [
        'inventory_id','name','price'
    ];
}
