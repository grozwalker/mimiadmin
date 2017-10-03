<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'client_id',
        'date',
        'prepaid_amount',
        'issue_place',
    ];

    public function client()
    {
        return $this->belongsTo('App\Models\Admin\Client');
    }

    public function goods()
    {
        return $this->belongsToMany('App\Models\Admin\Good', 'goods_orders')
            ->withPivot('order_price', 'count')
    	    ->withTimestamps();
    }
}
