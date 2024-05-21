<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('obra', function (Blueprint $table) {
            $table->id();
            $table->string('obr_estado_obra');
            $table->string('obr_lugar');
            $table->date('obr_fecha_inicio');
            $table->date('obr_fecha_fin');
            $table->string('obr_encargado');
            $table->unsignedBigInteger('her_id');
            $table->unsignedBigInteger('per_id');
            $table->foreign('her_id')->references('id')->on('herramientas'); 
            $table->foreign('per_id')->references('id')->on('personas'); 
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('obra');
    }
};
