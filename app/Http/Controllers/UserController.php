<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function login(Request $request){
		$product = $request->input('product');
		$amount = $request->input('amount');
		return view('login', ['product' => $product, 'amount' => $amount]);
	}
	
	public function register(){
		return view('register');
	}
	
	public function shop(){
		return view('shop');
	}
	
	public function store(Request $request){
		
		$request->validate([
			'username' => 'required',
			'name' => 'required',
			'contact' => 'required',
			'address' => 'required',
			'password' => 'required',
		]);
		
		User::create($request->all());
		
		return view('index');
	}
	
	public function verify(Request $request){
		$product = $request->input('product');
		$amount = $request->input('amount');
		$username = $request->input('username');
		$password = $request->input('password');
		$valid = false;
		$users = DB::table('users')->get();
		
		foreach($users as $userdb){
			
			$user = $userdb->username;
			$pass = $userdb->password;
			
			if($user == $username && $pass == $password){
				$valid = true;
				$id = $userdb->id;
				$contact = $userdb->contact;
				$address = $userdb->address;
			} else {
				$valid = false;
			}
			
			if($valid == true){
				return view('transact', ['id' => $id, 'product' => $product, 'amount' => $amount, 'username' => $username, 'contact' => $contact, 'address' => $address]);
			}
		}
		
		if($valid == false){
			return redirect()->route('index')->with('failure', 'Illegal Access. Please Make An Account First.');
		}
		
	}
	
}
