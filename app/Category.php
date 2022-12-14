<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Post;
use App\User;


class Category extends Model
{

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
                'source' => 'Title_en'
            ]
        ];
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'parent_id', 'order', 'Title_ar','Title_en','Title_fr','slug','color'
    ];

    // THIS function Posts
    public function Posts()
    {
        return $this->hasMany(Post::class);
    }
}
