<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Songs extends Model
{
    protected $tabel = 'songs';
    protected $fillable = ['lyrics'];
}
