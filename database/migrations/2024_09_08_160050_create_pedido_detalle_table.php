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
        Schema::create('pedido_detalle', function (Blueprint $table) {
            $table->id('id_Ped_Detalle');
            $table->bigInteger('cantidad');
            $table->double('subtotal');
            $table->bigInteger('id_plato')->unsigned();
            $table->foreign('id_plato')->references('id_platos')->on('platos');
            $table->bigInteger('id_pedido')->unsigned();
            $table->foreign('id_pedido')->references('id_pedidos')->on('pedidos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedido_detalle');
    }
};
