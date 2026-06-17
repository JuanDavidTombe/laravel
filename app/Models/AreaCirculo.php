<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreaCirculo extends Model
{
    protected $table = 'area_circulos';
    protected $fillable = ['radio', 'resultado'];
}
