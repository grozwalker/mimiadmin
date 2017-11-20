<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Admin\Order
 *
 * @property int $id
 * @property string $date
 * @property int $client_id
 * @property float $prepaid_amount
 * @property string $issue_place
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\Models\Admin\Client $client
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Admin\Good[] $goods
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Order whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Order whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Order whereIssuePlace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Order wherePrepaidAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Order whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
