<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //
    protected $guarded = ['id'];
    protected $fillable = array('name','file_path');

    public function category()
    {

        return $this->belongsToMany('App\Category','movie_category', 'movie_id','category_id');
    }

    public function actors()
    {

        return $this->belongsToMany('App\Actor', 'movie_actor','movie_id','actor_id');
    }
}
