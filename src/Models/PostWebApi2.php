<?php

namespace Ristekusdi\WebApiLaravel\Models;

use Illuminate\Database\Eloquent\Model;

class PostWebApi2 extends Model
{
    protected $table = 'posts';
    protected $fillable = [
        'id',
        'category_id',
        'slug_ina',
        'slug_eng',
        'judul_ina',
        'judul_eng',
        'konten_ina',
        'konten_eng',
        'image',
        'views',
        'status_id',
        'tgl_publish'
    ];
}
