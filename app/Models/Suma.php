<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suma extends Model
{
    protected $table = 'sumas';
    protected $fillable = ['numero1', 'numero2', 'resultado'];
}
