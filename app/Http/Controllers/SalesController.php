<?php

namespace App\Http\Controllers;

use App\Models\Cash;
use App\Models\Sales;
use App\Models\Employee;
use App\Models\Inventory;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function salesPage(){ 
        return view('sales'); 
        $data = Sales::all();
        return  view('sals',['data'=>$data]);
    }
    public function salesData(){ 
        return response()
        ->json([]);
    }



    



    public function addSales(Request $req ){
        $req->validate([
            'name' => 'required',
            'item_name' => 'required',
            'qty' => 'required',
            'amount' => 'required',
        ]);
        
        $nameId = $this->getNameId($req);

        $sale = new Sales;
            $sale->name = $nameId;
            $sale->item_name = $this->getInventory($req)->value('id');
            $sale->qty=$req->qty;
            $sale->amount=$req->amount;
            if($req->pay_by){
                $sale->cr= 1 ;
            }
            
            $sale->save(); 
        


        $inventory = $this->getInventory($req);
        $inventory->remain = $inventory->remain - $req->qty;
        $inventory->save();
        

        if($req->pay_by){
            $cash = new Cash;
            $cash->name = $nameId;
            $cash->amount=$req->amount;
            $cash->cr= 1 ;
            $cash->save();

        }

        return redirect('/');
    }


    public function payment(Sales $sale){
        $sale->cr = 1;
        $sale->save();
        
        $cash = new Cash;
        $cash->name = $this->nameId($sale);
        $cash->amount=$req->amount;
        $cash->cr= 1 ;
        $cash->save();

        return redirect('/');

    } 

    public function getNameId($req){
        return Employee::where('name','=',$req->name)->first()->value('id');
    }
    public function getInventory($req){
        return Inventory::where('name','=',$req->name)->first();
    }

}
