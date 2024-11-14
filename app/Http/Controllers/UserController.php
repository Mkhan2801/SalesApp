<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Inventory;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function Index(){
        if(auth()->check()){
            $user = auth()->user();
             $name=$user['name'];
        $inventory = Inventory::all();
        $employee= Employee::all();
        return view('Index')->with(['inventory'=>$inventory,'employee'=>$employee]);
        }else{
            
            // Excel::import(new EmployeeImport, 'C:\Users\Mobin Khan\Desktop\Book1.xlsx');
            return view('loginPage');
        }
    }


    public function employee(){
        
        
        return ['data'=>$data];
    }

 
    public function employeePage(){
        return view('employeePage');
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
