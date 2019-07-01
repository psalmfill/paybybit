<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use App\Product;
use App\Transaction;

class AdminController extends Controller
{
    public function __construct()
    {
       
        $this->middleware('auth');
    }

    public function index(){
        $data = [];
        $users = User::all()->count();
        $products = Product::all()->count();
        $completedOrder = Product::where('status','=','completed')->get()->count();
        $pendingOrder = Product::where('status','!=','completed')->get()->count();

        $data['users_count'] = $users;
        $data['products_count'] = $products;
        $data['completed_order_count'] = $completedOrder;
        $data['pending_order_count'] = $pendingOrder;
        $data['user_count'] = $users;

        return view('admin.index', compact('data'));
    }

    public function products(){

        $products = Product::all();

        return view('admin.products',compact('products'));
    }

    public function allTransactions(Request $request){
        $transactions = Transaction::all();

        return view('admin.user.allTransactions',compact('transactions'));
    } 

    public function transactions(Request $request,$id){
        $product = Product::find($id);

        return view('admin.user.transactions',compact('product'));
    }
    public function userTransactions(Request $request,$id){
        $user = user::find($id);

        return view('admin.user.userTransactions',compact('user'));
    }
    public function users(){
        $users = User::all();
        $roles = Role::all();
        
        return view('admin.users',compact('users','roles'));
    }

    public function userProducts(Request $request, $id)
    {
        // $products = Product::where('user_id','=',$id)->get();
        $user = User::find($id);
        

        return view('admin.user.products',compact('user'));
    }


    public function payForProduct(Request $request,$id)
    {
        $product = Product::find($id);

        return view('admin.user.pay',compact('product'));
    }

    public function deposit(Request $request,$id)
    {
        $product = Product::find($id);

        if( $product->balance < $request->amount){
            return redirect()->back()->with('error','Amount is more than the balance');
        }
        
        $product->paid = $this->calulatePaid($product,$request->amount);
        $product->balance = $this->calulateBalance($product);
        $product->status = $this->isPaymentComplete($product);
        if($product->update()){
            $product->transactions()->create(['amount'=>$request->amount]);
            return redirect()->back()->with('message','Deposit successful');
        }
        
    }

    public function updateUserRole(Request $request,$id)
    {
        // dd($request->all());
        $user = User::find($id);
        $user->role_id = $request->role_id;
        if($user->update())

            return redirect()->back()->with('message','User role updated Successfully');
        
        return redirect()->back()->with('error','Failed updating user role');
        
    }
    public function calulateBalance($product)
    {
        return $product->price - $product->paid;
    }

    public function calulatePaid($product,$amount)
    {
        return $product->paid + $amount;
    }

    public function isPaymentComplete($product){
        return $product->paid == $product->price ?'completed':'paying';
    }
}
