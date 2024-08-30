<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formacion extends Model
{
    use HasFactory;
    protected $table = 'formaciones';
    protected $fillable = ['especialidad', 'nivel', 'institucion', 'consultor_id'];

    public function consultor(){
        return $this->belongsTo(Consultor::class);
    }
}
