<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Admin\WhereFromClients
 *
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Admin\Client[] $clients
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\WhereFromClients whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\WhereFromClients whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\WhereFromClients whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\WhereFromClients whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class WhereFromClients extends Model
{
    protected $table = 'clients_wherefrom_type';


    public function clients()
    {
        return $this->hasMany('App\Models\Admin\Client', 'wherefrom_id');
    }
}
