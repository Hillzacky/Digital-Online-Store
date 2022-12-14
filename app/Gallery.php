<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\ImageUpload;

class Gallery extends Model
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

     'Title_ar','Title_en','Title_fr','body_ar','body_en','body_fr','ImageUpload_id'
     
    ];

    public function ImageUpload()
    {
        return $this->belongsTo(ImageUpload::class,'ImageUpload_id');
    }
}
