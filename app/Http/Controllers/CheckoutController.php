<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout(){
        return view('checkout.checkout');
    }

    public function purchase(){
        return view('checkout.purchase');
    }

    public function delete(){
        
    }
}
