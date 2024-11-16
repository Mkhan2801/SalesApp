<?php

namespace App\Http\Controllers;

use App\Models\Cash;
use App\Models\Sales;
use App\Models\Employee;
use App\Models\LinkList;
use App\Models\Purchase;
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
    public function dataCash(){
        $employee= Cash::all();
        return ['data'=>$employee];
    }
    public function purchaseData(){
        $data= Purchase::all();
        return ['data'=>$data];
    }


    public function salesItems(){
        $data = LinkList::all();
        return ['data'=>$data];
    }

}
