<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
	
	protected $fillable = ['product_name', 'size', 'username', 'contact', 'address', 'amount', 'payment_method'];
}
