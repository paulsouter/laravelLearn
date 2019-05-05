<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome';
        return view('Pages/index')->with('title', $title);
    }
    public function signIn(){
        $title = 'Welcome';
        return view('Pages/signIn')->with('title', $title);
    }
    // public function products(){
    //     $title = 'Welcome';
    //     return view('Pages/products')->with('title', $title);
    // }
    public function cart(){
        $title = 'Welcome';
        return view('Pages/cart')->with('title', $title);
    }
    public function checkout(){
        $title = 'Welcome';
        return view('Pages/checkout')->with('title', $title);
    }
    public function quantityPurchased(){
        $title = 'Welcome';
        return view('Pages/quantityPurchased')->with('title', $title);
    }

}
