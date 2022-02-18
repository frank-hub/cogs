<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransitBreakdown extends Model
{
    use HasFactory;
    protected $fillable=['fuel_cost','border_cost','exchange_rate','destination','pickup_location','date']
   ;
}
