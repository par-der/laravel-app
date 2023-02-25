<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    //указываем какие поля должны быть при массовом заполнении
    protected $fillable = ['title', 'body', 'img', 'slug'];

    //какие поля не должны быть доступны при массовом заполднении
    //protected $guarded = [''];

    //данная модель может иметь несколько комментариев
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    //данная модель может иметь один комментариев
    public function state()
    {
        return $this->hasOne(State::class);
    }

    //данная модель может иметь много комментариев
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
