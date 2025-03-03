<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{

    protected $primaryKey = 'id_artikel';
    protected $table = 'artikel';

    // Kolom yang boleh diisi secara massal
    protected $fillable = [
        'title_artikel',
        'content',
        'category_artikel',
    ];
}
