<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farmer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','contact','location','country','selling_price','no_kgs','vehicle_no','driver_name',
        'driver_contact','date_of_buying'
    ];
}
