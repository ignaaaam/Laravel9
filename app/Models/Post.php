<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Attributes\SearchUsingFullText;
use Laravel\Scout\Searchable;

class Post extends Model
{
    use HasFactory, Searchable;

    #[SearchUsingFullText('body')]
    public function toSearchableArray()
    {
        return [
          'title' => $this->title,
            'body' => $this->body
        ];
    }
}
