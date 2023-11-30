<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function store(Request $request){
		$request->validate([
			'product_name' => 'required',
			'amount' => 'required',
			'username' => 'required',
			'contact' => 'required',
			'address' => 'required',
			'size' => 'required',
			'payment_method' => 'required',
		]);
		
		$transact = DB::table('transactions')->get();
		$id = $transact->count() + 1;
		
		Transaction::create($request->all());
		
		return redirect()->route('index')->with('success', 'Transaction Saved.');
		
	}
	
	public function registerTransact(Request $request){
		$product = $request->input('product');
		$amount = $request->input('amount');
		return view('register', ['product' => $product, 'amount' => $amount]);
	}
	
	public function register(Request $request){
		$product_name = $request->input('product_name');
		$amount = $request->input('amount');
		$username = $request->input('username');
		$name = $request->input('name');
		$contact = $request->input('contact');
		$address = $request->input('address');
		$password = $request->input('password');
		$size = $request->input('size');
		$payment_method = $request->input('payment_method');
		$new = false;
		$message = "";
		
		$users = DB::table('users')->get();
		
		if(User::exists()){
			foreach($users as $user){
				$usernameDB = $user->username;
				
				if($usernameDB == $username){
					$new = false;
				} else {
					$new = true;
				}
			}
			
			if($new == true){
				$date = date('Y-m-d H:i:s');
				
				DB::table('users')->insert([
					'username' => $username,
					'name' => $name,
					'contact' => $contact,
					'address' => $address,
					'password' => $password,
					'created_at' => $date,
					'updated_at' => $date,
				]);
				
				DB::table('transactions')->insert([
					'product_name' => $product_name,
					'amount' => $amount,
					'username' => $username,
					'contact' => $contact,
					'address' => $address,
					'size' => $size,
					'payment_method' => $payment_method,
					'created_at' => $date,
					'updated_at' => $date,
				]);
				
				$transact = DB::table('transactions')->get();
				$id = $transact->count() + 1;
				
				return redirect()->route('index')->with('success', 'User Created, Transaction Made.');
			} else {
				return redirect()->route('index')->with('failure', 'User already created', ['product' => $product_name, 'amount' => $amount]);
			}
		} else {
			$date = date('Y-m-d H:i:s');
			$id = 1;
			
			DB::table('users')->insert([
				'username' => $username,
				'name' => $name,
				'contact' => $contact,
				'address' => $address,
				'password' => $password,
				'created_at' => $date,
				'updated_at' => $date,
			]);
			
			DB::table('transactions')->insert([
				'product_name' => $product_name,
				'amount' => $amount,
				'username' => $username,
				'contact' => $contact,
				'address' => $address,
				'size' => $size,
				'payment_method' => $payment_method,
				'created_at' => $date,
				'updated_at' => $date,
			]);
			
			return redirect()->route('index')->with('success', 'User Created, Transaction Made. Transaction ID: '.$id);
		}
		
	}
	
}
