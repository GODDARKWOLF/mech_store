<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;

class CheckoutController extends Controller
{
    public function checkout(){
        return view('checkout.checkout');
    }

    public function purchase(){
        return view('checkout.purchase');
    }

    public function delete(){
        User::truncate();
    }
}
