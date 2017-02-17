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
}
