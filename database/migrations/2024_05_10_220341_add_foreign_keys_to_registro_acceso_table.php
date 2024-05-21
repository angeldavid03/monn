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
        Schema::table('registro_acceso', function (Blueprint $table) {
            $table->foreign(['codigo_empleado'], 'registro_acceso_ibfk_1')->references(['codigo_empleado'])->on('empleados')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('registro_acceso', function (Blueprint $table) {
            $table->dropForeign('registro_acceso_ibfk_1');
        });
    }
};
