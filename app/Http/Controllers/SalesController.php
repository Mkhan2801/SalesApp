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

   
    public function salesAdd(Request $req ){
        
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

           
            
            $items = json_decode($req['item_list'],true);
            return($items);

        foreach($items as $item ){

            $inventory = $this->getInventory($item);
            $inventory->decrement('remain',$item['qty']);
            $inventory->save();

            
            $id = Sales::where('name','=',$req['name'])->latest()->first();
            $item->sale_id = $sale->id;
            SalesList::create($item);

        }    

        

        if($req->pay_by){
            $cash = new Cash;
            $cash->name = $nameId;
            $cash->amount=$req->amount;
            $cash->cr= 1 ;
            $cash->save();

            $addCash = Cash::where('name','=','cashInHand');
            $addCash->increment('amount',$req->amount);

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
