<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('consultas', function (Blueprint $table) {
            $table->id();
            $table->text('detalle');
            $table->decimal('costo_servicio', 10, 2);
            $table->integer('tiempo_ejecucion');
            $table->foreignId('consultor_id')->constrained('consultores') ->onDelete('cascade');
            $table->foreignId('cliente_id')->constrained('clientes') ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultas');
    }
};
