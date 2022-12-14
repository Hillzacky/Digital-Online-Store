<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\menu_item;

class Menu extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Title'
    ];

    // THIS function menu_item TO MAKE RELATHION WITH menu
    public function menu_items()
    {
        return $this->hasMany(menu_item::class);
    }
}
