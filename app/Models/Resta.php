<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resta extends Model
{
    protected $table = 'restas';

    protected $fillable = ['numero1', 'numero2', 'resultado'];
}
