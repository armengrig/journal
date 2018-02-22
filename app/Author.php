<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'father_land',
    ];

    public function journals(){

        return $this->belongsToMany('App\Journal', 'journal_author', 'author_id', 'journal_id');
    }
}
