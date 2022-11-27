<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('temperatura');
            $table->string('f_cardiaca');
            $table->decimal('peso',5,2);
            $table->decimal('talla',5,2);
            $table->string('p_arterial');
            $table->string('saturacion');
            $table->decimal('s_corporal')->nullable();
            $table->decimal('imc')->nullable();
            $table->string('r_enfermedad')->nullable();
            $table->string('clasificacion_imc')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
};
