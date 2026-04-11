<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
     protected $fillable=['name','photo','slug','about','description','images','video_url','phone','address','email','is_active'];
        protected $casts = [
        'images' => 'array',
        'is_active' => 'boolean',
        
    ];
}
