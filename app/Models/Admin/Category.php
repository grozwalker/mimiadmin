<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Admin\Category
 *
 * @property int $id
 * @property int $parent_id
 * @property string $name
 * @property string $slug
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Admin\Good[] $goods
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Category whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Category whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Category whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = [
        'name'
    ];

    public function goods()
    {
        return $this->hasMany('App\Models\Admin\Good');
    }

}
