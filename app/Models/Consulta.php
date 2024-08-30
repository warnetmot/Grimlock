<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['detalle', 'costo_servicio', 'tiempo_ejecucion', 'consultor_id', 'cliente_id'];

    public function consultor()
    {
        return $this->belongsTo(Consultor::class, 'consultor_id');
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }
}
