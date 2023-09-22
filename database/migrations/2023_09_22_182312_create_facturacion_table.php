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
        Schema::create('facturacion', function (Blueprint $table) {
            $table->integer('id_factura', true);
            $table->integer('id_usuario')->index('id_usuario');
            $table->integer('nombre_producto');
            $table->integer('id_metodo_pago')->index('id_metodo_pago');
            $table->date('fecha_factura');
            $table->decimal('precio_total', 10, 0);
            $table->string('ciudad', 50);
            $table->string('direccion', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facturacion');
    }
};
