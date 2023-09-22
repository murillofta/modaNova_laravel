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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->integer('id_usuario', true);
            $table->string('nombre_usuario', 100);
            $table->string('correo_usuario', 150)->unique();;
            $table->date('fecha_nacimiento_usuario');
            $table->string('numero_documento_usuario', 10)->unique();;
            $table->string('telefono_usuario', 10);
            $table->string('contraseña_usuario', 150);
            $table->integer('id_tipo_documento')->index('id_tipo_documento');
            $table->integer('id_rol')->index('id_rol');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
};
