<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable=["Nombre","ApellidoP", "ApellidoM","Tipo"];
    use HasFactory;
}
