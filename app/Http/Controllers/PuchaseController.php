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

    public function addBill(){
        return view('bill');
    }

    public function addInventory(Request $req ){
        $req->validate([
            'name' => 'required',
            'name' => 'required',
            'items' => 'required',
            'amount' => 'required',
        ]);
        
        $purchase = new Purchase;
            $sale->name = $req->name;
            $sale->items = $req->items;
            $sale->amount=$req->amount;
            $sale->save();       

        $cash = new Cash;
            $cash->name =  $req->name;
            $cash->amount=$req->amount;
            $cash->cr= 0;
            $cash->save();



        foreach($req->items->all() as $key => $value){
            if($this->getInventory($value['name'])){

                $inventory = $this->getInventory($value['name']);
                $inventory->remain = $inventory->remain + $value['qty'];
                $model->save();
            }   
            else{
                $inventory = new Inventory;
                $inventory = $key;
                $inventory->save();
            }
        }



        return redirect('/');    

    }


}
