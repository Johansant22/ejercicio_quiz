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
        Schema::create('truck_drivers', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->bigInteger('dni');
            $table->string('direccion');
            $table->bigInteger('telefono');
            $table->bigInteger('salario');
            $table->timestamps();
        });


        Schema::create('trucks', function (Blueprint $table) {
            $table->id();
            $table->string('matricula');
            $table->integer('modelo');
            $table->string('tipo');
            $table->bigInteger('potencia');
            $table->timestamps();
        });


        Schema::create('packeges', function (Blueprint $table) {
            $table->id();

            $table->integer('código');
            $table->string('descripción');
            $table->string('destinatario');
            $table->string('dirección');
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('truck_drivers');
        Schema::dropIfExists('trucks');
        Schema::dropIfExists('packages');
    }
};
