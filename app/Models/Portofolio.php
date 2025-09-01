<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    use HasFactory;
     protected $fillable = [
        'judul',
        'image',
        'tech_stack',
        'description',
        'link_web',
        'link_github',
    ];
    protected $casts = [
        'tech_stack' => 'array',
    ];
}
