<?php

namespace App\Http\Controllers;

use App\Models\Cash;
use App\Models\Sales;
use App\Models\Employee;
use App\Models\Inventory;
use App\Models\SalesList;
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
            $sale->name = $req['name'];
            $sale->amount=$req->amount;
            if($req->pay_by){
                $sale->cr= 1 ;
            }
            
            $sale->save(); 

            $items = json_decode($req->item_list,true);

        foreach($items as $item ){
            $inventory = Inventory::find($item['inventory_id'])->first();
            $inventory->decrement('remain',$item['qty']);
            $inventory->save();

            
            
            $inv['name'] =$item["name"];
            $inv['price'] =$item['price'];
            $inv['qty'] =$item['qty'];
            $id = Sales::where('name','=',$req['name'])->latest()->first();
           
            $inv['sale_id'] = $id->id;
            SalesList::create($inv);

        }    

        

        if($req->pay_by){
            $cash = new Cash;
            $cash->name = $req['name'];
            $cash->amount=$req->amount;
            $cash->in_out= 1 ;
            $cash->save();

            $addCash = Cash::where('name','=','cashInHand');
            $addCash->increment('amount',$req->amount);

        }

        return redirect('/');
    }


    public function payment(Sales $saleId){

        $saleId->update(['cr' => 1]);
        
        $cash = new Cash;
        $cash->name = $saleId->name;
        $cash->amount=$saleId->amount;
        $cash->in_out= 1 ;
        $cash->save();

        return redirect('/');

    } 

    public function expendSale(Sales $saleId){

        $data=SalesList::where('sale_id', '=' ,$saleId->id)->get(); 
        return view('expend',['data'=>$data]);

    } 

    public function getNameId($req){
        return Employee::where('name','=',$req->name)->first()->value('id');
    }
    public function getInventory($req){
        return Inventory::where('name','=',$req->name)->first();
    }

}
