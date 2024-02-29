<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    public function newsletters()
    {
        return $this->belongsToMany(NewsLetter::class, 'news_letter_categories');
    }
}
