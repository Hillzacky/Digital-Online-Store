<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Menu;


class menu_item extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'menu_id', 'order', 'Title_en','Title_ar','Title_fr','url','target'
    ];
   
    // THIS function Menu TO MAKE RELATHION Post 
     public function Menu()
    {
        return $this->belongsTo(Menu::class,'menu_id');
    }
}