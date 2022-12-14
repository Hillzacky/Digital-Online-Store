<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Message extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'Subject', 'name','mail','User_id','Message'
    ];

    // THIS function User 
    public function User()
    {
        return $this->belongsTo(User::class,'User_id');
    } 
}
