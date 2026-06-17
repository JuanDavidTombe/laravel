<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreaTriangulo extends Model
{
    protected $table = 'area_triangulos';
    protected $fillable = ['base', 'altura', 'resultado'];
}
