<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

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
