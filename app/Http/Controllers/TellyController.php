<?php

namespace App\Http\Controllers;

use App\Models\Cash;
use Illuminate\Http\Request;

class TellyController extends Controller
{
    public function tally(){
        return view('tally');
    }
    
    public function inventoryPage(){
        return view('inventory',);
    }
    
    public function linkItem(){

        
        return view('inventory');
    }


}
