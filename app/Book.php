<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'nama', 'penulis', 'halaman','tahun_terbit'
    ];
}
