<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index(){
        return view('frontend/home/home');
    }
    public function product(){
        return view('frontend/product/product');
    }
    public function single(){
        return view('frontend/product-detail/product-detail');
    }
    public function checkout(){
        return view('frontend/checkout/checkout');
    }
    public function cart(){
        return view('frontend/cart/cart');
    }

}
