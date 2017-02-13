<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategorija extends Model
{
    protected $table = 'kategorijeSadrzaja';

    protected $fillable = ['naziv'];
}
