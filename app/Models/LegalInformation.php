<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LegalInformation extends Model
{
    use HasFactory;
    protected $fillable=[
        'rccm',
        'idnat',
        'impot',
    ];


}
