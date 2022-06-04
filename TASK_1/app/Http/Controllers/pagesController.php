<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }
    public function product()
    {
        $products = array("Name: Mango, Quantity: 1 kg, Price: 300TK","Name: Lichi, Quantity: 1 kg, Price: 250TK",
        );
        return view('pages.product')->with('products',$products);
    }
    public function team()
    {
        return view('pages.team');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function contact()
    {
        return view('pages.contact');
    }
}