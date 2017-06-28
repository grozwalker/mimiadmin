<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = [
        'good_id',
        'price',
        'quantity',
        'link',
        'purchase_date',
        'departure_date',
        'arrival_date',
        'buyer_protection',
        'created_at',
        'updated_at'
    ];

    public function good()
    {
        return $this->belongsTo('App\Models\Admin\Good');
    }

    /**
     * Общая сумма закупок
     * @return mixed
     */
    public function getPurchasePriceAttribute() {
        return $this->quantity * $this->price;
    }
}
