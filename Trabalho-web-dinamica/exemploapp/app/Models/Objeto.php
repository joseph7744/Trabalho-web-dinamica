<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Objeto extends Model
{
    use hasFactory;
    protected $fillable = [
        'linha',
        'data',
        'booleano',
        'decimal',
        'inteiro',
    ];
}
