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
            $table->string('ciudad');
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


        Schema::create('packages', function (Blueprint $table) {
            $table->id();

            $table->integer('codigo');
            $table->string('descripcion');
            $table->string('destinatario');
            $table->string('direcciocon lon');
            $table->timestamps();
        });

        Schema::create('distributes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('truck_drivers_id')->constrained('truck_drivers');
            $table->foreignId('package_id')->constrained('packages');
            $table->timestamps();
        });

        Schema::create('conducts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('truck_drivers_id')->constrained('truck_drivers');
            $table->foreignId('trucks_id')->constrained('trucks');
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conducts');
        Schema::dropIfExists('distributes');
        Schema::dropIfExists('packages');
        Schema::dropIfExists('trucks');
        Schema::dropIfExists('truck_drivers');

    }
};
