<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function product()
    {
        $product=['Marble_Piano', 'Marble_Tangram', 'Marbel_Dinosaurus'];
        return view('product', ['product' => $product]);
    }
    public function news()
    {
        return view ('news', ['id' => $id]);
    }
}
