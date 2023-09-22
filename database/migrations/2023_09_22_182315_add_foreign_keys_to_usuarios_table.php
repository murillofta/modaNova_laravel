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
        Schema::table('usuarios', function (Blueprint $table) {
            $table->foreign(['id_tipo_documento'], 'usuarios_ibfk_1')->references(['id_tipo_documento'])->on('tipo_documento');
            $table->foreign(['id_rol'], 'usuarios_ibfk_2')->references(['id_rol'])->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usuarios', function (Blueprint $table) {
            $table->dropForeign('usuarios_ibfk_1');
            $table->dropForeign('usuarios_ibfk_2');
        });
    }
};
