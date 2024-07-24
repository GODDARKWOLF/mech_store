<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Console\View\Components\Success;
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
        return redirect()->route('home_display')->with('success','Creation was successful.');
    
    }
    public function display()
    {
        $data = product::all();

        return view('manager.mhome',['table_data' => $data]);
    }

    public function update_page(product $name)
    {
        $data = product::all();

        return view('manager.edit',compact($name),['Data' => $data]);
    }
    public function update(product $name, Request $request)
    {
        $incomingFields=$request->validate([
            'Name'=>'required',
            'description'=>'required',
            'price'=>'required'
        
        ]);
        $name->name = request()->get('Name');
        $name->description = request()->get('description');
        $name->price = request()->get('price');

        $name ->save();

        return redirect()->route('home_display')->with('success','Creation was successful.');
    }

    public function delete(product $name)
    {
        $name -> delete();

        return redirect('manager.mhome')->with('success','Deletion was successful');

    }

}
