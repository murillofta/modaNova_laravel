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
        Schema::table('facturacion', function (Blueprint $table) {
            $table->foreign(['id_metodo_pago'], 'facturacion_ibfk_1')->references(['id_metodo_pago'])->on('metodos_pago');
            $table->foreign(['id_usuario'], 'facturacion_ibfk_2')->references(['id_usuario'])->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('facturacion', function (Blueprint $table) {
            $table->dropForeign('facturacion_ibfk_1');
            $table->dropForeign('facturacion_ibfk_2');
        });
    }
};
