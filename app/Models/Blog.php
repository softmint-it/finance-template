<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
protected $table = 'blogs';
protected $fillable = ['title', 'slug', 'meta_description','meta_keywords','content', 'temp_img', 'main_img', 'category', 'status','custom_page','published_at','url'];

protected $casts = [
    'published_at' => 'datetime',
];
}