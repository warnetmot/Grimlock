<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comprobante extends Model
{
    use HasFactory;
    protected $table = 'comprobantes';
    protected $fillable = ['consulta_id', 'fecha', 'detalle', 'importe'];

    public function consultor(){
        return $this->belongsTo(Consulta::class);
    }
}
