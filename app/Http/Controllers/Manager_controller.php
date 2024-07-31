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
            'price'=>'required',
            'image' => 'required|image|mimes:png,jpg,gif,jpeg|max:2048',
        
        ]);
        $newProduct=product::create($incomingFields);

        $image = $request->image;
        
        if($image)
        {
            $image = time().'.'.$image->getClientOriginalExtension();

            $request->image->move('product',$image);

            $newProduct->image = $image;
        }

        $newProduct->save();

        return redirect()->route('home_display')->with('success','Creation was successful.');
    
    }
    public function display()
    {
        $data = product::all();

        return view('manager.mhome',['table_data' => $data]);
    }

    public function update_page(product $id)
    {
        $data = product::all();

        return view('manager.edit',compact('id'),['Data' => $data]);
    }
    public function update(product $id, Request $request)
    {
        $request->validate([
            'Name'=>'required',
            'description'=>'required',
            'price'=>'required',
        
        ]);

        $id->name = request() ->get('Name');
        $id->description = request() ->get('description');
        $id->price = request() ->get('price');
        $id->image = request()->get('image');

        $id ->save();

        return redirect()->route('home_display')->with('updated','Update was successful.');
    }

    public function delete(product $id)
    {
        $id -> delete();

        return redirect()->route('home_display')->with('deleted','Deletion was successful');

    }

}
