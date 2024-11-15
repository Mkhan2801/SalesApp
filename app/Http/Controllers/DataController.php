<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use App\Models\Employee;
use App\Models\Inventory;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function employeeData(){
        $employee= Employee::all();
        return ['data'=>$employee];
    }
    public function salesData(){
        $employee= Sales::all();
        return ['data'=>$employee];
    }
    public function inventoryData(){
        $employee= Inventory::all();
        return ['data'=>$employee];
    }
    public function cashData(){
        $employee= Cash::all();
        return ['data'=>$employee];
    }



}
