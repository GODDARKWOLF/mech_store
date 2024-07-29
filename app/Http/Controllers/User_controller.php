<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class User_controller extends Controller
{
    public function display()
    {
        $items = product::all();

        return view('user.uhome',['collection' => $items]);
    }
}
