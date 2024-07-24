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
        return redirect('/');
    
    }
    public function display()
    {
        $data = product::all();

        return view('manager.mhome',['table_data' => $data]);
    }

    public function update_page(product $id)
    {
        $data = product::all();

        return view('edit',compact($id),['Data' => $data]);
    }
    public function update(product $id)
    {

    }

    public function delete(product $id)
    {
        $id->delete();

        return redirect('manager.mhome')->with('Success',"Item deleted.");

    }

}
