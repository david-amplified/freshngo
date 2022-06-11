<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function index()
    {
        return 'Product Page';
    //     $data= Product::all();

    //    return view('product',['products'=>$data]);
    }
}
