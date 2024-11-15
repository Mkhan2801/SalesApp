<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Inventory;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function Index(){
        if(auth()->check()){

            return view('Index');
        
        }else{
            return view('loginPage');
        }
    }


    public function addEmployee(Request $req ){

        $input = $req->validate([
            'name' => 'required',
            'employee_id' => 'required|unique:employees',
        ]);
        Employee::create($input);
        return redirect('/');
    }

  
   

    public function singIn(Request $req ){
        $input = $req->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        if(auth()->attempt(['name'=> $input['username'],'password'=> $input['password']])){
            $req->session()->regenerate();
            $user = auth()->user();
            return redirect('/');
        }
        else
        {
            return redirect('/')->with('fail','Invaled username or password');
        }
        

    }


    public function singOut(){
        auth()->logout();
        return redirect('/')->with('singOut','You are sucssesfully logged out');
    }

}
