<?php

namespace App\Models;

use App\Enums\PostState;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Attributes\SearchUsingFullText;
use Laravel\Scout\Searchable;

class Post extends Model
{
    use HasFactory, Searchable;

    protected $appends = [
        'path'
    ];




    // NEW LARAVEL 9 WAY
    /*public function path(): Attribute
    {
        return new Attribute(fn() => route('posts.show', $this));
        //return Attribute::get(fn() => route('posts.show', $this));
    }*/


    /* OLDER WAY
     * public function getPathAttribute()
    {
        return route('posts.show', $this);
    }*/



    //ATTRIBUTE CASTING
    /*protected $casts = [
        'state' => PostState::class
    ];*/


    //SEARCHABLE FUNCTION
    /*#[SearchUsingFullText('body')]
    public function toSearchableArray()
    {
        return [
          'title' => $this->title,
            'body' => $this->body
        ];
    }*/
}
