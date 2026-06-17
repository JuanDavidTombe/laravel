<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    protected $table = 'divisions';
    protected $fillable = ['numero1', 'numero2', 'resultado']; // O 'dividendo', 'divisor' según tu migración
}
