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
        Schema::create('platos', function (Blueprint $table) {
            $table->id('id_platos');
            $table->string('nombre plato',100);
            $table->string('descripcion plato');
            $table->string('precio');
            $table->bigInteger('id_ingrediente')->unsigned();
            $table->foreign('id_ingrediente')->references('id_ingredientes')->on('ingredientes');
            $table->bigInteger('id_menu')->unsigned();
            $table->foreign('id_menu')->references('id_menus')->on('menus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('platos');
    }
};
