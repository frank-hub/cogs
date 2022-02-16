<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class COGS extends Model
{
    use HasFactory;
    protected $fillable = [
        'buying_price','car_no','kgs','comodity','border_cost','selling_price','kgs_sold_delivered','other_cost',
        'seller_name','seller_balance','buyer_payment_status'
    ];
}
