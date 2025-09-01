<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
     use HasFactory;
     protected $fillable = ['name', 'price', 'feature', 'information', 'image'];

    protected $casts = [
        'feature' => 'array', // Laravel otomatis encode/decode JSON
    ];
}
