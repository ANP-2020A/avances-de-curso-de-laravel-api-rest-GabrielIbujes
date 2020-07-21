<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Comment extends Model
{
    protected $fillable = ['text'];
    public static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub
        static::creating(function ($comment){
            $comment->user_id = Auth::id();
        });
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function article()
    {
        return $this->belongsTo('App\Article');
    }
}
