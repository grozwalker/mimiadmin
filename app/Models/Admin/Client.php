<?php

namespace App\Models\Admin;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name',
        'surname',
        'link',
        'phone',
        'adress',
        'note',
        'birthday',
        'pk'
    ];

    public function orders()
    {
        return $this->hasMany('App\Models\Admin\Order');
    }

    /**
     * Возвращаем только тех, чьи ДР сегодня
     * @param $query
     * @return mixed
     */
    public function scopeHaveBirthday($query){
        return $query->where('birthday', Carbon::now()->format('Y.m.d'));
    }

}
