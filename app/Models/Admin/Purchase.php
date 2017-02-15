<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = [
        'good_id',
        'price',
        'quantity',
        'purchase_date',
        'departure_date',
        'arrival_date',
        'buyer_protection',
        'created_at',
        'updated_at'
    ];
}
