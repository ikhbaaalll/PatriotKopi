<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coffee extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'bekasi_section',
        'name',
        'price',
        'start',
        'end',
        'concept',
        'place',
        'instagram',
        'image'
    ];

    protected $casts = [
        'start:datetime:H:i',
        'end:datetime:H:i'
    ];
}
