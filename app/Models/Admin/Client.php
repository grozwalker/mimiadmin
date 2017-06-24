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
        'pk',
        'wherefrom_id'
    ];

    public function orders()
    {
        return $this->hasMany('App\Models\Admin\Order');
    }

    /**
     * Get the category which good belongs to
     */
    public function wherefrom()
    {
        return $this->belongsTo('App\Models\Admin\WhereFromClients');
    }

    /**
     * Возвращаем только тех, чьи ДР сегодня
     * @param $query
     * @return mixed
     */
    public function scopeHaveBirthday($query){
        return $query->whereDay('birthday', Carbon::now()->day)
            ->whereMonth('birthday', Carbon::now()->month);
    }

}
