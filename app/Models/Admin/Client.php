<?php

namespace App\Models\Admin;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Admin\Client
 *
 * @property int $id
 * @property string $name
 * @property string $link
 * @property string $phone
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string $surname
 * @property string $note
 * @property string $adress
 * @property string $birthday
 * @property int $pk
 * @property int $wherefrom_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Admin\Order[] $orders
 * @property-read \App\Models\Admin\WhereFromClients $wherefrom
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Client haveBirthday()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Client whereAdress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Client whereBirthday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Client whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Client whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Client whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Client whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Client whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Client wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Client wherePk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Client whereSurname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Client whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Client whereWherefromId($value)
 * @mixin \Eloquent
 */
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
