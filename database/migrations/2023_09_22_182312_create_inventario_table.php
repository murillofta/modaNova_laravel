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
        Schema::create('inventario', function (Blueprint $table) {
            $table->integer('id_producto', true);
            $table->string('nombre_producto', 50);
            $table->string('precio_producto', 50);
            $table->integer('cantidad_stock');
            $table->integer('id_categoria')->index('id_categoria');
            $table->integer('id_proveedor')->index('id_proveedor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventario');
    }
};
