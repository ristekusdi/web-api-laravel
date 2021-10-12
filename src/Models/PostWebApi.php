<?php

namespace Ristekusdi\WebApiLaravel\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostWebApi extends Model
{
    use HasFactory;

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
