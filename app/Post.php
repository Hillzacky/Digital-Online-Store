<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\ImageUpload;
use App\Instagram;
use App\Category;
use App\Comment;
use App\User;


class Post extends Model
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
    'author_id', 'category_id','Title_ar','Title_en','Title_fr','body_ar','body_en',
    'body_fr','ImageUpload_id','slug','featured','Downloud'
    ];

    // THIS function Category 
     public function Category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    // THIS function User 
    public function User()
    {
        return $this->belongsTo(User::class,'author_id');
    } 

    public function ImageUpload()
    {
        return $this->belongsTo(ImageUpload::class,'ImageUpload_id');
    }

    // THIS function Comment TO MAKE RELATHION
    public function Comments()
    {
        return $this->hasMany('App\Comment');
    }

}
