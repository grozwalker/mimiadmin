<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class WhereFromClients extends Model
{
    protected $table = 'clients_wherefrom_type';


    public function clients()
    {
        return $this->hasMany('App\Models\Admin\Client', 'wherefrom_id');
    }
}
