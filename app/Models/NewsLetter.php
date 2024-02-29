<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsLetter extends Model
{
    protected $fillable = ['name', 'message'];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'news_letter_categories');
    }
}


