<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $table = 'sitios'; #Como nuestra tabla se llama diferente al modelo, debemos colocar
    #el nombre aqui
    use HasFactory;
    
}
