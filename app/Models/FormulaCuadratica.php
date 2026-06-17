<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormulaCuadratica extends Model
{
    protected $table = 'formula_cuadraticas';
    protected $fillable = ['numero1', 'numero2', 'numero3', 'x1', 'x2'];
}
