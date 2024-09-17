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
        Schema::create('facturas_detalle', function (Blueprint $table) {
            $table->id('id_fac_detalle');
            $table->bigInteger('cantidad');
            $table->double('total');
            $table->bigInteger('id_factura')->unsigned();
            $table->foreign('id_factura')->references('id_facturas')->on('facturas');
            $table->bigInteger('id_plato')->unsigned();
            $table->foreign('id_plato')->references('id_platos')->on('platos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturas_detalle');
    }
};
