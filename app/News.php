<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public function author()
    {
        return $this->hasOne(User::class, 'id', 'author_id');
    }

    public function category()
    {
        return $this->belongsToMany(Category::class);
    }
}
