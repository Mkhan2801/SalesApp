<?php

namespace App\Http\Controllers;

use App\Models\Cash;
use App\Models\Purchase;
use App\Models\Inventory;
use App\Models\PurchaseList;
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
            $purchase->name = $req->name;
            $purchase->amount=$req->amount;
            $purchase->save();      
            
        $cash = new Cash;
            $cash->name =  $req->name;
            $cash->amount=$req->amount;
            $cash->in_out= 0;
            $cash->save();

            $addCash = Cash::where('name','=','cashInHand');
            $addCash->decrement('amount',$req->amount);
        $list = explode(",",$req->item_list);

        
        $items = json_decode($req->item_list,true);
        foreach($items as $item){
            if($this->getInventory($item)){
                $inventory = $this->getInventory($item);
                $inventory->increment('remain',$item['qty']);
                $inventory->save();
            }   
            else{
                $inv['name'] =$item["name"];
                $inv['price'] =$item['price'];
                $inv['remain'] =$item['qty'];
                Inventory::create($inv);
            } 
            $inventory = $this->getInventory($item);
            
            $inv['name'] =$item["name"];
            $inv['price'] =$item['price'];
            $inv['qty'] =$item['qty'];
            $id = Purchase::where('name','=',$req['name'])->latest()->first();
            $inv['purchase_id'] = $id->id;
            PurchaseList::create($inv);



        }

        return redirect('/purchase');    

    }


    public function expendPur(Purchase $purchaseId){

        $data=purchaseList::where('purchase_id', '=' ,$purchaseId->id)->get(); 
        return view('expend',['data'=>$data]);

    } 

    public function getInventory($req){
        return Inventory::where('name','=',$req['name'])->first();
    }

}
