<?php

namespace App\Models\Admin;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Admin\Purchase
 *
 * @property int $id
 * @property string $purchase_date
 * @property string $departure_date
 * @property string $arrival_date
 * @property string $buyer_protection
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property int $good_id
 * @property float $price
 * @property int $quantity
 * @property string $link
 * @property-read mixed $purchase_date_format
 * @property-read mixed $purchase_price
 * @property-read \App\Models\Admin\Good $good
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Purchase whereArrivalDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Purchase whereBuyerProtection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Purchase whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Purchase whereDepartureDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Purchase whereGoodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Purchase whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Purchase whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Purchase wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Purchase wherePurchaseDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Purchase whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Purchase whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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

    public function getPurchaseDateFormatAttribute()
    {
        //$this->dateFormat =  Carbon::parse($dateFormat)->format('d.m.Y');
        //return Carbon::parse($this->purchase_date)->format('d.m.Y');
        return $this->quantity;
    }

}
