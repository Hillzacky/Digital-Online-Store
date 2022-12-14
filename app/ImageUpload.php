<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;


class ImageUpload extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'filename'
    ];
    // THIS function User 
    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
