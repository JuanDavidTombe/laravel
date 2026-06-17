<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factorial extends Model
{
    protected $table = 'factorials';
    protected $fillable = ['numero', 'resultado'];
}
