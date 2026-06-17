<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Primo extends Model
{
    protected $table = 'primos';
    protected $fillable = ['numero', 'es_primo'];
}
