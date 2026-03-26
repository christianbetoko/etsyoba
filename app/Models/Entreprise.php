<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Entreprise extends Model
{
     use HasFactory;
     protected $fillable = [
        'name',
        'about',
        'slogan',
        'mission',
        'vision',
        'description',
        'address',
        'phone',
        'email',
        'website',
        'logo_sans_fond',
        'logo_fond_noir',
        'logo_mince',
       
       

    ];
}
