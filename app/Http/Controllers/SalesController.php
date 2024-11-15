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
    }

   
    public function addSales(Request $req ){
        $req->validate([
            'name' => 'required',
            'item_list' => 'required',
            'amount' => 'required',
        ]);
        
        $nameId = $this->getNameId($req);

        $sale = new Sales;
            $sale->name = $nameId;
            $sale->amount=$req->amount;
            if($req->pay_by){
                $sale->cr= 1 ;
            }
            
            $sale->save(); 
        

        foreach($req->item_list as $item ){

            $inventory = $this->getInventory($item);
            $inventory->remain = $inventory->remain - $item->qty;
            $inventory->save();

            
            $item->purchase_id = $sale->id;
            SalesList::create($item);

        }    

        

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
