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
        Schema::create('formaciones', function (Blueprint $table) {
            $table->id();
            $table->string('especialidad')->nullable();
            $table->string('nivel')->nullable();
            $table->integer('institucion')->nullable();
            $table->foreignId('consultor_id')->constrained('consultores')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formaciones');
    }
};
