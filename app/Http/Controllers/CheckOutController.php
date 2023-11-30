<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CheckOut;

class CheckOutController extends Controller
{
    public function login(){
		return view('loginCart');
	}
	
	public function verifyUser(Request $request){
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
			} else {
				$valid = false;
			}
			
			if($valid == true){
				return view('itemList', ['id' => $id, 'username' => $username]);
			}
		}
		
		if($valid == false){
			return redirect()->route('checkout.user')->with('failure', 'Illegal Access. Please Make An Account First.');
		}
	}
	
	public function checkoutitems(Request $request){
		$transactionID = $request->input('forcheckout');
		
		$items = '';
		$totalamount = 0;
		$date = date('Y-m-d');
		$delivery = date('Y-m-d', strtotime($date. ' + 3 days'));
		
		$data = DB::table('transactions')->get();
		
		for($i = 0; $i < count($transactionID); $i++){
			$ids[$i] = $transactionID[$i];
		}
		
		foreach($data as $transact){
			$id = $transact->id;
			
			for($j = 0; $j < count($ids); $j++){
				if($id == $ids[$j]){
					$username = $transact->username;
					
					$userdata = DB::table('users')->get();
					
					foreach($userdata as $userd){
						$userid = $userd->id;
						$usern = $userd->username;
						
						if($usern == $username){
							$user_id = $userid;
						}
						
					}
					
					$item = $transact->product_name;
					$amount = $transact->amount;
					
					$items .= $item.', ';
					$totalamount += $amount;
					DB::table('transactions')->where('id', '=', $id)->delete();
				}
			}
		}
		
		DB::table('check_outs')->insert([
			'items' => $items,
			'user_id' => $user_id,
			'totalamount' => $totalamount,
			'delivery' => $delivery
		]);
		
		return redirect()->route('index')->with('success', 'Check Out Complete. Total amount: '.$totalamount);
		
	}
	
}
