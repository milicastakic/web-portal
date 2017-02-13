<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'objave';

    protected $fillable = [
        'naziv', 'tekst', 'slika', 'kategorijaId',
    ];
}

