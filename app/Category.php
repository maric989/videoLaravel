<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $guarded = ['id'];
    protected $fillable = array('genre');


    public function movie()
    {

        return $this->belongsToMany('App\Movie','movie_category', 'movie_id','category_id');
    }
}
