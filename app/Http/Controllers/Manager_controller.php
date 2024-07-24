<?php

namespace App\Http\Controllers;

use Illuminate\Console\View\Components\Success;
use Illuminate\Http\Request;
use App\Models\store;

class Manager_controller extends Controller
{
    public function index()
    {
        return view('create');
    }
    
    public function store_data()
    {

    }

    public function display()
    {
        $data = store::all();

        return view('manager.mhome',['table_data' => $data]);
    }

    public function update_page(store $id)
    {
        $data = store::all();

        return view('edit',compact($id),['Data' => $data]);
    }
    public function update(store $id)
    {

    }

    public function delete(store $id)
    {
        $id->delete();

        return redirect('manager.mhome')->with('Success',"Item deleted.");
    }

}
