<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','slug','description','preview','category_id'];
    public function user()
    {
        return $this->belongsTo("App\User");
    }

    public function Category()
    {
        return $this -> belongsTo("App\Category");
    }

    public function images()
    {
        return $this->hasMany("App\Image");
    }
}