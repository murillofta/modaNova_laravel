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
        Schema::create('ventas', function (Blueprint $table) {
            $table->integer('id_venta', true);
            $table->integer('id_usuario')->index('id_usuario');
            $table->integer('id_producto')->index('id_producto');
            $table->integer('cantidad_venta');
            $table->date('fecha_venta');
            $table->string('precio_total', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas');
    }
};
