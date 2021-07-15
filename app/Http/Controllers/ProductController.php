<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function products(){

        $data = Product::all();
        return view('/products',['products'=>$data]);
    }

    public function detail($id){
        $data =  Product::find($id);
        return view('details',['product' => $data]);
    }

    public function search(Request $req){
       $data = Product::where('name', 'like', '%'.$req->input('query').'%')->get();

       return view('search',['products'=>$data]);

    }
    public function addToCart(Request $req){
                    if(session()->has('user')){

                $cart = new Cart();
                $cart->product_id = $req->product_id;
               
                $cart->user_id = $req->session()->get('user')['id'];
                    $cart->save();
                    return back();
    // return 'hello';

    }
    else
    {
        return redirect('logview');
    }
}
    static function cartItem(){
        if(session()->has('user')){
        $userid = Session::get('user')['id'];
    return Cart::where('user_id',$userid)->count();
        }
        else{
            return redirect('/');
        }
    }
    public function cartList(){
        $userid = Session::get('user')['id'];
        $products = DB::table('carts')
        ->join('products','carts.product_id','=','products.id')
        ->where('carts.user_id',$userid)
        ->select('products.*','carts.id as cart_id')
        ->get();
        // $users = DB::table('carts')
        //     ->join('products', 'carts.product_id', '=', 'products.id')
        //     ->join('orders', 'users.id', '=', 'orders.user_id')
        //     ->select('users.*', 'contacts.phone', 'orders.price')
        //     ->get();

        return view('cartlist',['products'=>$products]);
    }

    public function removeCart($id){
        Cart::destroy($id);
        return back();

    }

    public function orderNow(){

        $userid = Session::get('user')['id'];
        $total = DB::table('carts')
        ->join('products','carts.product_id','=','products.id')
        ->where('carts.user_id',$userid)
        ->sum('products.price');

        return view('ordernow',['total' => $total]);
    }

  
    public function orderPlace(Request $req){
        $userid = Session::get('user')['id'];
        $allCart = Cart::where('user_id',$userid)->get();

        foreach($allCart as $cart){
            $order = new Order();
            $order->product_id = $cart->product_id;
            $order->user_id = $cart->user_id;
            $order->status = "pending";
            $order->payment_method= $req->payment;
            $order->payment_status="pending";
            $order->address= $req->address;
            $order->save();
            Cart::where('user_id',$userid)->delete();
    
        }
        return redirect('/');
    }

    public function myOrders(){

        $userid = Session::get('user')['id'];
        $orders = DB::table('orders')
        ->join('products','orders.product_id','=','products.id')
        ->where('orders.user_id',$userid)
        ->get();

        return view('myorders',['orders' => $orders]);

    }
    public function buyNow($id){
        if(session()->has('user')){
        
        $data =  Product::find($id);
       

        return view('buynowplace',['product' => $data]);

        }

        else{
            return redirect('logview');
        }



    }
    public function buyOrderNow(Request $req){

            $userid = Session::get('user')['id'];

            $order = new Order();
            $order->product_id = $req->product_id;
            $order->user_id = $userid;
            $order->status = "pending";
            $order->payment_method= $req->payment;
            $order->payment_status="pending";
            $order->address= $req->address;
            $order->save();

            return redirect('/');

    }

}