<?php

namespace App\Http\Controllers;

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

    public function delete(store $id)
    {
        $id->delete();

        
    }

}
