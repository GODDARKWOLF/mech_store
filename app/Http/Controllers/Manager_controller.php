<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\Store;
use Illuminate\Http\Request;

class Manager_controller extends Controller
{
    public function index(){
        
        return view ('manager/create');
       
    }



    public function create_product(Request $request){
        $incomingFields=$request->validate([
            'Name'=>'required',
            'description'=>'required',
            'price'=>'required'
        
        ]);
        $newProduct=product::create($incomingFields);
        return redirect('/');


    }

}
