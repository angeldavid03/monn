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
        Schema::create('registro_breaks', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_empleado')->index('id_empleado');
            $table->date('fecha');
            $table->timestamp('salida_break1');
            $table->timestamp('entrada_break1');
            $table->timestamp('salida_almuerzo');
            $table->timestamp('entrada_almuerzo');
            $table->timestamp('salida_break2');
            $table->timestamp('entrada_break2');
            $table->binary('foto')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registro_breaks');
    }
};
