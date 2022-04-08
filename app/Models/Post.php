<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // add
    public function getExcerptAttribute()
    {
        return substr($this->content,0,120);
    }

    //cuando fue publicado
    public function getPublishedAtAttribute()
    {
        return $this->created_at->format('d/m/Y');
    }

    public function user()
    {
        return $this->beLongsTo(User::class);
    }
}
