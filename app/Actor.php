<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $guarded = ['id'];
    protected $fillable = array('fname','lname');

    public function movie()
    {

        return $this->belongsToMany('App\Movie','movie_category', 'movie_id','actor_id');
    }
}
