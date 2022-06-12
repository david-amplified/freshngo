<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Cart;
Use Session;

class ProductController extends Controller
{
    //
    function index()
    {
        $data = Product::all();

        return view('product',['products'=>$data]);
    }

    function detail($id)
    {
        $data = Product::find($id);
        return view('detail',['product'=>$data]);
    }

    function search(Request $req)
    {
        $data = Product::where('name','LIKE', '%'. $req->input('query'). '%')->get();
        return view('search',['products'=>$data]);
    }

    function addToCart(Request $req)
    {

        // need to add the ablilty to have more than one item in the cart
        
        if($req->session()->has('user'))
        {
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->quantity =   $req->quantity;
            $cart->complete = '0';
            $cart->save();

            return "Added";
            //give the option to go to cart or continue
        
        }    else {
            return redirect('/login');
        }
    }

    function cartItem(){

        $user_id = Session()->get('user')['id'];
        $total = Cart::where('user_id', $user_id)->count();

        return $total;

    }

    function cartList()
    {
        $userId=Session::get('user')['id'];
         $products= DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')
        ->get();

        return view('cartlist',['products'=>$products]);
    }
}
