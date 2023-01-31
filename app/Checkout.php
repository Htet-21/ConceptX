<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    //
    public $table = "prebuild_checkout_payment";
    protected $fillable = [

        'customer_name',
        'gender',
        'birth',
        'cis',
        'grade',
        'phone',
        'name1',
        'nrc1',
        'name2',
        'nrc2',
        'occupation',
        'sibling_num',
        'sibling',
        'guardian',
        'viber',
        'states',
        'address',
        'email',
        'order_id',
        'amount',
        'product_name',
        'total_amount',
        'remark',
        'transaction_status'
    
        ];
}
