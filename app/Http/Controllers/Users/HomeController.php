<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('is_admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [];
        $data['products'] = auth()->user()->products->count();
        return view('home',compact('data'));
    }

    public function transactions(Request $request,$id){
        $product = Product::find($id);

        return view('user.transactions',compact('product'));
    }
    public function allTransactions(Request $request){
        $user = auth()->user();

        return view('user.allTransactions',compact('user'));
    }
}
