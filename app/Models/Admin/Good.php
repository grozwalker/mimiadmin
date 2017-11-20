<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Admin\Good
 *
 * @property int $id
 * @property string $name
 * @property int $category_id
 * @property float $price
 * @property int $active
 * @property int $have_photo
 * @property string $description
 * @property string $img
 * @property int $featured
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\Models\Admin\Category $category
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Admin\Order[] $orders
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Admin\Purchase[] $purchases
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Good active()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Good nonActive()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Good whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Good whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Good whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Good whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Good whereFeatured($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Good whereHavePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Good whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Good whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Good whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Good wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Good whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Good extends Model
{
    protected $fillable = ['name', 'price'];

    /**
     * Get the category which good belongs to
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Admin\Category');
    }

    public function purchases()
    {
        return $this->hasMany('App\Models\Admin\Purchase');
    }

    public function orders()
    {
        return $this->belongsToMany('App\Models\Admin\Order', 'goods_orders');
    }

    /**
     * Возвращаем все активные товары
     * @param $query
     * @return mixed
     *
     */
    public function scopeActive($query){
        return $query->where('active', 1);
    }

    /**
     * Возвращаем все НЕактивные товары
     * @param $query
     * @return mixed
     *
     */
    public function scopeNonActive($query){
        return $query->where('active', 0);
    }

    public static function getGoodsList()
    {
        $categories = Category::with('goods')->get();

        $goodsList = [];
        foreach ($categories as $category){
            foreach ($category->goods as $good){
                $goodsList[$category->name][$good->id] = $good->name;
            }
        }


        $goodsList = array_merge(["" => ""], $goodsList);

        return $goodsList;
    }
}
