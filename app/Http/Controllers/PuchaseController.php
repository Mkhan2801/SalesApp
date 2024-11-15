<?php

namespace App\Http\Controllers;

use App\Models\Cash;
use App\Models\Purchase;
use App\Models\Inventory;
use Illuminate\Http\Request;

class PuchaseController extends Controller
{
    public function purchasePage(){  
        return  view('bill');
    }


    public function purchaseAdd(Request $req ){
        $req->validate([
            'name' => 'required',
            'item_list' => 'required',
            'amount' => 'required',
        ]);
        
        $purchase = new Purchase;
            $sale->name = $req->name;
            $sale->amount=$req->amount;
            $sale->save();      
            
            // add list logic

        $cash = new Cash;
            $cash->name =  $req->name;
            $cash->amount=$req->amount;
            $cash->cr= 0;
            $cash->save();


        foreach($req->item_list as $item ){
            if($this->getInventory($item)){
                $inventory = $this->getInventory($item);
                $inventory->remain = $inventory->remain + $item->qty;
                $inventory->save();
            }   
            else{
                Inventory::create($item);
            } 

            $item->purchase_id = $purchase->id;
            PurchaseList::create($item);

        }

        return redirect('/purchase');    

    }


    public function getInventory($req){
        return Inventory::where('name','=',$req->name)->first();
    }

}
