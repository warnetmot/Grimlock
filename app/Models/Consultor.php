<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultor extends Model
{
    use HasFactory;

    protected $table = 'consultores'; 
    protected $fillable = ['nombre', 'apellido', 'ci', 'profesion', 'experiencia', 'email', 'telefono', 'direccion'];

    public function formacion(){
        return $this->hasMany(Formacion::class);
    }
}
