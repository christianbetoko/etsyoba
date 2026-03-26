<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Stat extends Model
{
     use HasFactory;
    protected $fillable=['title','icon','link','number','is_active'];
}
