<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Cviebrock\EloquentSluggable\Sluggable;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\ImageUpload;
use App\Comment;
use App\Favourite; 

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;
    use Sluggable;
     /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','Phone','email','ImageUpload_id','password','slug'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function ImageUpload()
    {
        return $this->belongsTo(ImageUpload::class,'ImageUpload_id');
    }

    // THIS function Comment TO MAKE RELATHION
    public function Comments()
    {
        return $this->hasMany('App\Comment');
    }

    // THIS function Favourites TO MAKE RELATHION
    public function Favourites()
    {
        return $this->hasMany('App\Favourite');
    }

    
   
}
