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
        Schema::table('inventario', function (Blueprint $table) {
            $table->foreign(['id_categoria'], 'inventario_ibfk_1')->references(['id_categoria'])->on('categorias_productos');
            $table->foreign(['id_proveedor'], 'inventario_ibfk_2')->references(['id_proveedor'])->on('proveedores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inventario', function (Blueprint $table) {
            $table->dropForeign('inventario_ibfk_1');
            $table->dropForeign('inventario_ibfk_2');
        });
    }
};
