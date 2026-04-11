<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membre extends Model
{
    use HasFactory;
        protected $fillable=['name','image','phone','email','role','message','twitter','facebook','linkedin','instagram','tiktok','youtube','website','is_active'];

 protected $casts = [
       
        'is_active' => 'boolean',
        
    ];
        }
