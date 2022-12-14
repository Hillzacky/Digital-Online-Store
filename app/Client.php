<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\ImageUpload;
use App\Instagram;
use App\Post;


class Client extends Model
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

     'Title_ar','Title_en','Title_fr','body_ar','body_en','body_fr','ImageUpload_id','slug'
     
    ];

    public function ImageUpload()
    {
        return $this->belongsTo(ImageUpload::class,'ImageUpload_id');
    }

      // THIS function Posts TO MAKE RELATHION
    public function Posts()
    {
        return $this->hasMany('App\Post');
    }

    public function Instagram()
    {
        return $this->belongsTo(Instagram::class,'Instagram_id');
    }
}
