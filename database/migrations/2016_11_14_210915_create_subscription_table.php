<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscription', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('Socio')->nullable();
            $table->string('NumSocio')->nullable();
            $table->string('Nombre');
            $table->string('ApPat');
            $table->string('ApMat');
            $table->string('FechaNacimiento');
            $table->string('Genero');
            $table->string('Nacionalidad');
            $table->string('CP');
            $table->string('Grado_Academico');
            $table->string('Institucion');
            $table->string('Cargo');
            $table->string('Cel');
            $table->string('Email');

            $table->boolean('Info_Fiscal')->nullable();
            $table->string('Nombre_RS')->nullable();
            $table->string('RFC')->nullable();
            $table->string('Calle')->nullable();
            $table->string('Num_ext')->nullable();
            $table->string('Num_int')->nullable();
            $table->string('Colonia')->nullable();
            $table->string('Municipio')->nullable();
            $table->string('Estado')->nullable();
            $table->string('CP_fiscal')->nullable();
            $table->string('Email_fiscal')->nullable();
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
        Schema::dropIfExists('subscription');
    }
}
