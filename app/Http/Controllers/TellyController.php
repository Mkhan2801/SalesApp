<?php

namespace App\Http\Controllers;

use App\Models\Cash;
use App\Models\LinkList;
use App\Models\Inventory;
use Illuminate\Http\Request;

class TellyController extends Controller
{
    public function tally(){
        return view('tally');
    }
    
    public function inventoryPage(){
        return view('inventory',);
    }
    
    public function menuAdd(Request $req){
        $input = $req->validate([
            'name' => 'required',
            'price' => 'required',
        ]);
        $id = Inventory::where('name','=',$req->name)->first();
        $input['inventory_id'] = $id->id;
        LinkList::create($input);

        return redirect('/sales');
    }

    public function cashAdd(Request $req){

        $req->validate([
            'name' => 'required',
            'amount' => 'required',
        ]);
        $addCash = Cash::where('name','=','cashInHand');
        $addCash->increment('amount',$req->amount);

        $cash = new Cash;
        $cash->name = $req->name;
        $cash->amount=$req->amount;
        $cash->save();
        return view('tally');
    }


}
