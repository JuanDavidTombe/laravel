<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Multiplicacion extends Model
{
    protected $table = 'multiplicacions';
    protected $fillable = ['numero1', 'numero2', 'resultado'];
}
