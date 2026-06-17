<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NumerosAmigos extends Model
{
    protected $table = 'numeros_amigos';
    protected $fillable = ['numero1', 'numero2', 'son_amigos'];
}
