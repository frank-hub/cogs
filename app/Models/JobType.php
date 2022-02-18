<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobType extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_name','customer_contact','customer_location','amount_paid','balance','date'
    ];
}
