<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Objava extends Model
{
    protected $table = 'objave';

    protected $fillable = ['naziv','tekst','slika','nazivKategorije'];
}
